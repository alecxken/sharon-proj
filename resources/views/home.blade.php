@extends('layouts.template')

@section('content')
@php
$users = \App\Models\UserLoan::all()->unique('user_id')->count();
$products = \App\Models\Product::all()->count();
$paid = \App\Models\UserLoan::all()->sum('amount_paid');
$owed = \App\Models\UserLoan::all()->sum('amount_owed');
$interest_gained = \App\Models\UserLoan::all()->sum('amount_owed') - \App\Models\UserLoan::all()->sum('loan_amount');
@endphp
<div class="box-body">
    <div class="row justify-content-center">

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box"  style="border-radius:30px;">
            <span class="info-box-icon bg-aqua"><i class="fa fa-globe"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Active Users</span>
              <span class="info-box-number">@if(!empty($users)) {{$users}} @else  0 @endif</span>
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
              <span class="info-box-text">Products</span>
              <span class="info-box-number">@if(!empty($products)) {{$products}} @else 0 @endif</span>
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
              <span class="info-box-text">Loans Assigned </span>
              <span class="info-box-number">@if(!empty($owed)) ksh {{number_format($owed)}} @else 0 @endif</span>
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
              <span class="info-box-text"> Loan Paid </span>
              <span class="info-box-number">@if(!empty($paid)) ksh {{number_format($paid)}} @else 0 @endif</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      
   
    </div>
</div>
@endsection
