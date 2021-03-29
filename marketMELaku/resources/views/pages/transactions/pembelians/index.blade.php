@extends('layouts.top-content')
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>TRANSAKSI PEMBELIAN</h3>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <a href="{{ route('pembelians.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah Transaksi</a>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>#</th>
                            <th>#</th>
                            <th>#</th>
                            <th>#</th>
                            <th>#</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                    
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