@extends('admins._layouts.web')
@section('content')
	<div class="page-title">
    <div>
      <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="widget-small info"><i class="icon fa fa-money fa-3x"></i>
        <div class="info">
          <h4>Donasi</h4>
          <p> <b>25</b></p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="widget-small primary"><i class="icon fa fa-users fa-3x"></i>
        <div class="info">
          <h4>Donatur</h4>
          <p> <b>5</b></p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="widget-small warning"><i class="icon fa fa-files-o fa-3x"></i>
        <div class="info">
          <h4>Laporan</h4>
          <p> <b>10</b></p>
        </div>
      </div>
    </div>
  </div>
@endsection
