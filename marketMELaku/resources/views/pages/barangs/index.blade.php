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
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalForm">
                        <i class="fa fa-plus-circle"></i> Tambah Data
                    </button>
                    <div class="clearfix"></div>
                </div>
                @if($message = Session::get('success'))
                <div id="flash-message" class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
                @elseif($message = Session::get('error'))
                <div id="flash-message" class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
                @endif
                <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Barang</th>
                                <th>Produk</th>
                                <th>Nama Barang</th>
                                <th>Satuan</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($barang as $key => $value)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $value->kode_barang }}</td>
                            <td>{{ $value->getProduks->nama_produk }}</td>
                            <td>{{ $value->nama_barang }}</td>
                            <td>{{ $value->satuan }}</td>
                            <td>Rp. {{ number_format($value->harga_jual) }},-</td>
                            @if($value->stok > 100)
                            <td class="bg-success">{{ $value->stok }}</td>
                            @else
                            <td class="bg-danger">{{ $value->stok }}</td>
                            @endif
                            <td>
                                <div class="btn-group">
                                    <button data-toggle="modal" data-target="#modalForm" data-mode="edit" data-id="{{ $value->id }}" data-nama="{{ $value->nama_barang }}" data-produk="{{ $value->produks_id }}" data-satuan="{{ $value->satuan }}" data-harga="{{ $value->harga_jual }}" data-stok="{{ $value->stok }}" data-action="{{ route('barangs.update', $value->id) }}" class="btn btn-success"><i class="fa fa-edit"></i></button>
                                    <button data-toggle="modal" data-target="#modalDelete" data-id="{{ $value->id }}" data-nama="{{ $value->nama_barang }}" data-action="{{ route('barangs.destroy', $value->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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
@include('pages.barangs.modal')
@endsection
@push('script')
    <script>
        $(function() {
            $('#modalForm').on('show.bs.modal', function (event) {
                let button = $(event.relatedTarget);
                let id = button.data('id');
                let nama = button.data('nama');
                let produk = button.data('produk');
                let satuan = button.data('satuan');
                let harga = button.data('harga');
                let stok =  button.data('stok');
                let action = button.data('action');
                let mode = button.data('mode');
                let modal = $(this);

                if (mode == 'edit') {
                    modal.find('.modal-title').text(`Edit Barang : ${nama}`);
                    modal.find('#nama_barang').val(nama);
                    modal.find('#produks_id').val(produk);
                    modal.find('#satuan').val(satuan);
                    modal.find('#harga_jual').val(harga);
                    modal.find('#stok').val(stok);
                    modal.find('.btn-success').text('Update');
                    $('#id').val(id);
                    $('#formModal').attr('action', action);
                    $('#method').append(`{{ method_field('PATCH') }}`);
                } else {
                    modal.find('.modal-title').text(`Tambah Barang`);
                    modal.find('#nama_barang').val('');
                    modal.find('.btn-success').text('Simpan');
                    $('#id').val('');
                    $('#method').append(``);
                }
            });
            $('#modalDelete').on('show.bs.modal', function (event) {
                let button = $(event.relatedTarget);
                let id = button.data('id');
                let nama = button.data('nama');
                let action = button.data('action');
                let modal = $(this);

                modal.find('#namaBarang').text(nama);
                $('#idDelete').val(id);
                $('#formDelete').attr('action', action);
            });
        });
    </script>
@endpush