<?php

namespace App\Http\Controllers;

use App\Models\Pansus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PansusController extends Controller
{
    public function index()
    {
        $data = Pansus::paginate(10);
        return view('admin.pansus.index', compact('data'));
    }
    public function create()
    {
        return view('admin.pansus.create');
    }

    public function delete($id)
    {
        $data = Pansus::find($id)->delete();
        Session::flash('success', 'Berhasil Di hapus');
        return back();
    }

    public function edit($id)
    {
        $data = Pansus::find($id);

        return view('admin.pansus.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $param = $req->all();
        $param['anggota_id'] = json_encode($req->anggota_id);
        Pansus::find($id)->update($param);
        Session::flash('success', 'Berhasil Di Simpan');
        return redirect('/superadmin/pansus');
    }

    public function store(Request $req)
    {
        $param = $req->all();
        $param['anggota_id'] = json_encode($req->anggota_id);

        Pansus::create($param);
        Session::flash('success', 'Berhasil Di Simpan');
        return redirect('/superadmin/pansus');
    }
}
