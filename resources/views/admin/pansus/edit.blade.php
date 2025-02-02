@extends('layouts.app')
@push('css')

@endpush
@section('content')
<div class="row column_title">
   <div class="col-md-12">
      <div class="page_title">
         <h2>Edit Data</h2>
      </div>
   </div>
</div>
<div class="white_shd full margin_bottom_30">
   <div class="padding_infor_info">
      <form method="post" action="/superadmin/pansus/edit/{{$data->id}}">
         @csrf
         <fieldset>
            <div class="field">
               <label class="label_field">Nama Pansus</label>
               <input type="text" class="form-control" name="nama" value="{{$data->nama}}" required>
            </div>
            <br />
            <div class="field">
               <label class="label_field">Masa Kerja</label>
               <input type="text" class="form-control" name="masa_kerja" value="{{$data->masa_kerja}}" required>
            </div>
            <br />
            <div class="field">
               <label class="label_field">Pembahasan</label>
               <input type="text" class="form-control" name="pembahasan" value="{{$data->pembahasan}}" required>
            </div>
            <br />
            <div class="field">
               <label class="label_field">Jumlah Anggota</label>
               <input type="text" class="form-control" name="jumlah" value="{{$data->jumlah}}" required>
            </div>
            <br />

            <div class="field">
               <label class="label_field">Pimpinan</label>
               <select class="form-control" name="pimpinan_id" required>
                  <option value="">-pilih-</option>
                  @foreach (pimpinan() as $item)
                  <option value="{{$item->id}}" {{$data->pimpinan_id == $item->id ? 'selected':''}}>{{$item->nama}}
                  </option>
                  @endforeach
               </select>
            </div>
            <br />
            <div class="field">
               <label class="label_field">Komisi</label>
               <select class="form-control" name="komisi_id" required>
                  <option value="">-pilih-</option>
                  @foreach (komisi() as $item)
                  <option value="{{$item->id}}" {{$data->komisi_id == $item->id ? 'selected':''}}>{{$item->nama}}
                  </option>
                  @endforeach
               </select>
            </div>
            <br />
            <div class="field">
               <label class="label_field">Checklist Anggota :</label><br />

               @foreach (anggota() as $item)
               @if (json_decode($data->anggota_id) == null)
               <input type="checkbox" value="{{$item->id}}" name="anggota_id[]"> &nbsp;{{$item->nama}} <br />
               @else

               @if(in_array($item->id, json_decode($data->anggota_id)))
               <input type="checkbox" value="{{$item->id}}" name="anggota_id[]" checked> &nbsp;{{$item->nama}} <br />
               @else
               <input type="checkbox" value="{{$item->id}}" name="anggota_id[]"> &nbsp;{{$item->nama}} <br />
               @endif
               @endif
               @endforeach
            </div>
            <br />

            <div class="field">
               <label class="label_field">Keterangan</label>
               <input type="text" class="form-control" name="keterangan" value="{{$data->keterangan}}">
            </div>
            <br />

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