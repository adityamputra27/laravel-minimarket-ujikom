@extends('layouts.top-content')
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>DATA PRODUK</h3>
            <div class="btn-group" style="margin-bottom: 1em;">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalForm">
                    <i class="fa fa-plus-circle"></i> Tambah
                </button>
                <button class="btn btn-success"><i class="fa fa-file-excel-o"></i> Export</button>
                <button class="btn btn-warning"><i class="fa fa-upload"></i> Import</button>
                <button class="btn btn-info"><i class="fa fa-file-pdf-o"></i> PDF</button>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    @if($message = Session::get('success'))
        <div id="flash-message" class="alert alert-success" role="alert">
            <i class="fa fa-check-circle"></i> {{ $message }}
        </div>
        @elseif($message = Session::get('error'))
        <div id="flash-message" class="alert alert-danger" role="alert">
            <i class="fa fa-exclamation-triangle"></i> {{ $message }}
        </div>
    @endif
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <div class="clearfix"></div>
                </div>
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
@push('scripts')
    <script>
        $(function() {
            const produksTable = $('#produksTable').DataTable();

            $('#modalForm').on('show.bs.modal', function (event) {
                let button = $(event.relatedTarget);
                let nama = button.data('nama');
                let action = button.data('action');
                let mode = button.data('mode');
                let modal = $(this);
 
                if (mode == 'edit') {
                    modal.find('.modal-title').text(`Edit Produk : ${nama}`);
                    modal.find('#nama_produk').val(nama);
                    modal.find('.btn-success').text('Update');

                    $('body').on('click', '#submitForm', function (event) {
                        event.preventDefault();
                        let formData = $('#formModal').serialize();
                        $('#nama_produk_error').text();

                        $.ajax({
                            url: action,
                            method: "PATCH",
                            data: formData,
                            success:function(response) {
                                if (response.errors) {
                                    if (response.errors.nama_produk) {
                                        $('#nama_produk_error').text(response.errors.nama_produk[0]);
                                        $('#nama_produk').addClass('parsley-error');
                                    }
                                }
                                if (response.status == 'success') {
                                    location.reload();
                                }
                            }
                        });
                    });
                } else { 
                    modal.find('.modal-title').text(`Tambah Produk`);
                    modal.find('#nama_produk').val('');
                    modal.find('.btn-success').text('Simpan');
                    $('#id').val('');
                    $('#method').append(``);

                    $('body').on('click', '#submitForm', function (event) {
                        event.preventDefault();
                        let formData = $('#formModal').serialize();
                        $('#nama_produk_error').text();
                        $.ajax({
                            url: "{{ route('produks.store') }}",
                            method: "POST",
                            data: formData,
                            beforeSend:function() {
                                $(this).html('Loading...');
                            },
                            success:function(response) {
                                if (response.errors) {
                                    if (response.errors.nama_produk) {
                                        $('#nama_produk_error').text(response.errors.nama_produk[0]);
                                        $('#nama_produk').addClass('parsley-error');
                                    }
                                }
                                if (response.status == 'success') {
                                    location.reload();
                                }
                            },

                        });
                    });
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

            $('body').on('click', '#closeForm', function () {
                $('#nama_produk').removeClass('parsley-error');
                $('#nama_produk_error').text('');
            });
        });
    </script>
@endpush