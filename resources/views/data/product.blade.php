@extends('layouts.template')

@section('content')
{!! Form::open(['method'=> 'post','url' => 'product-store' ,'files' => true]) !!}
    <section class="content">
  
      <div class="box-body">
  
        <div class="col-md-6">
          <div class="box box-secondary">
            <div class="box-header">
              <h3 class="box-title">Product Setup</h3>

           
              </div>
       
               
            <div class="box-body">

            


              <div class="form-group">
                <label for="inputName">Product Name</label>
                <input type="text" id="inputName" name="name" required="" class="form-control form-control-sm">
              </div>

              <div class="form-group">
                <label for="inputName">Price</label>
                <input type="number" id="inputName" name="price" required="" class="form-control form-control-sm">
              </div>

              <div class="form-group">
                <label for="inputDescription">Description</label>
                <textarea id="inputDescription" class="form-control form-control-sm" rows="1" name="desc"></textarea>
              </div>

              

              <div class="form-group">
                <label for="inputStatus" name="unit">Product Unit</label>
                <select class="form-control form-control-sm custom-select">
                  <option selected disabled>Select one</option>
                  <option>Kg(s)</option>
                  <option>Pc(s)</option>
                </select>
              </div>

                 <div class="form-group">
                <label for="inputDescription">Image</label>
                <input type="file" name="file" class="form-control form-control-sm">
          
              </div>
         
            </div>
       

       
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
      </div>
        <div class="col-md-6">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Product Stock Settings</h3>

          
            </div>
            <div class="box-body table-responsive">
                 <div class="form-group">
                <label for="inputName">Product Code</label>
                <input type="text" id="inputName" value="{{$token}}"  name="token" class="form-control form-control-sm" readonly="">
              </div>
               <div class="form-group">                

                <label for="inputEstimatedBudget">Product Current Stock Level</label>
                <input type="number"   name="current_stock_level" id="inputEstimatedBudget"  required="" class="form-control form-control-sm">
              </div>
              <div class="form-group">                

                <label for="inputEstimatedBudget">Product Overall Minimum  Stock Level</label>
                <input type="number"   name="min_level_overall" id="inputEstimatedBudget" required="" class="form-control form-control-sm">
              </div>
              <div class="form-group">
                <label for="inputSpentBudget">Product Store Minimum Stock Level</label>
                <input type="number"  name="min_level_store"  id="inputSpentBudget" class="form-control form-control-sm">
              </div>
            
             
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>


           <div class="box-footer">
               
        
    
         <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Submit Product" class="btn btn-success float-right">
       
          </div>
        </div>
           {!!Form::close()!!}
    </section>
     <script type="text/javascript">
       

     </script>
@endsection