@extends('layouts.top-content')
@section('content')
<!-- top tiles -->
<div class="row tile_count">
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
    <div class="count">0</div>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
    <div class="count">0</div>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
    <div class="count green">0</div>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
    <div class="count">0</div>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
    <div class="count">0</div>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
    <div class="count">0</div>
  </div>
</div>
<!-- /top tiles -->

<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel tile fixed_height_320">
    <div class="x_title">
      <h2>GRAFIK TRANSAKSI</h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Settings 1</a>
            </li>
            <li><a href="#">Settings 2</a>
            </li>
          </ul>
        </li>
        <li><a class="close-link"><i class="fa fa-close"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
  </div>
</div>

<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel tile fixed_height_320">
    <div class="x_title">
      <h2>TRANSAKSI TERBARU</h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Settings 1</a>
            </li>
            <li><a href="#">Settings 2</a>
            </li>
          </ul>
        </li>
        <li><a class="close-link"><i class="fa fa-close"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <div class="table-responsvice">
        <table class="table table-bordered table-hovered">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama</th>
              <th>Nama</th>
              <th>Nama</th>
              <th>Nama</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>TEST</td>
              <td>TEST</td>
              <td>TEST</td>
              <td>
                <span class="badge badge-success">
                TEST</span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection