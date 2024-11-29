<?php

namespace App\Http\Controllers;

use App\Models\Komisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KomisiController extends Controller
{

    public function index()
    {
        $data = Komisi::paginate(10);
        return view('admin.komisi.index', compact('data'));
    }
    public function create()
    {
        return view('admin.komisi.create');
    }

    public function delete($id)
    {
        $data = Komisi::find($id)->delete();
        Session::flash('success', 'Berhasil Di hapus');
        return back();
    }

    public function edit($id)
    {
        $data = Komisi::find($id);

        return view('admin.komisi.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        Komisi::find($id)->update($req->all());
        Session::flash('success', 'Berhasil Di Simpan');
        return redirect('/superadmin/komisi');
    }

    public function store(Request $req)
    {
        Komisi::create($req->all());
        Session::flash('success', 'Berhasil Di Simpan');
        return redirect('/superadmin/komisi');
    }
}
