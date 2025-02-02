@extends('layouts.app')
@push('css')

@endpush
@section('content')

<div class="row column_title">
    <div class="col-md-12">
        <div class="page_title">
            <h2>Data Biodata</h2>
        </div>
    </div>
</div>
<div class="row column1">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="white_shd full margin_bottom_30">
            <div class="full graph_head">
                <div class="heading1 margin_0">
                    <h2>Biodata detail</h2>
                </div>
            </div>
            <div class="full price_table padding_infor_info">
                <div class="row">
                    <!-- user profile section -->
                    <!-- profile image -->
                    <div class="col-lg-12">
                        <div class="full dis_flex center_text">
                            <div class="profile_img"><img width="180" class="rounded-circle"
                                    src="/pluto/images/layout_img/user_img.jpg" alt="#"></div>
                            <div class="profile_contant">
                                <div class="contact_inner">
                                    <h3>{{$data->nama}}.</h3>
                                    <p><strong>NIK: </strong>{{$data->nik}}</p>
                                    <p><strong>Alamat: </strong>{{$data->alamat}}</p>
                                    <p><strong>Jenis Kelamin: </strong>{{$data->jkel}}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    <!-- end row -->
</div>

@endsection
@push('js')

@endpush