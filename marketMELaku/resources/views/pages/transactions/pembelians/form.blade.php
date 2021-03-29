@extends('layouts.top-content')
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>TAMBAH TRANSAKSI PEMBELIAN</h3>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_content">
                    <fieldset>
                        <legend>Pembelian </legend>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kode Pembelian :</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" value="{{ $kode }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal :</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="date" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 1em;">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <a href="" data-toggle="modal" data-target="#modalBarang" class="btn btn-success"><i class="fa fa-success"></i> Tambah Barang</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-4 col-xs-12" for="last-name">Toko / Distributor :</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="" id="" class="select2 form-control col-md-7 col-xs-12">
                                        <option value="">TEST</option>
                                        <option value="">TEST</option>
                                        <option value="">TEST</option>
                                        <option value="">TEST</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_content">
                    <fieldset>
                        <legend>Data Barang</legend>
                        <table id="datatable" class="table table-striped table-bordered">
                            <tbody>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Harga</th>
                                    <th>QTY</th>
                                    <th>Total</th>
                                    <th>Harga</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </tbody>
                        </table>
                        
                        <div class="text-right">
                            <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> Simpan</button>
                        </div>
                    </fieldset>        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    <script>
        $(function() {
            
        });
    </script>
@endpush