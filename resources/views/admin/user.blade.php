


<div  class="modal  fade" tabindex="-1" role="dialog" id="modal-user">
   <div class="modal-dialog" role="document">
       <div class="modal-content">
                 <div class="modal-header">
                    <h4 class="modal-title"> User Update</h4>
                 </div>
                   {{ Form::open(['method'=>'POST','url'=>'user_update']) }}
                   <div class="modal-body">
                
                         <input type="hidden" name="task_id" id="task_id">
    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', Null, array('class' => 'form-control', 'readonly','id'=>'task_name')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', Null, array('class' => 'form-control', 'readonly','id'=>'task_email')) }}
    </div>

    <h5><b>Give Role</b></h5>

    <div class='form-group'>
        @foreach ($roles as $role)
            {{ Form::checkbox('roles[]',  $role->id, $user->roles ) }}
            {{ Form::label($role->name, ucfirst($role->name)) }}<br>

        @endforeach
    </div>

            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-info pull-left" data-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-success center">Submit </button>
            </div>
              {!!Form::close()!!}
        </div>
     </div>
</div>

