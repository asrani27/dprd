<?php

namespace App\Http\Controllers;

use App\Models\RapatPansus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RapatPansusController extends Controller
{

    public function index()
    {
        $data = RapatPansus::paginate(10);
        return view('admin.rapatpansus.index', compact('data'));
    }
    public function create()
    {
        return view('admin.rapatpansus.create');
    }

    public function delete($id)
    {
        $data = RapatPansus::find($id)->delete();
        Session::flash('success', 'Berhasil Di hapus');
        return back();
    }

    public function edit($id)
    {
        $data = RapatPansus::find($id);

        return view('admin.rapatpansus.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        RapatPansus::find($id)->update($req->all());
        Session::flash('success', 'Berhasil Di Simpan');
        return redirect('/superadmin/agendapansus');
    }

    public function store(Request $req)
    {
        RapatPansus::create($req->all());
        Session::flash('success', 'Berhasil Di Simpan');
        return redirect('/superadmin/agendapansus');
    }
}
