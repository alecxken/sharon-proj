@extends('layouts.template')
@section('content')
<div class="box-body">
  
<div class="row">

<div class="col-md-4">  

    <div class="box box-success">
            <div class="box-header with-border bg-success disabled">
                <h6 class="box-title "> Loan  Settings</h6>
            </div> 
           <div class="box-body">
          {!! Form::open(['method'=> 'post','url' => 'loan-store' ,'files' => true]) !!}
        
              <div class="form-group col-md-12">
            {!! Form::label('C_Name', 'Loan Type', ['class' => 'col-form-label '])!!}
            {!!Form::text('name',Null,['class' => 'form-control' ])!!}
           </div>    

            <div class="form-group col-md-12">
            {!! Form::label('C_Name', 'Loan Period', ['class' => 'col-form-label '])!!}
            {!!Form::number('period',Null,['class' => 'form-control' ])!!}
           </div> 

            <div class="form-group col-md-12">
            {!! Form::label('C_Name', 'Loan interest', ['class' => 'col-form-label '])!!}
            {!!Form::number('interest',Null,['class' => 'form-control' ])!!}
           </div> 

          
       
           </div>         
           <div class="box-footer ">
              
              <button type="submit" class="btn btn-info ">save</button>
            </div>
           {!!Form::close()!!}
   </div>
</div>

<div class="col-md-8">  

    <div class="box box-success">
            <div class="box-header with-border bg-success disabled">
                <h6 class="box-title "> Loan  Settings View</h6>
            </div> 
           <div class="box-body">
           <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-striped">
          <thead>
             <tr class="box-success">  
               <th>Id</th>
               <th>Name</th>
               <th>interest</th>
                <th>period</th>
                <th>Action</th>
                                                           
            </tr>
          </thead>
           <tbody> @if(!empty($data))
           @foreach ($data as $user)
              <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>            
                <td>{{$user->interest}}</td>
                <td>{{$user->period}}</td>
                <td><a href="{{url('deleteloan/'.$user->id)}}" class="btn btn-xs btn-danger">Drop</a></td>
            
              
              </tr>
          @endforeach
          @endif
          </tbody>
          </table>
          </div>
       
           </div>         
         
   </div>
</div>
</div>
 </div>
 

@endsection
