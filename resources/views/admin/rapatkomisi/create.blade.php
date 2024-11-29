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
        <form method="post" action="/superadmin/agendakomisi/create">
            @csrf
        <fieldset>
            <div class="field">
               <label class="label_field">Nama Agenda Rapat</label>
               <input type="text" class="form-control" name="nama" required>
            </div>
            <br/>
            <div class="field">
               <label class="label_field">Jenis Agenda Rapat</label>
               <input type="text" class="form-control" name="jenis" required>
            </div>
            <br/>
            <div class="field">
               <label class="label_field">Tanggal</label>
               <input type="date" class="form-control" name="tanggal" required>
            </div>
            <br/>
            <div class="field">
               <label class="label_field">Tempat Agenda Rapat</label>
               <input type="text" class="form-control" name="tempat" required>
            </div>
            <br/>
            <div class="field">
               <label class="label_field">Komisi</label>
               <select class="form-control" name="komisi_id" required>
                  <option value="">-pilih-</option>
                  @foreach (komisi() as $item)
                  <option value="{{$item->id}}">{{$item->nama}}</option>
                  @endforeach
               </select>
            </div>
            <br/>
           <div class="field">
              <label class="label_field">Keterangan</label>
              <input type="text" class="form-control" name="keterangan">
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