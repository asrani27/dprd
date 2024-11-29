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
        <form method="post" action="/superadmin/hasil/create">
            @csrf
        <fieldset>
            <div class="field">
               <label class="label_field">Rapat Komisi</label>
               <select class="form-control" name="rapat_komisi_id" required>
                  <option value="">-pilih-</option>
                  @foreach (rapatkomisi() as $item)
                  <option value="{{$item->id}}">{{$item->nama}}</option>
                  @endforeach
               </select>
            </div>
            <br/>
            <div class="field">
               <label class="label_field">Rapat Pansus</label>
               <select class="form-control" name="rapat_pansus_id" required>
                  <option value="">-pilih-</option>
                  @foreach (rapatpansus() as $item)
                  <option value="{{$item->id}}">{{$item->nama}}</option>
                  @endforeach
               </select>
            </div>
            <br/>
           <div class="field">
              <label class="label_field">Notulensi</label>
              <input type="text" class="form-control" name="notulensi">
           </div>
           <br/>
           <div class="field">
              <label class="label_field">Catatan</label>
              <input type="text" class="form-control" name="catatan">
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