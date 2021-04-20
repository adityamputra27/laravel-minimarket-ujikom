@extends('layouts.top-content')
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>DATA SUPPLIER</h3>
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
                                <button data-toggle="modal" data-target="#modalForm" data-mode="edit" data-id="{{ $value->id }}" data-nama="{{ $value->nama_pemasok }}" data-alamat="{{ $value->alamat }}" data-kota="{{ $value->kota }}" data-telp="{{ $value->no_telp }}" data-action="{{ route('pemasoks.update', $value->id) }}" class="btn btn-success"><i class="fa fa-edit"></i></button>
                                <button data-toggle="modal" data-target="#modalDelete" data-id="{{ $value->id }}" data-nama="{{ $value->nama_pemasok }}" data-action="{{ route('pemasoks.destroy', $value->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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
@include('pages.pemasoks.modal')
@endsection
@push('scripts')
    <script>
        $(function() {
            $('#modalForm').on('show.bs.modal', function (event) {
                let button = $(event.relatedTarget);
                let nama = button.data('nama');
                let kota = button.data('kota');
                let telp = button.data('telp');
                let alamat = button.data('alamat');
                let action = button.data('action');
                let mode = button.data('mode');
                let modal = $(this);

                if (mode == 'edit') {
                    modal.find('.modal-title').text(`Edit Supplier : ${nama}`);
                    modal.find('#nama_pemasok').val(nama);
                    modal.find('#alamat').val(alamat);
                    modal.find('#kota').val(kota);
                    modal.find('#no_telp').val(telp);
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
                                    if (response.errors.nama_pemasok) {
                                        $('#nama_pemasok_error').text(response.errors.nama_pemasok[0]);
                                        $('#nama_pemasok').addClass('parsley-error');
                                    }
                                    if (response.errors.alamat) {
                                        $('#alamat_error').text(response.errors.alamat[0]);
                                        $('#alamat').addClass('parsley-error');
                                    }
                                    if (response.errors.kota) {
                                        $('#kota_error').text(response.errors.kota[0]);
                                        $('#kota').addClass('parsley-error');
                                    }
                                    if (response.errors.no_telp) {
                                        $('#no_telp_error').text(response.errors.no_telp[0]);
                                        $('#no_telp').addClass('parsley-error');
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
                            url: "{{ route('pemasoks.store') }}",
                            method: "POST",
                            data: formData,
                            beforeSend:function() {
                                $(this).html('Loading...');
                            },
                            success:function(response) {
                                if (response.errors) {
                                    if (response.errors.nama_pemasok) {
                                        $('#nama_pemasok_error').text(response.errors.nama_pemasok[0]);
                                        $('#nama_pemasok').addClass('parsley-error');
                                    }
                                    if (response.errors.alamat) {
                                        $('#alamat_error').text(response.errors.alamat[0]);
                                        $('#alamat').addClass('parsley-error');
                                    }
                                    if (response.errors.kota) {
                                        $('#kota_error').text(response.errors.kota[0]);
                                        $('#kota').addClass('parsley-error');
                                    }
                                    if (response.errors.no_telp) {
                                        $('#no_telp_error').text(response.errors.no_telp[0]);
                                        $('#no_telp').addClass('parsley-error');
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
                $('#nama_pemasok').removeClass('parsley-error');
                $('#nama_pemasok_error').text('');

                $('#alamat').removeClass('parsley-error');
                $('#alamat_error').text('');

                $('#kota').removeClass('parsley-error');
                $('#kota').val('Pilih Kabupaten/Kota');
                $('#kota_error').text('');

                $('#no_telp').removeClass('parsley-error');
                $('#no_telp').val('');
                $('#no_telp_error').text('');
            });
        });
    </script>
@endpush