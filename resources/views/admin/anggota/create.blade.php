@extends('layouts.app')
@push('css')

@endpush
@section('content')
<div class="row column_title">
    <div class="col-md-12">
       <div class="page_title">
          <h2>Tambah Data</h2>
       </div>
    </div>
  </div>
  <div class="white_shd full margin_bottom_30">
    <div class="padding_infor_info">
        <form method="post" action="/superadmin/anggota/create">
            @csrf
        <fieldset>
            
            <div class="field">
               <label class="label_field">Nama Lengkap</label>
               <input type="text" class="form-control" name="nama">
            </div>
            <br/>
            <div class="field">
               <label class="label_field">Fraksi</label>
               <input type="text" class="form-control" name="fraksi">
            </div>
            <br/>
           <div class="field">
              <label class="label_field">Jabatan</label>
              <input type="text" class="form-control" name="jabatan">
           </div>
           <br/>
           <div class="field">
              <label class="label_field">Periode</label>
              <input type="text" class="form-control" name="periode">
           </div>
           <br/>
           <div class="field">
              <label class="label_field">Telp</label>
              <input type="text" class="form-control" name="telp">
           </div>
           <br/>
           <div class="field">
              <label class="label_field">Alamat</label>
              <input type="text" class="form-control" name="alamat">
           </div>
           <br/>
           
           <div class="field margin_0">
            
              <button class="main_bt"><i class="fa fa-save"></i> Simpan</button>
           </div>
        </fieldset>
        </form>
    </div>
  </div>
  
@endsection
@push('js')

@endpush