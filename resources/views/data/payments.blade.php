@extends('layouts.template')

@section('content')

    <section class="content">
      <div class="row">

        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Payments Made To Us</h3>

           
            </div>
            <div class="box-body table-responsive">
                  <table id="example1" class="table table-bordered table-striped table-sm">
               <thead>
                 <tr class="box-success">  
                  <th>Customer</th>
                   <th>Product</th>
                   <th>Amount</th>
                                             
                </tr>
              </thead>
               <tbody> 
                  @if(!empty($data))
                   @foreach ($data as $user)
                      <tr>
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
       

     </script>
@endsection