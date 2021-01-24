@extends('layouts.master')

@section('content')

<br>
     <section class="u-align-center u-clearfix u-section-2" id="sec-caa1">

      <br>
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="row">
        <div class="col-lg-3 col-xs-6" style="border-radias:70px;">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>Active Loans</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6" style="border-radias:70px;">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Products Taken</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>Amount Paid</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6" style="border-radias:70px;">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Amount Owed</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
          <table class="u-table-entity u-table-entity-1">
            <colgroup>
              <col width="25%">
              <col width="25%">
              <col width="25%">
              <col width="25%">
            </colgroup>
            <thead class="u-black u-table-header u-table-header-1">
              <tr style="height: 21px;">
                <th class="u-border-1 u-border-black u-table-cell">Product </th>
                <th class="u-border-1 u-border-black u-table-cell">Price </th>
                <th class="u-border-1 u-border-black u-table-cell">Owed </th>
                <th class="u-border-1 u-border-black u-table-cell">Paid </th>
                <th class="u-border-1 u-border-black u-table-cell">Action </th>
              </tr>
            </thead>
            <tbody class="u-grey-70 u-table-body u-table-body-1">
              @if(!empty($data))
              @foreach($data as $datas)
              <tr style="height: 75px;">
                <td class="u-border-1 u-border-grey-50 u-table-cell">{{$datas->name}}</td>
                <td class="u-border-1 u-border-white-50 u-table-cell">Ksh {{number_format($datas->loan_amount)}}</td>
                 <td class="u-border-1 u-border-white-50 u-table-cell">Ksh {{number_format($datas->amount_owed)}}</td>
                <td class="u-border-1 u-border-white-50 u-table-cell">Ksh {{number_format($datas->amount_paid)}}</td>
                <td><button class="btn btn-success">Pay Now</button></td>
               
                
              </tr>
              @endforeach
              @endif
        
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <br>
    
@endsection