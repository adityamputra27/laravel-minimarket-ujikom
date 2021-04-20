@extends('layouts.top-content')
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>TAMBAH TRANSAKSI PEMBELIAN</h3>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <form id="formTransaksi" method="POST" action="{{ route('pembelians.store') }}" data-parsley-validate class="form-horizontal form-label-left">
        @csrf
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_content">
                    <fieldset>
                        <legend>Pembelian </legend>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                            <label for="" class="control-label col-sm-3 col-md-3 col-xs-12">
                                Kode Pembelian : 
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" name="kode_masuk" readonly class="form-control col-md-7 col-xs-12" value="{{ $kodePembelian }}">
                                @error('kode_masuk') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                            <label for="" class="control-label col-sm-3 col-md-3 col-xs-12">
                                Tanggal Pembelian : 
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="date" id="tanggalMasukDatePicker">
                                    <input type="date" name="tanggal_masuk" class="date-picker form-control col-md-7 col-xs-12" value="{{ date('Y-m-d') }}">
                                    @error('tanggal_masuk') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>                                
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <a href="#" data-toggle="modal" data-target="#modalBarang" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah Barang</a>                                
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                            <label for="" class="control-label col-sm-3 col-md-3 col-xs-12">
                                Distributor : 
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <select name="pemasoks_id" id="" class="select2 form-control col-md-4 col-xs-12" style="width: 100%;">
                                    <option value="">Pilih Pemasok</option>
                                    @foreach ($pemasok as $key => $value)
                                    <option value="{{ $value->id }}">{{ $key+1 }}. {{ $value->nama_pemasok }}</option>
                                    @endforeach
                                </select>
                                @error('pemasoks_id') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_content">
                    <fieldset>
                        <legend>Data Barang</legend>
                        <table id="tableTransaksi" width="100%" cellspacing="0" class="table table-striped table-bordered tableBarang">
                            <thead>
                                <tr>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Harga Barang</th>
                                    <th>QTY</th>
                                    <th>SubTotal</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody id="parentTambahBarang"></tbody>
                        </table>
                        <div class="row" style="margin-bottom: 0.5em;">
                            <div class="col-md-10 col-sm-12 col-xs-12 form-group text-right">
                                <label for="" class="control-label col-md-12 col-sm-3 col-xs-12">Total Harga : <b>Rp. </b></label>
                            </div>
                            <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                                <input type="text" id="totalHarga" name="total" readonly value="0" class="form-control">
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> Simpan Transaksi</button>
                        </div>
                    </fieldset>        
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
@include('pages.transactions.pembelians.modal')
@endsection
@push('scripts')
    <script>
        $(function() {
            // $("#tanggalMasukDatePicker").datetimepicker();
            var totalHarga = 0;
            function tambahBarang(param) {
                let row = $(param).closest('tr');
                let kodeBarang = row.find('td:eq(1)').text();
                let namaBarang = row.find('td:eq(3)').text();
                let hargaJual = row.find('td:eq(5)').text();
                let barangId = row.find('.barangId').val();
                // alert(barangId)

                let namaBarangOrder = document.getElementsByClassName('namaBarangOrder');

                for (let i = 0; i < namaBarangOrder.length; i++) {
                    if(namaBarangOrder[i].innerText == namaBarang) {
                        toastr.error('<h5>Barang Sudah Di Tambahkan!</h5>');
                        $('#modalBarang').modal('hide');
                        return;
                    }                    
                }

                let newData = '';

                let tbody = $('#tableTransaksi tbody tr td').text();
                newData += `<tr>
                    <td>${kodeBarang}</td>
                    <td class="namaBarangOrder">${namaBarang}</td>
                    <input type="hidden" name="barangs_id[]" value="${barangId}">
                    <td><input type="number" readonly class="form-control input-sm hargaJual" name="harga_beli[]" value="${hargaJual}"></td>
                    <td style="width: 150px;">
                        <div class="input-group">
                            <input type="number" name="jumlah[]" value="1" min="1" max="100" class="form-control input-sm qty">
                        </div>
                    </td>
                    <td><input type="number" value="${hargaJual}" name="sub_total" readonly class="form-control input-sm subTotal"></td>
                    <td><button type="button" class="btn btn-danger btn-sm btnRemoveBarang"><i class="fa fa-trash"></i></button></td>
                </tr>`;
                // <td><input type="number" value="1" min="1" class="form-control qty"></td>
                // <span class="input-group-btn">
                //     <button type="button" disabled="disabled" data-type="minus" class="btn btn-sm btn-danger btn-number"><i class="fa fa-minus"></i></button>
                // </span>
                // <input type="number" name="jumlah[]" value="1" min="1" max="100" class="form-control input-sm qty">
                // <span class="input-group-btn">
                //     <button type="button" data-type="plus" class="btn btn-sm btn-success btn-number"><i class="fa fa-plus"></i></button>
                // </span>
                if(tbody == 'Belum Ada Data!')
                $('#tableTransaksi tbody tr').remove();

                $('#tableTransaksi tbody').append(newData);
                totalHarga = totalHarga + parseFloat(hargaJual);
                $('#totalHarga').val(totalHarga);
                $('#modalBarang').modal('hide');
                toastr.success('<h5>Success Tambah Barang!</h5>');
            }
            function calcSubTotal(param) {
                let qty = parseInt($(param).closest('tr').find('.qty').val());
                let hargaJual = parseFloat($(param).closest('tr').find('.hargaJual').val());
                let subTotalAwal = parseFloat($(param).closest('tr').find('.subTotal').val());
                let subTotal = qty * hargaJual;
                totalHarga += subTotal - subTotalAwal;
                $(param).closest('tr').find('.subTotal').val(subTotal);
                $('#totalHarga').val(totalHarga);
            }
            function attributeDisabledQTY(param) {
                let minValue = parseInt($(param).attr('min'));
                let maxValue = parseInt($(param).attr('max'));
                let currentValue = parseInt($(param).val());
                
                if (currentValue >= minValue) {
                    $('.btn-number[data-type="minus"]').removeAttr('disabled');
                } 
                if (currentValue <= maxValue) {
                    $('.btn-number[data-type="plus"]').removeAttr('disabled');                        
                } 
            }
            $('#modalBarang').on('click', '#pilihBarang', function () {
                tambahBarang(this);
            });
            $('#formTransaksi').on('keyup', '.qty', function () {
                if (isNaN($(this).val()) || $(this).val() < 1) {
                    $(this).val('1');
                } else {
                    calcSubTotal(this);
                    attributeDisabledQTY(this);
                }
            });
            $('#formTransaksi').on('click', '.btnRemoveBarang', function () {
                let subTotalAwal = parseFloat($(this).closest('tr').find('.subTotal').val());
                totalHarga -= subTotalAwal;

                $(this).closest('tr').remove();
                $('#totalHarga').val(totalHarga);                
            });
            // $('#tableTransaksi').on('click', '.btn-number' , function () {
            //     // event.preventDefault();

            //     let quantityInput = $(".qty");
            //     let typeClick = $(this).attr('data-type');
            //     let currentValue = parseInt(quantityInput.val());

            //     if (!isNaN(currentValue)) {
            //         if(typeClick == 'minus') {
            //             if(currentValue > quantityInput.attr('min')) {
            //                 quantityInput.val(currentValue - 1).change();
            //                 $(this).attr('disabled', false);
            //             }
            //             if (parseInt(quantityInput.val()) == quantityInput.attr('min')) {
            //                 $(this).attr('disabled', true);
            //             }
            //         } else if(typeClick == 'plus') {
            //             if(currentValue < quantityInput.attr('max')) {
            //                 quantityInput.val(currentValue + 1).change();
            //             }
            //             if (parseInt(quantityInput.val()) == quantityInput.attr('max')) {
            //                 $(this).attr('disabled', true);
            //             }
            //         }
            //     } else {
            //         quantityInput.val(1);
            //     }
            // });
        });
    </script>
@endpush