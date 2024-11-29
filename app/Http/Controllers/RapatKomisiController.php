<?php

namespace App\Http\Controllers;

use App\Models\RapatKomisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RapatKomisiController extends Controller
{

    public function index()
    {
        $data = RapatKomisi::paginate(10);
        return view('admin.rapatkomisi.index', compact('data'));
    }
    public function create()
    {
        return view('admin.rapatkomisi.create');
    }

    public function delete($id)
    {
        $data = RapatKomisi::find($id)->delete();
        Session::flash('success', 'Berhasil Di hapus');
        return back();
    }

    public function edit($id)
    {
        $data = RapatKomisi::find($id);

        return view('admin.rapatkomisi.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        RapatKomisi::find($id)->update($req->all());
        Session::flash('success', 'Berhasil Di Simpan');
        return redirect('/superadmin/agendakomisi');
    }

    public function store(Request $req)
    {
        RapatKomisi::create($req->all());
        Session::flash('success', 'Berhasil Di Simpan');
        return redirect('/superadmin/agendakomisi');
    }
}
