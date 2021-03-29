@extends('layouts.top-content')
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>DATA PRODUK</h3>
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
                    <table id="produksTable" class="data-produk table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Produk</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($produk as $key => $value)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $value->nama_produk }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button data-toggle="modal" data-target="#modalForm" data-mode="edit" data-id="{{ $value->id }}" data-nama="{{ $value->nama_produk }}" data-action="{{ route('produks.update', $value->id) }}" class="btn btn-success"><i class="fa fa-edit"></i></button>
                                        <button data-toggle="modal" data-target="#modalDelete" data-id="{{ $value->id }}" data-nama="{{ $value->nama_produk }}" data-action="{{ route('produks.destroy', $value->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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
@include('pages.produks.modal')
@endsection
@push('script')
    <script>
        $(function() {
            const produksTable = $('#produksTable').DataTable();

            $('#modalForm').on('show.bs.modal', function (event) {
                let button = $(event.relatedTarget);
                let id = button.data('id');
                let nama = button.data('nama');
                let action = button.data('action');
                let mode = button.data('mode');
                let modal = $(this);
 
                if (mode == 'edit') {
                    modal.find('.modal-title').text(`Edit Produk : ${nama}`);
                    modal.find('#nama_produk').val(nama);
                    modal.find('.btn-success').text('Update');
                    $('#id').val(id);
                    $('#formModal').attr('action', action);
                    $('#method').append(`{{ method_field('PATCH') }}`);
                } else {
                    modal.find('.modal-title').text(`Tambah Produk`);
                    modal.find('#nama_produk').val('');
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

                modal.find('#namaProduk').text(nama);
                $('#idDelete').val(id);
                $('#formDelete').attr('action', action);
            });
        });
    </script>
@endpush