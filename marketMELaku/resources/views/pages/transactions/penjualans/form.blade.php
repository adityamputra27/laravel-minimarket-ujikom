@extends('layouts.top-content')
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>TAMBAH TRANSAKSI PENJUALAN</h3>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <form id="formTransaksi" method="POST" action="{{ route('penjualans.store') }}" data-parsley-validate class="form-horizontal form-label-left">
        @csrf
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_content">
                    <fieldset>
                        <legend>Penjualan </legend>
                        <div class="row">
                            <div class="col-md-3">  
                                <div class="form-group">
                                    <label for="">Kasir :</label>
                                    <input type="text" id="kasir" readonly value="{{ $kasir }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">  
                                <div class="form-group">
                                    <label for="">No Faktur :</label>
                                    <input type="text" name="no_faktur" id="no_faktur" value="{{ $noFaktur ?? 0 }}" readonly class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">  
                                <div class="form-group">
                                    <label for="">Tanggal Faktur :</label>
                                    <input type="date" name="tgl_faktur" id="tgl_faktur" value="{{ date('Y-m-d') }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">  
                                <div class="form-group">
                                    <label for="">Pelanggan :</label>
                                    <div class="input-group">
                                        <input type="text" readonly id="nama_pelanggan" name="" class="form-control" placeholder="Nama Pelanggan">
                                        <input type="hidden" name="pelanggans_id" id="pelanggans_id">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPelanggan"><i class="fa fa-search"></i> Cari</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <h3>Tambah Barang</h3>
                                <div class="form-group">
                                    <label for="">Kode Barang :</label>
                                    <div class="input-group">
                                        <input type="text" id="kode_barang" readonly class="form-control">
                                        <input type="hidden" name="barangs_id" id="barangs_id">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-primary" data-target="#modalBarang" data-toggle="modal"><i class="fa fa-search"></i> Cari</button>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Barang :</label>
                                    <input type="text" id="nama_barang" readonly class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Harga :</label>
                                    <input type="text" id="harga_barang" readonly class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Jumlah :</label>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-danger btn-number" data-type="minus"><i class="fa fa-minus"></i></button>
                                        </span>
                                        <input type="number" id="tambahJumlah" min="1" max="100" class="text-center form-control">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-success btn-number" data-type="plus"><i class="fa fa-plus"></i></button>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Sub Total :</label>
                                    <input type="number" id="sub_total" readonly class="form-control">
                                </div>
                                <div class="form-group">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary" id="btn-cart"><i class="fa fa-shopping-cart"></i> Tambah Keranjang</button>
                                        <button type="button" class="btn btn-warning" id="btn-reset"><i class="fa fa-refresh"></i> Reset</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h3>Daftar Barang :</h3>
                                <table class="table table-responsive table-bordered table-striped table-hovered" id="tableDaftarBarang">
                                    <thead>
                                        <tr>
                                            <th>Kode Barang</th>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Jumlah</th>
                                            <th>Subtotal</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr align="center">
                                            <td colspan="6">Belum ada barang!</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-md-7">
                                        <h3>Info Belanja</h3>
                                        <table class="table table-bordered table-striped table-hovered h4" id="tableInfoBelanja">
                                            <tr>
                                                <th>Total :</th>
                                                <td class="totalSementara text-primary">Rp.0,-</td>
                                            </tr>
                                            <tr>
                                                <th>Diskon (%) :</th>
                                                <td>
                                                    <input type="number" name="diskon" id="diskon" class="form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Total Harga :</th>
                                                <td class="totalHarga text-primary">Rp.0,-</td>
                                                <td class="hidden"><input type="hidden" name="total_bayar" id="totalHargaValue"></td>
                                            </tr> 
                                            <tr>
                                                <th>Bayar :</th>
                                                <td>
                                                    <input type="number" name="terima" id="bayar" class="form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Kembalian :</th>
                                                <td class="kembalian text-primary">Rp.0,-
                                                </td>
                                                <td class="hidden"><input type="hidden" name="kembali" id="kembalian"></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <a href="{{ route('penjualans.index') }}" class="btn btn-danger"><i class="fa fa-times"></i> Batalkan Transaksi</a>
                            </div>
                            <div class="col-md-9 text-right">
                                <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> Simpan Transaksi</button>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
