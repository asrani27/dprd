<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BKMController;
use App\Http\Controllers\BKMPController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerdaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KomisiController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\PansusController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PelaporController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\PimpinanController;
use App\Http\Controllers\TindakanController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\RapatKomisiController;
use App\Http\Controllers\RapatPansusController;

Route::get('/', function () {
    return view('login');
});

Route::post('login', [LoginController::class, 'login']);
Route::get('login', [LoginController::class, 'index'])->name('login');

Route::get('/logout', [LogoutController::class, 'logout']);
Route::group(['middleware' => ['auth', 'role:superadmin']], function () {
    Route::get('superadmin', [HomeController::class, 'superadmin']);

    Route::get('superadmin/user', [UserController::class, 'index']);
    Route::get('superadmin/user/detail/{id}', [UserController::class, 'detail']);
    Route::get('superadmin/user/create', [UserController::class, 'create']);
    Route::post('superadmin/user/create', [UserController::class, 'store']);
    Route::get('superadmin/user/cari', [UserController::class, 'cari']);
    Route::get('superadmin/user/delete/{id}', [UserController::class, 'delete']);
    Route::get('superadmin/user/edit/{id}', [UserController::class, 'edit']);
    Route::post('superadmin/user/edit/{id}', [UserController::class, 'update']);


    Route::get('superadmin/pimpinan', [PimpinanController::class, 'index']);
    Route::get('superadmin/pimpinan/create', [PimpinanController::class, 'create']);
    Route::post('superadmin/pimpinan/create', [PimpinanController::class, 'store']);
    Route::get('superadmin/pimpinan/cari', [PimpinanController::class, 'cari']);
    Route::get('superadmin/pimpinan/delete/{id}', [PimpinanController::class, 'delete']);
    Route::get('superadmin/pimpinan/edit/{id}', [PimpinanController::class, 'edit']);
    Route::post('superadmin/pimpinan/edit/{id}', [PimpinanController::class, 'update']);

    Route::get('superadmin/anggota', [AnggotaController::class, 'index']);
    Route::get('superadmin/anggota/create', [AnggotaController::class, 'create']);
    Route::post('superadmin/anggota/create', [AnggotaController::class, 'store']);
    Route::get('superadmin/anggota/cari', [AnggotaController::class, 'cari']);
    Route::get('superadmin/anggota/delete/{id}', [AnggotaController::class, 'delete']);
    Route::get('superadmin/anggota/edit/{id}', [AnggotaController::class, 'edit']);
    Route::post('superadmin/anggota/edit/{id}', [AnggotaController::class, 'update']);

    Route::get('superadmin/komisi', [KomisiController::class, 'index']);
    Route::get('superadmin/komisi/create', [KomisiController::class, 'create']);
    Route::post('superadmin/komisi/create', [KomisiController::class, 'store']);
    Route::get('superadmin/komisi/cari', [KomisiController::class, 'cari']);
    Route::get('superadmin/komisi/delete/{id}', [KomisiController::class, 'delete']);
    Route::get('superadmin/komisi/edit/{id}', [KomisiController::class, 'edit']);
    Route::post('superadmin/komisi/edit/{id}', [KomisiController::class, 'update']);

    Route::get('superadmin/lokasi', [LokasiController::class, 'index']);
    Route::get('superadmin/lokasi/create', [LokasiController::class, 'create']);
    Route::post('superadmin/lokasi/create', [LokasiController::class, 'store']);
    Route::get('superadmin/lokasi/cari', [LokasiController::class, 'cari']);
    Route::get('superadmin/lokasi/delete/{id}', [LokasiController::class, 'delete']);
    Route::get('superadmin/lokasi/edit/{id}', [LokasiController::class, 'edit']);
    Route::post('superadmin/lokasi/edit/{id}', [LokasiController::class, 'update']);

    Route::get('superadmin/pansus', [PansusController::class, 'index']);
    Route::get('superadmin/pansus/create', [PansusController::class, 'create']);
    Route::post('superadmin/pansus/create', [PansusController::class, 'store']);
    Route::get('superadmin/pansus/cari', [PansusController::class, 'cari']);
    Route::get('superadmin/pansus/delete/{id}', [PansusController::class, 'delete']);
    Route::get('superadmin/pansus/edit/{id}', [PansusController::class, 'edit']);
    Route::post('superadmin/pansus/edit/{id}', [PansusController::class, 'update']);

    Route::get('superadmin/hasil', [HasilController::class, 'index']);
    Route::get('superadmin/hasil/create', [HasilController::class, 'create']);
    Route::post('superadmin/hasil/create', [HasilController::class, 'store']);
    Route::get('superadmin/hasil/cari', [HasilController::class, 'cari']);
    Route::get('superadmin/hasil/delete/{id}', [HasilController::class, 'delete']);
    Route::get('superadmin/hasil/edit/{id}', [HasilController::class, 'edit']);
    Route::post('superadmin/hasil/edit/{id}', [HasilController::class, 'update']);

    Route::get('superadmin/agendakomisi', [RapatKomisiController::class, 'index']);
    Route::get('superadmin/agendakomisi/create', [RapatKomisiController::class, 'create']);
    Route::post('superadmin/agendakomisi/create', [RapatKomisiController::class, 'store']);
    Route::get('superadmin/agendakomisi/cari', [RapatKomisiController::class, 'cari']);
    Route::get('superadmin/agendakomisi/delete/{id}', [RapatKomisiController::class, 'delete']);
    Route::get('superadmin/agendakomisi/edit/{id}', [RapatKomisiController::class, 'edit']);
    Route::post('superadmin/agendakomisi/edit/{id}', [RapatKomisiController::class, 'update']);

    Route::get('superadmin/agendapansus', [RapatPansusController::class, 'index']);
    Route::get('superadmin/agendapansus/create', [RapatPansusController::class, 'create']);
    Route::post('superadmin/agendapansus/create', [RapatPansusController::class, 'store']);
    Route::get('superadmin/agendapansus/cari', [RapatPansusController::class, 'cari']);
    Route::get('superadmin/agendapansus/delete/{id}', [RapatPansusController::class, 'delete']);
    Route::get('superadmin/agendapansus/edit/{id}', [RapatPansusController::class, 'edit']);
    Route::post('superadmin/agendapansus/edit/{id}', [RapatPansusController::class, 'update']);

    Route::get('superadmin/laporan', [LaporanController::class, 'index']);
    Route::get('superadmin/laporan/print', [LaporanController::class, 'pdf']);
});
