@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
 <div class="row justify-content-center" >
        
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box"  style="border-radius:30px;">
            <span class="info-box-icon bg-aqua"><i class="fa fa-globe"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Companies</span>
              <span class="info-box-number">@if(!empty($school)) {{$school}} @else  0 @endif</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box"  style="border-radius:30px;">
            <span class="info-box-icon bg-red"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Applicants</span>
              <span class="info-box-number">@if(!empty($jobapp)) {{$jobapp}} @else 0 @endif</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Completed </span>
              <span class="info-box-number">@if(!empty($jobapp)) {{$jobapp}} @else 0 @endif</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"> Pending </span>
              <span class="info-box-number">@if(!empty($pend)) {{$pend}} @else 0 @endif</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      
    </div>
    </div>
</div>
@endsection
