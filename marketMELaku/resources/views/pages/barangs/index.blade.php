@extends('layouts.top-content')
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>DATA BARANG</h3>
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
                    <div class="clearfix"></div>
                    <h4>Filter Barang</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Produk :</label>
                                <select name="" id="" class="form-control text-center">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Satuan :</label>
                                <select name="" id="" class="form-control">
                                    <option value=""></option>
                                    <option value="">Kardus</option>
                                    <option value="">PCS</option>
                                    <option value="">Item</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Stok :</label>
                                <select name="" id="" class="form-control">
                                    <option value=""></option>
                                    <option value="">Kurang dari 50</option>
                                    <option value="">Lebih dari 50</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">&nbsp;</label>
                                <button class="btn btn-primary btn-block"><i class="fa fa-filter"></i> Filter</button>
                            </div>
                        </div>
                    </div>
                </div>
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
                            {{-- <td align="center">{!! DNS1D::getBarcodeSVG($value->kode_barang, "C39", 1, 40, "#2A3239" )!!} --}}
                                {{-- <td align="center"> --}}
                                {{-- <img src="data:image/png;base64, {{ DNS2D::getBarcodePNG($value->kode_barang, 'QRCODE') }}" alt=""> --}}
                                {{-- </td> --}}
                            {{-- </td> --}}
                            <td>{{ $value->kode_barang }}</td>
                            <td>{{ $value->getProduks->nama_produk }}</td>
                            <td>{{ $value->nama_barang }}</td>
                            <td 
                            class="bg-{{ $value->satuan == 'pcs' ? 'warning' : ($value->satuan == 'item' ? 'info' : ($value->satuan == 'kardus' ? 'primary' : '')) }}">{{ Str::upper($value->satuan) }}</td>
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
@push('scripts')
    <script>
        $(function() {
            $('#modalForm').on('show.bs.modal', function (event) {
                let button = $(event.relatedTarget);
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
                                    if (response.errors.produks_id) {
                                        $('#produks_id_error').text(response.errors.produks_id[0]);
                                        $('#produks_id').addClass('parsley-error');
                                    }
                                    if (response.errors.nama_barang) {
                                        $('#nama_barang_error').text(response.errors.nama_barang[0]);
                                        $('#nama_barang').addClass('parsley-error');
                                    }
                                    if (response.errors.satuan) {
                                        $('#satuan_error').text(response.errors.satuan[0]);
                                        $('#satuan').addClass('parsley-error');
                                    }
                                    if (response.errors.harga_jual) {
                                        $('#harga_jual_error').text(response.errors.harga_jual[0]);
                                        $('#harga_jual').addClass('parsley-error');
                                    }
                                    if (response.errors.stok) {
                                        $('#stok_error').text(response.errors.stok[0]);
                                        $('#stok').addClass('parsley-error');
                                    }
                                }
                                if (response.status == 'success') {
                                    location.reload();
                                }
                            }
                        });
                    });

                } else {
                    modal.find('.modal-title').text(`Tambah Barang`);
                    modal.find('#nama_barang').val('');
                    modal.find('.btn-success').text('Simpan');

                    $('body').on('click', '#submitForm', function (event) {
                        event.preventDefault();
                        let formData = $('#formModal').serialize();
                        $.ajax({
                            url: "{{ route('barangs.store') }}",
                            method: "POST",
                            data: formData,
                            beforeSend:function() {
                                $(this).html('Loading...');
                            },
                            success:function(response) {
                                if (response.errors) {
                                    if (response.errors.produks_id) {
                                        $('#produks_id_error').text(response.errors.produks_id[0]);
                                        $('#produks_id').addClass('parsley-error');
                                    }
                                    if (response.errors.nama_barang) {
                                        $('#nama_barang_error').text(response.errors.nama_barang[0]);
                                        $('#nama_barang').addClass('parsley-error');
                                    }
                                    if (response.errors.satuan) {
                                        $('#satuan_error').text(response.errors.satuan[0]);
                                        $('#satuan').addClass('parsley-error');
                                    }
                                    if (response.errors.harga_jual) {
                                        $('#harga_jual_error').text(response.errors.harga_jual[0]);
                                        $('#harga_jual').addClass('parsley-error');
                                    }
                                    if (response.errors.stok) {
                                        $('#stok_error').text(response.errors.stok[0]);
                                        $('#stok').addClass('parsley-error');
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

                modal.find('#namaBarang').text(nama);
                $('#idDelete').val(id);
                $('#formDelete').attr('action', action);
            });
            $('body').on('click', '#closeForm', function () {
                $('#produks_id').removeClass('parsley-error');
                $('#produks_id_error').text('');

                $('#nama_barang').removeClass('parsley-error');
                $('#nama_barang_error').text('');

                $('#satuan').removeClass('parsley-error');
                $('#satuan_error').text('');

                $('#harga_jual').removeClass('parsley-error');
                $('#harga_jual_error').text('');

                $('#stok').removeClass('parsley-error');
                $('#stok_error').text('');
            });
        });
    </script>
@endpush