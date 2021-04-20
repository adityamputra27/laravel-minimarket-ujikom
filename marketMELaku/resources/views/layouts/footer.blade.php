<!-- footer content -->
    <footer>
        <div class="pull-left">
        Market KULaku - Developed By Aditya M. Putra | 
        <a target="_blank" href="https://github.com/adityamputra27"><i class="fa fa-github"></i></a> |
        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a> | 
        <a target="_blank" href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="{{asset('assets')}}/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{asset('assets')}}/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="{{asset('assets')}}/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="{{asset('assets')}}/vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="{{asset('assets')}}/vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="{{asset('assets')}}/vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="{{asset('assets')}}/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="{{asset('assets')}}/vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="{{asset('assets')}}/vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="{{asset('assets')}}/vendors/Flot/jquery.flot.js"></script>
<script src="{{asset('assets')}}/vendors/Flot/jquery.flot.pie.js"></script>
<script src="{{asset('assets')}}/vendors/Flot/jquery.flot.time.js"></script>
<script src="{{asset('assets')}}/vendors/Flot/jquery.flot.stack.js"></script>
<script src="{{asset('assets')}}/vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="{{asset('assets')}}/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="{{asset('assets')}}/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="{{asset('assets')}}/vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="{{asset('assets')}}/vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="{{asset('assets')}}/vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="{{asset('assets')}}/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="{{asset('assets')}}/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{asset('assets')}}/vendors/moment/min/moment.min.js"></script>
<script src="{{asset('assets')}}/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- Datatables -->
<script src="{{ asset('assets') }}/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('assets') }}/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="{{ asset('assets') }}/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('assets') }}/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="{{ asset('assets') }}/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="{{ asset('assets') }}/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('assets') }}/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('assets') }}/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="{{ asset('assets') }}/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="{{ asset('assets') }}/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('assets') }}/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="{{ asset('assets') }}/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="{{ asset('assets') }}/vendors/jszip/dist/jszip.min.js"></script>
<script src="{{ asset('assets') }}/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="{{ asset('assets') }}/vendors/pdfmake/build/vfs_fonts.js"></script>
<!-- Custom Theme Scripts -->
<script src="{{asset('assets')}}/build/js/custom.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.15.7/sweetalert2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    $(function () {
        setTimeout(function() {
            $('#flash-message').fadeTo(300, 0).slideUp(300, function () {
                $(this).remove();
            });
        }, 3000);
        $(".select2").select2();
        $("#kota").select2();

        // Nav sm untuk transaksi pembelian

        let URL = window.location.href;
        if (URL == ('http://127.0.0.1:8000/pembelians/create' || 'http://localhost:8000/pembelians/create')) {
            $('body').addClass('nav-sm');
            $('body').removeClass('nav-md');
        } else {
            $('body').addClass('nav-md');
            $('body').removeClass('nav-sm');
        }

        // Nav sm untuk transaksi penjualn
        // if (URL == ('http://127.0.0.1:8000/penjualans/create' || 'http://localhost:8000/penjualans/create')) {
        //     $('body').addClass('nav-sm');
        //     $('body').removeClass('nav-md');
        // } else {
        //     $('body').addClass('nav-md');
        //     $('body').removeClass('nav-sm');
        // }

        // Toastr options

        toastr.options = {
            "closeButton": true,
            "positionClass" : "toast-bottom-right",
            "timeOut": "1500",
        }
    });
</script>

@stack('scripts')

</body>
</html>