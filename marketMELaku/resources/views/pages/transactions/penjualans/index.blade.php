@extends('layouts.top-content')
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>TRANSAKSI PENJUALAN</h3>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <a href="{{ route('penjualans.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah Data</a>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                @if($message = Session::get('success'))
                <div class="alert alert-success" role="alert" id="flash-message">
                    <i class="fa fa-check-circle"></i> <strong>{{ $message }}</strong>
                </div>
                @elseif($message = Session::get('errror'))
                <div class="alert alert-danger" role="alert" id="flash-message">
                    <i class="fa fa-exclamation-triangle"></i> <strong>{{ $message }}</strong>
                </div>
                @endif
                {{-- Filtering (Belum) --}}
                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Masuk</th>
                            <th>Tanggal Masuk</th>
                            <th>Pemasok</th>
                            <th>Kasir</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($transaksiBeli as $key => $value)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td><h5 class="badge badge-success">{{ $value->kode_masuk }}</h5></td>
                            <td>{{ date('d F Y', strtotime($value->tanggal_masuk)) }}</td>
                            <td><span class="text-info">{{ $value->pemasoks->nama_pemasok }}</span></td>
                            <td>{{ $value->users->name }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="#" class="btn btn-info"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary"><i class="fa fa-print"></i></a>
                                    <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach --}}
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