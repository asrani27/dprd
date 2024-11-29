<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AnggotaController extends Controller
{
    public function index()
    {
        $data = Anggota::paginate(10);
        return view('admin.anggota.index', compact('data'));
    }
    public function create()
    {
        return view('admin.anggota.create');
    }

    public function delete($id)
    {
        $data = Anggota::find($id)->delete();
        Session::flash('success', 'Berhasil Di hapus');
        return back();
    }

    public function edit($id)
    {
        $data = Anggota::find($id);

        return view('admin.anggota.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        Anggota::find($id)->update($req->all());
        Session::flash('success', 'Berhasil Di Simpan');
        return redirect('/superadmin/anggota');
    }

    public function store(Request $req)
    {
        Anggota::create($req->all());
        Session::flash('success', 'Berhasil Di Simpan');
        return redirect('/superadmin/anggota');
    }
}
