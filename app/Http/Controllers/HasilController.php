<?php

namespace App\Http\Controllers;

use App\Models\Hasil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class HasilController extends Controller
{

    public function index()
    {
        $data = Hasil::paginate(10);
        return view('admin.hasil.index', compact('data'));
    }
    public function create()
    {
        return view('admin.hasil.create');
    }

    public function delete($id)
    {
        $data = Hasil::find($id)->delete();
        Session::flash('success', 'Berhasil Di hapus');
        return back();
    }

    public function edit($id)
    {
        $data = Hasil::find($id);

        return view('admin.hasil.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        Hasil::find($id)->update($req->all());
        Session::flash('success', 'Berhasil Di Simpan');
        return redirect('/superadmin/hasil');
    }

    public function store(Request $req)
    {
        Hasil::create($req->all());
        Session::flash('success', 'Berhasil Di Simpan');
        return redirect('/superadmin/hasil');
    }
}
