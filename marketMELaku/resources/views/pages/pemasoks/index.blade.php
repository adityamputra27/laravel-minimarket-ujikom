@extends('layouts.top-content')
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>DATA BARANG</h3>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <a href="" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah Data</a>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Pemasok</th>
                            <th>Nama Pemasok</th>
                            <th>Alamat</th>
                            <th>Kota</th>
                            <th>No. Telp</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($pemasok as $key => $value)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $value->kode_pemasok }}</td>
                        <td>{{ $value->nama_pemasok }}</td>
                        <td>{{ $value->alamat }}</td>
                        <td>{{ $value->kota }}</td>
                        <td>{{ $value->no_telp }}</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-success"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
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