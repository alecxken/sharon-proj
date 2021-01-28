@extends('layouts.template')

@section('content')

    <section class="content">
      <div class="row">
 <div class="col-md-12">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Criteria Search </h3>
         </div>
         <div class="box-body">
              {!! Form::open(['method'=> 'post','url' => 'get-payment-report', 'files' => true ]) !!}
        <div class="box-body">    
            

          <div class="form-group col-md-3 center">
             {!! Form::label('weight', 'Client', ['class' => 'awesome'])!!}
             @php $client = \App\Models\User::all(); @endphp
              <select class="form-control input-sm"  name="client">
               <option value="">Choose By Client</option>
               @if(!empty($client))
                  @foreach($client as $ag)
                   <option value="{{$ag->id}}">{{$ag->name}}</option>
                  @endforeach
               @endif
             </select>
          </div>

        

          <div class="form-group col-md-3 center">
             {!! Form::label('weight', 'Delivery Date', ['class' => 'awesome'])!!}
             {!!Form::date('date',Null,['class' => 'form-control input-sm'])!!}
          </div>

           <div class="form-group col-md-3 center">
             {!! Form::label('weight', 'Amount', ['class' => 'awesome'])!!}
             {!!Form::number('amount',Null,['class' => 'form-control input-sm','step'=>'any'])!!}
          </div>

           <div class="form-group col-md-3 center">
             {!! Form::label('weight', 'Action', ['class' => 'awesome'])!!}
             <button type="submit" class="form-control btn btn-primary pull-right ">Search Data</button>
          </div>
        </div>

         

<!-- 
           <div class="box-footer">           
             
          </div> -->
        </div>
        
     {!!Form::close()!!}
         </div>
</div>
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Payments Made To Us</h3>

           
            </div>
            <div class="box-body table-responsive" id="table_wrapper">
                  <table id="report-table" class="table table-bordered table-striped table-sm">
               <thead>
                 <tr class="box-success"> 
                 <th>Date</th> 
                  <th>Customer</th>
                   <th>Product</th>
                   <th>Amount</th>
                                             
                </tr>
              </thead>
               <tbody> 
                  @if(!empty($data))
                   @foreach ($data as $user)
                      <tr>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->name}}</td>
                         <td>{{$user->loan_id}}</td>
                          <td>{{$user->amount_paid}}</td>
                  
                    
                      </tr>
                  @endforeach
                  @endif
              </tbody>
              </table>
             
             
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
   
    </section>
  <script type="text/javascript">
  
     $(document).ready(function() {
var table = $('#report-table').DataTable(
    {
    paging     : true,
    lengthChange: true,
    searching   : true,
    ordering   : true,
    info       : true,
    autoWidth   : true,
    buttons: [
       'excel'
    ]
    });

    table.buttons().container()
        .appendTo( '#table_wrapper .col-sm-6:eq(0)' );

} );
</script>
@endsection