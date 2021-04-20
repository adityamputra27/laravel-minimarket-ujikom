@extends('layouts.top-content')
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>LAPORAN PEMBELIAN</h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <div class="clearfix"></div>
                    <h4>Filter Laporan</h4>
                    <form method="GET" id="formFilter">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Mulai Tanggal :</label>
                                    <input type="date" name="tanggal_mulai" id="tanggal_mulai" required class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Sampai Tanggal :</label>
                                    <input type="date" name="tanggal_sampai" id="tanggal_sampai" required class="form-control">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="">&nbsp;</label>
                                    <button type="submit" id="submitFilter" class="btn btn-primary btn-block"><i class="fa fa-filter"></i> Tampilkan</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <div class="clearfix"></div>
                    <h4>Data Pembelian</h4>
                    <div id="message">
                        <div class="alert alert-info" role="alert" style="margin-top: 1.5em;">
                            <h5 class="text-center"><i class="fa fa-info-circle"></i> Silahkan Filter Laporan Terlebih Dahulu.</h5>
                        </div>
                    </div>
                    <div class="btn-group hidden">
                        <button type="button" id="cetakPDF" class="btn btn-success"><i class="fa fa-file-pdf-o"></i> Cetak PDF</button>
                        <button class="btn btn-primary"><i class="fa fa-print"></i> Print</button>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content hidden">
                    <table class="table table-bordered table-striped" id="pembelianTable">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>KODE</th>
                                <th>TANGGAL</th>
                                <th>OPERATOR</th>
                                <th>SUPPLIER</th>
                                <th>TOTAL</th>
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
@endsection
@push('scripts')
<script>
    $(function(){
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

        $('#pembelianTable').DataTable({
            'iDisplayLength' : 10
        });


        $('#cetakPDF').on('click', function () {
            // e.preventDefault();
            let tanggalMulai = $('#tanggal_mulai').val();
            let tanggalSampai = $('#tanggal_sampai').val();
            $.ajax({
                url: '{{ url("get-laporan-pembelian/'+tanggalMulai+'/'+tanggalSampai+") }}',
                method: 'GET',
                data: {
                    tanggalMulai: tanggalMulai,
                    tanggalSampai: tanggalSampai
                },
                success:function(response) {
                    location.reload();
                }
            });
        });

        $('#submitFilter').on('click', function (e) {
            // alert('TEST');
            e.preventDefault();
            let tanggalMulai = $('#tanggal_mulai').val();
            let tanggalSampai = $('#tanggal_sampai').val();
            let form = $('#formFilter');
            $('.alert').remove();
            $.ajax({
                method: 'GET',
                url: '{{ route("filter.laporan.pembelian") }}',
                dataType: 'json',
                data: {
                    tanggalMulai: tanggalMulai,
                    tanggalSampai: tanggalSampai
                },
                success:function(response) {
                    // alert('SUCCESS');
                    // location.reload();
                    console.log(response);
                    if (response.data == null) {
                        $('#message').html(`<div class="alert alert-warning" role="alert" style="margin-top: 1.5em;">
                            <h5 class="text-center"><i class="fa fa-exclamation-triangle"></i> Laporan Pembelian Tidak Ada!.</h5>
                        </div>`);
                    } else {
                        $('.btn-group').removeClass('hidden');
                        $('.x_content').removeClass('hidden');
                        let rowPembelian = '';
                        $.each(response.data, function (index, value) {
                            console.log(value);
                            rowPembelian += `
                            <tr>
                                <td>${index + 1}</td>
                                <td><span class="badge badge-success">${value.kode_masuk}</span></td>
                                <td>${value.tanggal_masuk}</td>
                                <td>${value.users.name}</td>
                                <td>${value.pemasoks.nama_pemasok}</td>
                                <td><span class="badge badge-success">${formatUang(value.total, 'Rp.', ',-')}</span></td>
                            </tr>
                            `;
                        });
                        $('#pembelianTable tbody').html(rowPembelian);
                    }
                }
            });
        });
    })
</script>
@endpush