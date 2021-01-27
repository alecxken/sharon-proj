@extends('layouts.template')

@section('title', '| Users')

@section('content')

<div class="box-body">
  

  <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              <li class=""><a href="#tab_2-2" data-toggle="tab" aria-expanded="false">Roles</a></li>
              <li class=""><a href="#tab_3-2" data-toggle="tab" aria-expanded="false">Permissions</a></li>
              <li class="active"><a href="#tab_1-1" data-toggle="tab" aria-expanded="true">Users</a></li>
             
              <li class="pull-left header"><i class="fa fa-users"></i> User Administration <a href="{{ url('roles_index') }}" class="btn btn-default pull-right">Roles</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1-1">
                <b>How to use:</b>

                <div class="box-body table-responsive">
       <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>User Roles</th>
                    <th>Operations</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>@if(is_null($user->roles()))

                      <p>No Role</p>
                      @else

                      {{  $user->roles()->pluck('name')->implode(' ,') }}</td>
                      @endif
                    {{-- Retrieve array of roles associated to a user and convert to string --}}
                    <td>
                      <div class="btn-group">
                      <button class="btn btn-xs btn-success  label-sm  open-modalss" value="{{$user->id}}">Edit</button>
                    
                      {!! Form::open(['method' => 'get', 'url' => ['user_destroy/'.$user->id] ]) !!}
                      {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                      {!! Form::close() !!}
                  

                    </div>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
      </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2-2">
                <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Role</th>
                    <th>Permissions</th>
                    <th>Operation</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($roles as $role)
                <tr>

                    <td>{{ $role->name }}</td>

                    <td>{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>{{-- Retrieve array of permissions associated to a role and convert to string --}}
                    <td>
                    <a href="{{ URL::to('roles/'.$role->id.'/edit') }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                    {!! Form::open(['method' => 'get', 'url' => ['roles_destroy', $role->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
                Add New Role
              </button>

   <!--  <a href="{{ URL::to('roles/create') }}" class="btn btn-success">Add Role</a> -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane " id="tab_3-2">
             <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover" id="dataTables-example">


            <thead>
                <tr>
                    <th>Permissions</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $permission)
                <tr>
                    <td>{{ $permission->name }}</td>
                    <td>
                    <a href="{{ URL::to('permissions/'.$permission->id.'/edit') }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                    {!! Form::open(['method' => 'DELETE', 'url' => ['permissions_destroy/'. $permission->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-permission">
               Add Permission
              </button>
<!--     <a href="{{ URL::to('permissions/create') }}" class="btn btn-success">Add Permission</a> -->
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
      
</div>

@include('admin.roles')
@include('admin.permission')
@include('admin.user')

<script type="text/javascript">
     $(document).ready(function(){

    var url = "get-user";

    $('.open-modalss').click(function(){
        var task_id = $(this).val();
        $.get(url + '/' + task_id, function (data) {
            //success data
            console.log(data);
            $('#task_id').val(data.id);         
            $('#task_name').val(data.name); 
            $('#task_email').val(data.email);                                   
            $('#modal-user').modal('show');
        }) 
    });
  });

</script>
@endsection
