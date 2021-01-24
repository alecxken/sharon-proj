@extends('layouts.template')

@section('content')

    <section class="content">
      <div class="row">

        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Product Stock Settings</h3>

           
            </div>
            <div class="box-body table-responsive">
                  <table id="example1" class="table table-bordered table-striped table-sm">
               <thead>
                 <tr class="box-success">  
                  <th>Image</th>
                   <th>Name</th>
                   <th>Price</th>
                   <th>Current Stock</th>
                      
                   <th>Action</th>                               
                </tr>
              </thead>
               <tbody> 
                  @if(!empty($data))
                   @foreach ($data as $user)
                      <tr>
                        <td><div class="widget-user-image">
                <img class="img-circle elevation-2" width="68px" height="68px" src="{{asset('images/'.$user->image)}}" alt="User Avatar">
              </div></td>
                         <td>{{$user->name}}</td>
                         <td>{{$user->price}}</td>
                          <td>{{$user->current_stock_level}}</td>
                  
                    
                         <td>
                          <a href="{{url('buy-prod/'.$user->id)}}" class="btn btn-success btn-xs">Buy Product</a>

                          <a href="{{url('product-drop/'.$user->id
)}}" class="btn btn-danger btn-xs">Drop</a></td>
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