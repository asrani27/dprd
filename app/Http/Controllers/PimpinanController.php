<?php

namespace App\Http\Controllers;

use App\Models\Pimpinan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PimpinanController extends Controller
{

    public function index()
    {
        $data = Pimpinan::paginate(10);
        return view('admin.pimpinan.index', compact('data'));
    }
    public function create()
    {
        return view('admin.pimpinan.create');
    }

    public function delete($id)
    {
        $data = Pimpinan::find($id)->delete();
        Session::flash('success', 'Berhasil Di hapus');
        return back();
    }

    public function edit($id)
    {
        $data = Pimpinan::find($id);

        return view('admin.pimpinan.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        Pimpinan::find($id)->update($req->all());
        Session::flash('success', 'Berhasil Di Simpan');
        return redirect('/superadmin/pimpinan');
    }

    public function store(Request $req)
    {
        Pimpinan::create($req->all());
        Session::flash('success', 'Berhasil Di Simpan');
        return redirect('/superadmin/pimpinan');
    }
}
