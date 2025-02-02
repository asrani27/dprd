@extends('layouts.app')
@push('css')
    
@endpush
@section('content')

<div class="row column_title">
  <div class="col-md-12">
     <div class="page_title">
        <h2>Data pansus</h2>
     </div>
  </div>
</div>
<div class="white_shd full margin_bottom_30">
  <div class="full graph_head">
     <div class="heading1 margin_0">
       
      <a href="/superadmin/pansus/create" class="btn btn-flat btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
     </div>
  </div>
  <div class="table_section padding_infor_info">
     <div class="table-responsive-sm">
        <table class="table table-bordered">
           <thead>
              <tr style="background-color: rgb(52, 52, 51); font-weight:bold;color:aliceblue">
                <th>No</th>
                <th>Nama</th>
                <th>Masa Kerja</th>
                <th>Pembahasan</th>
                <th>jumlah</th>
                <th>pimpinan</th>
                <th>Komisi</th>
                <th>Anggota</th>
                <th>Keterangan</th>
                <th>Aksi</th>
              </tr>
           </thead>
           <tbody>
            
            @foreach ($data as $key => $item)
            <tr>
              <td>{{$data->firstItem() + $key}}</td>
              <td>{{$item->nama}}</td>
              <td>{{$item->masa_kerja}}</td>
              <td>{{$item->pembahasan}}</td>
              <td>{{$item->jumlah}}</td>
              <td>{{$item->pimpinan == null ? null : $item->pimpinan->nama}}</td>
              <td>{{$item->komisi == null ? null : $item->komisi->nama}}</td>
              <td>
               
               @foreach (anggota()->whereIn('id', json_decode($item->anggota_id)) as $item2)
                   - {{$item2->nama}} <br/>
               @endforeach

              </td>
              <td>{{$item->keterangan}}</td>
              <td>
                <a href="/superadmin/pansus/edit/{{$item->id}}" class="btn btn-flat btn-sm btn-success"><i class="fa fa-edit"></i> Edit</a>
                <a href="/superadmin/pansus/delete/{{$item->id}}" class="btn btn-flat btn-sm btn-danger" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i> Delete</a>
              </td>
            </tr>
            @endforeach
           </tbody>
        </table>
        {{$data->links()}}
     </div>
  </div>
</div>

@endsection
@push('js')

@endpush
