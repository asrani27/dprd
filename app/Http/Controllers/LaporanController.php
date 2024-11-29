<?php

namespace App\Http\Controllers;

use App\Models\Hasil;
use App\Models\Pansus;
use App\Models\Pengaduan;
use App\Models\RapatKomisi;
use App\Models\RapatPansus;
use App\Models\Tindakan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanController extends Controller
{

    public function index()
    {
        return view('admin.laporan.index');
    }


    public function pdf()
    {
        $bulan = request()->get('bulan');
        $tahun = request()->get('tahun');
        if (request()->get('jenis') == '1') {
            $data = Pansus::whereMonth('created_at', $bulan)
                ->whereYear('created_at', $tahun)
                ->get();
            $pdf = Pdf::loadView('admin.laporan.pdf_pansus', compact('data', 'bulan', 'tahun'))->setPaper('a4', 'landscape');;
            return $pdf->stream();
        }
        if (request()->get('jenis') == '2') {
            $data = RapatKomisi::whereMonth('created_at', $bulan)
                ->whereYear('created_at', $tahun)
                ->get();
            $pdf = Pdf::loadView('admin.laporan.pdf_rapatkomisi', compact('data', 'bulan', 'tahun'))->setPaper('a4', 'landscape');;
            return $pdf->stream();
        }
        if (request()->get('jenis') == '3') {
            $data = RapatPansus::whereMonth('created_at', $bulan)
                ->whereYear('created_at', $tahun)
                ->get();
            $pdf = Pdf::loadView('admin.laporan.pdf_rapatpansus', compact('data', 'bulan', 'tahun'))->setPaper('a4', 'landscape');;
            return $pdf->stream();
        }
        if (request()->get('jenis') == '4') {
            $data = Hasil::whereMonth('created_at', $bulan)
                ->whereYear('created_at', $tahun)
                ->get();
            $pdf = Pdf::loadView('admin.laporan.pdf_hasil', compact('data', 'bulan', 'tahun'))->setPaper('a4', 'landscape');;
            return $pdf->stream();
        }
    }
}
