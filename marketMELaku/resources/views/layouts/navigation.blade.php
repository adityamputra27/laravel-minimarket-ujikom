<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="" class="site_title"><i class="fa fa-shopping-cart"></i> <span>Market KULaku</span></a>
            </div>
            <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('assets') }}/images/admin-1.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2>{{ Auth::user()->name }}!</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->
            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>MENU</h3>
                <ul class="nav side-menu">
                  <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> DASHBOARD</a></li>
                  <li><a><i class="fa fa-database"></i> MASTER DATA <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('produks.index') }}">DATA PRODUK </a></li>
                      <li><a href="{{ route('barangs.index') }}">DATA BARANG </a></li>
                      <li><a href="{{ route('pemasoks.index') }}">DATA PEMASOK </a></li>
                      <li><a href="{{ route('pelanggans.index') }}">DATA PELANGGAN </a></li>
                      <li><a href="#">DATA PENGGUNA </a></li>
                    </ul> 
                  </li>
                </ul>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-shopping-cart"></i> TRANSAKSI <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('pembelians.index') }}">TRANSAKSI PEMBELIAN</a></li>
                      <li><a href="{{ route('penjualans.index') }}">TRANSAKSI PENJUALAN</a></li>
                    </ul>
                  </li>
                </ul>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-file-archive-o"></i>LAPORAN <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('reportPembelian.index') }}">LAPORAN PEMBELIAN</a></li>
                      <li><a href="{{ route('reportPenjualan.index') }}">LAPORAN PENJUALAN</a></li>
                      <li><a href="#">CETAK BARCODE</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>FITUR LAINNYA</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-download"></i> BACKUP DATABASE </a></li>
                  <li><a><i class="fa fa-edit"></i> EDIT PROFILE </a></li>
                  <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> LOGOUT </a></li>                  
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>