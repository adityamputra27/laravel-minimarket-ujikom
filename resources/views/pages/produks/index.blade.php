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
                            {{-- @foreach($produk as $key => $value)
                            <tr id="row_{{ $value->id }}">
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $value->nama_produk }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-success"><i class="fa fa-edit"></i></button>
                                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
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
@include('pages.produks.modal')
@endsection
@push('script')
    <script>
        $(function() {

            const produksTable = $('produksTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('getAllProduks') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_Row_Index'},
                    
                ]
            });

            $('body').on('click', '#formStore', function(event) {
                event.preventDefault();
                let nama_produk = $('#nama_produk').val();
                let url = `{{ route('produks.store') }}`;
                $.ajax({
                    url: url,
                    type: 'GET',
                    data: {
                        // id: id,
                        nama_produk: nama_produk
                    },
                    success:function(response) {
                        if(response.status_code == 200) {
                            // if(id != "") {
                                // $("#row_"+id+" td:nth-child(2) ").html(response.data.nama_produk);
                            // } else {
                                $(".data-produk tbody").prepend(`
                                <tr id="row_${response.data.id}">
                                <td>${response.data.id}</td>
                                <td>${response.data.nama_produk}</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-success"><i class="fa fa-edit"></i></button>
                                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </div>
                                </td>
                                </tr>`);
                            // }
                            $("#nama_produk").val('');
                            $("#modalForm").modal('hide');
                            location.reload();
                        }
                    },
                    error:function(response) {
                        $("#namaProdukError").text(response.responseJSON.errors.nama_produk);
                    }
                });
            })
        });
    </script>
@endpush