@include('pages.transactions.penjualans.modal')
@endsection
@push('scripts')
    <script>
        $(function() {

            const formatUang = (angka, prefix = "Rp. ", last = "") => {
                let minus = angka < 0 ? '-' : ''

                var number_string = angka.toString().replace(/[^\d]/g, '').toString(),
                    split	= number_string.split('.'),
                    sisa 	= split[0].length % 3,
                    rupiah 	= split[0].substr(0, sisa),
                    ribuan 	= split[0].substr(sisa).match(/\d{3}/gi)
                
                if (ribuan) {
                    separator = sisa ? '.' : ''
                    rupiah += separator + ribuan.join('.')
                }
                
                rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah
                return prefix == undefined ? rupiah : (rupiah ? minus + prefix + rupiah + last : '')
            }

            $('body').on('click', '#pilihPelanggan', function () {
                let row = $(this).closest('tr');

                let idPelanggan = row.find('.pelangganId').val();
                let namaPelanggan = row.find('td:eq(2)').text();

                $('#pelanggans_id').val(idPelanggan);
                $('#nama_pelanggan').val(namaPelanggan);
                $('#modalPelanggan').modal('hide');
            });

            // let rowBarang = [];

            function cekBtnCart(booleanParam) {
                if (booleanParam == false) {
                    $('#btn-cart').prop('disabled', false);
                    $('#btn-reset').prop('disabled', false);
                    $('.btn-number').prop('disabled', false);
                } else if (booleanParam == true) {
                    $('#btn-cart').prop('disabled', true);
                    $('#btn-reset').prop('disabled', true);
                    $('.btn-number').prop('disabled', true);
                }
                return booleanParam;
            }

            cekBtnCart(true);

            $('body').on('click', '#pilihBarang', function () {
                let row = $(this).closest('tr');

                let idBarang = row.find('.barangId').val();
                let kodeBarang = row.find('td:eq(1)').text();
                let namaBarang = row.find('td:eq(2)').text();
                let hargaBarang = row.find('td:eq(3)').text();

                $('#barangs_id').val(idBarang);
                $('#kode_barang').val(kodeBarang);
                $('#nama_barang').val(namaBarang);
                $('#harga_barang').val(hargaBarang);
                $('#tambahJumlah').val(1);
                $('#sub_total').val(hargaBarang);
                $('#modalBarang').modal('hide');

                cekBtnCart(false);
            });

            function attributeDisabledQty(param) {
                let minValue = parseInt($(param).attr('min'));
                let maxValue = parseInt($(param).attr('max'));
                let currentInputValue = parseInt($(param).val());
                
                if (currentInputValue >= minValue) {
                    $('.btn-number[data-type="minus"]').removeAttr('disabled');
                } 
                if (currentInputValue <= maxValue) {
                    $('.btn-number[data-type="plus"]').removeAttr('disabled');                        
                } 
            }

            $('.btn-number').on('click', function () {
                let inputQuantity = $('#tambahJumlah');
                let clickType = $(this).data('type');
                let currentInputQty = parseInt(inputQuantity.val());

                if (!isNaN(currentInputQty)) {
                    if (clickType == 'minus') {
                        if (currentInputQty > inputQuantity.attr('min')) {
                            inputQuantity.val(currentInputQty - 1).change();
                            $(this).prop('disabled', false);
                        }                        
                        if (parseInt(inputQuantity.val()) == inputQuantity.attr('min')) {
                            $(this).prop('disabled', true);
                        }
                    } 
                    else if (clickType == 'plus') {
                        if (currentInputQty < inputQuantity.attr('max')) {
                            inputQuantity.val(currentInputQty + 1).change();
                            $(this).prop('disabled', false);
                        }
                        if (parseInt(inputQuantity.val()) == inputQuantity.attr('max')) {
                            $(this).prop('disabled', true);
                        }
                    }
                } else {
                    inputQuantity.val(1);
                }
            });

            function calcSubTotal(param) {
                let tambahJumlah = parseInt($(param).val());
                let hargaBarang = parseFloat($('#harga_barang').val());
                let subTotal = tambahJumlah * hargaBarang;
                $('#sub_total').val(subTotal);
            }

            let totalSementara = 0;

            $('#tambahJumlah').on('change', function () {
               attributeDisabledQty(this); 
               calcSubTotal(this);
            });

            function resetValue() {
                $('#barangs_id').val('');
                $('#kode_barang').val('');
                $('#nama_barang').val('');
                $('#harga_barang').val('');
                $('#tambahJumlah').val('');
                $('#sub_total').val('');
            }

            $('#btn-cart').on('click', function () {
                let idBarang = $('#barangs_id').val();
                let kodeBarang = $('#kode_barang').val();
                let namaBarang = $('#nama_barang').val();
                let hargaBarang = $('#harga_barang').val();
                let tambahJumlah = $('#tambahJumlah').val();
                let subTotal = $('#sub_total').val();

                const daftarBarang = {
                    idBarang: idBarang,
                    kodeBarang: kodeBarang,
                    namaBarang: namaBarang,
                    hargaBarang: hargaBarang,
                    jumlah: tambahJumlah,
                    subTotal: subTotal
                };

                tambahBarang(daftarBarang);
                resetValue();
                cekBtnCart(true);
            });

            function tambahBarang(param) {

                let tbody = $('#tableDaftarBarang tbody tr td').text();

                let rowBarang = '';
                let cekBarang = $('.cekBarang');

                for (let i = 0; i < cekBarang.length; i++) {
                    if (cekBarang[i].innerText == param.namaBarang) {
                        toastr.error('<h5>Barang Sudah Di Tambahkan!</h5>');                        
                        resetValue();
                        return;
                    }                 
                }

                rowBarang += `
                    <tr>
                        <td>${param.kodeBarang}</td>
                        <td class="cekBarang">${param.namaBarang}
                            <input type="hidden" name="barangs_id" value="${param.idBarang}">
                        </td>
                        <td>${formatUang(param.hargaBarang, 'Rp.', ',-')}
                            <input type="hidden" name="harga_jual" id="hargaBarang" value="${param.hargaBarang}">
                        </td>
                        <td>${param.jumlah}
                            <input type="hidden" name="jumlah[]" id="jumlahBarang" value="${param.jumlah}">                            
                        </td>
                        <td>${formatUang(param.subTotal, 'Rp.', ',-')}
                            <input type="hidden" name="sub_total" id="subTotalAwal" value="${param.subTotal}">                            
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger" id="btn-remove"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                `;

                if (tbody == 'Belum ada barang!') {
                    $('#tableDaftarBarang tbody tr').remove();
                }
                $('#tableDaftarBarang tbody').append(rowBarang);
                totalSementara += parseFloat(param.subTotal);
                $('.totalSementara').text(formatUang(totalSementara, 'Rp.', ',-'));
                $('.totalHarga').text(formatUang(totalSementara, 'Rp.', ',-'));
                $('#totalHargaValue').val(totalSementara);
                toastr.success('<h5>Success Tambah Barang!</h5>');                        
            }

            $('#btn-reset').on('click', function () {
                resetValue();
                cekBtnCart(true);
            });

            let totalHarga = 0;
            let kembalian = 0;

            $('#tableDaftarBarang').on('click', '#btn-remove', function () {
                let subTotalAwal = parseFloat($(this).closest('tr').find('#subTotalAwal').val());
                totalSementara -= subTotalAwal;
                $('.totalSementara').text(formatUang(totalSementara, 'Rp.', ',-'));
                $('.totalHarga').text(formatUang(totalSementara, 'Rp.', ',-'));
                $('#diskon').val('');
                $('#totalHargaValue').val(totalSementara);
                $('#bayar').val('');
                $('.kembalian').html('<span class="text-primary">Rp.0,-</span>');  
                $('#kembali').val('');
                totalHarga = totalSementara;
                $(this).closest('tr').remove();
            });

            function calcDiscount(param) {
                let currentInput = parseFloat($(param).closest('tr').find('#diskon').val());
                let totalDiskon = Math.round((currentInput / 100) * totalSementara);
                totalHarga = totalSementara - totalDiskon;
                if ($(param).val() == '') {
                    $('.totalHarga').text(formatUang(totalSementara, 'Rp.', ',-'));
                    $('#totalHargaValue').val(totalSementara);
                } else {
                    $('.totalHarga').text(formatUang(totalHarga, 'Rp.', ',-'));
                    $('#totalHargaValue').val(totalHarga);
                }
                // console.log(Math.round(totalHarga));
            }

            function calcPaid(param) {
                let currentInput = parseFloat($(param).closest('tr').find('#bayar').val());
                kembalian = currentInput - totalHarga;
                if ($(param).val() == '') {
                    $('.kembalian').text('Rp.0,-');
                    $('#kembalian').val(0);
                } else {
                    if (kembalian < 0) {
                        $('.kembalian').html('<span class="text-danger">Rp.0,-</span>');  
                        $('#kembalian').val(0);
                    } else {
                        $('.kembalian').text(formatUang(kembalian, 'Rp.', ',-'));
                        $('#kembalian').val(kembalian);
                    }
                }
                // console.log(kembalian);
            }

            $('#tableInfoBelanja').on('keyup', '#diskon', function () {
                calcDiscount(this);
                // console.log(this);
            });

            $('#tableInfoBelanja').on('keyup', '#bayar', function () {
                calcPaid(this);
            });
        });
    </script>
@endpush