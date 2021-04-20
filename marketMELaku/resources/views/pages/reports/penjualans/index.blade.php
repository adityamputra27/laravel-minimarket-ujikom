@extends('layouts.top-content')
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>LAPORAN PENJUALAN</h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <div class="clearfix"></div>
                    <h4>Filter Laporan</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Mulai Tanggal :</label>
                                <input type="date" name="" id="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Sampai Tanggal :</label>
                                <input type="date" name="" id="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">&nbsp;</label>
                                <button class="btn btn-primary btn-block"><i class="fa fa-filter"></i> Tampilkan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <div class="clearfix"></div>
                    <h4>Data Penjualan</h4>
                    <div class="alert alert-info" role="alert" style="margin-top: 1.5em;">
                        <h5 class="text-center"><i class="fa fa-info-circle"></i> Silahkan Filter Laporan Terlebih Dahulu.</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
@endpush