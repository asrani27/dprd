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
        <form method="post" action="/superadmin/pansus/create">
            @csrf
        <fieldset>
            <div class="field">
               <label class="label_field">Nama Pansus</label>
               <input type="text" class="form-control" name="nama" required>
            </div>
            <br/>
            <div class="field">
               <label class="label_field">Masa Kerja</label>
               <input type="text" class="form-control" name="masa_kerja" required>
            </div>
            <br/>
            <div class="field">
               <label class="label_field">Pembahasan</label>
               <input type="text" class="form-control" name="pembahasan" required>
            </div>
            <br/>
            <div class="field">
               <label class="label_field">Jumlah Anggota</label>
               <input type="text" class="form-control" name="jumlah" required>
            </div>
            <br/>
            <div class="field">
               <label class="label_field">Pimpinan</label>
               <select class="form-control" name="pimpinan_id" required>
                  <option value="">-pilih-</option>
                  @foreach (pimpinan() as $item)
                  <option value="{{$item->id}}">{{$item->nama}}</option>
                  @endforeach
               </select>
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
               <label class="label_field">Checklist Anggota :</label><br/>
                  @foreach (anggota() as $item)
                  <input type="checkbox" value="{{$item->id}}" name="anggota_id[]"> &nbsp;{{$item->nama}} <br/>
                  @endforeach
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