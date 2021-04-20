@extends('layouts.top-content')
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>DATA PELANGGAN</h3>
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

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    
                </div>
                <div class="x_content">
                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Pelanggan</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No. Telp</th>
                            <th>Email</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($pelanggan as $key => $value)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $value->kode_pelanggan }}</td>
                        <td>{{ $value->nama }}</td>
                        <td>{{ $value->alamat }}</td>
                        <td>{{ $value->no_telp }}</td>
                        <td>{{ $value->email }}</td>
                        <td>
                            <div class="btn-group">
                                <button data-toggle="modal" data-target="#modalForm" data-mode="edit" data-id="{{ $value->id }}" data-nama="{{ $value->nama }}" data-alamat="{{ $value->alamat }}" data-email="{{ $value->email }}" data-telp="{{ $value->no_telp }}" data-action="{{ route('pelanggans.update', $value->id) }}" class="btn btn-success"><i class="fa fa-edit"></i></button>
                                <button data-toggle="modal" data-target="#modalDelete" data-id="{{ $value->id }}" data-nama="{{ $value->nama }}" data-action="{{ route('pelanggans.destroy', $value->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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
@include('pages.pelanggans.modal')
@push('scripts')
    <script>
        $(function() {
            $('#modalForm').on('show.bs.modal', function (event) {
                let button = $(event.relatedTarget);
                let nama = button.data('nama');
                let telp = button.data('telp');
                let alamat = button.data('alamat');
                let email = button.data('email');
                let action = button.data('action');
                let mode = button.data('mode');
                let modal = $(this);

                if (mode == 'edit') {
                    modal.find('.modal-title').text(`Edit Pelanggan : ${nama}`);
                    modal.find('#nama').val(nama);
                    modal.find('#alamat').val(alamat);
                    modal.find('#no_telp').val(telp);
                    modal.find('#email').val(telp);
                    modal.find('.btn-success').text('Update');

                    $('body').on('click', '#submitForm', function (event) {
                        event.preventDefault();
                        let formData = $('#formModal').serialize();

                        $.ajax({
                            url: action,
                            method: "PATCH",
                            data: formData,
                            success:function(response) {
                                if (response.errors) {
                                    if (response.errors.nama) {
                                        $('#nama_error').text(response.errors.nama[0]);
                                        $('#nama').addClass('parsley-error');
                                    }
                                    if (response.errors.alamat) {
                                        $('#alamat_error').text(response.errors.alamat[0]);
                                        $('#alamat').addClass('parsley-error');
                                    }
                                    if (response.errors.no_telp) {
                                        $('#no_telp_error').text(response.errors.no_telp[0]);
                                        $('#no_telp').addClass('parsley-error');
                                    }
                                    if (response.errors.email) {
                                        $('#email_error').text(response.errors.email[0]);
                                        $('#email').addClass('parsley-error');
                                    }
                                }
                                if (response.status == 'success') {
                                    location.reload();
                                }
                            }
                        });
                    });

                } else {
                    modal.find('.modal-title').text(`Tambah Supplier`);
                    modal.find('.btn-success').text('Simpan');

                    $('body').on('click', '#submitForm', function (event) {
                        event.preventDefault();
                        let formData = $('#formModal').serialize();
                        $.ajax({
                            url: "{{ route('pelanggans.store') }}",
                            method: "POST",
                            data: formData,
                            beforeSend:function() {
                                $(this).html('Loading...');
                            },
                            success:function(response) {
                                if (response.errors) {
                                    if (response.errors.nama) {
                                        $('#nama_error').text(response.errors.nama[0]);
                                        $('#nama').addClass('parsley-error');
                                    }
                                    if (response.errors.alamat) {
                                        $('#alamat_error').text(response.errors.alamat[0]);
                                        $('#alamat').addClass('parsley-error');
                                    }
                                    if (response.errors.no_telp) {
                                        $('#no_telp_error').text(response.errors.no_telp[0]);
                                        $('#no_telp').addClass('parsley-error');
                                    }
                                    if (response.errors.email) {
                                        $('#email_error').text(response.errors.email[0]);
                                        $('#email').addClass('parsley-error');
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

                modal.find('#namaPemasok').text(nama);
                $('#idDelete').val(id);
                $('#formDelete').attr('action', action);
            });
            $('body').on('click', '#closeForm', function () {
                $('#nama').removeClass('parsley-error');
                $('#nama_error').text('');

                $('#alamat').removeClass('parsley-error');
                $('#alamat_error').text('');

                $('#no_telp').removeClass('parsley-error');
                $('#no_telp').val('');
                $('#no_telp_error').text('');

                $('#email').removeClass('parsley-error');
                $('#email').val('');
                $('#email_error').text('');
            });
        });
    </script>
@endpush