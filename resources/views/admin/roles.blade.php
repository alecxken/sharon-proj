


<div  class="modal  fade" tabindex="-1" role="dialog" id="modal-permission">
   <div class="modal-dialog" role="document">
       <div class="modal-content">
                 <div class="modal-header">
                    <h4 class="modal-title"> Permission</h4>
                 </div>
                  {{ Form::open(['method'=> 'post','url' => 'permissions_store']) }}
                   <div class="modal-body">
                
                           <div class="box-body">

                       
                          @csrf
                          

                              <div class="form-group">
                                  {{ Form::label('name', 'Name') }}
                                  {{ Form::text('name', '', array('class' => 'form-control')) }}
                              </div><br>
                              @if(!$roles->isEmpty())
                                  <h4>Assign Permission to Roles</h4>

                                  @foreach ($roles as $role)
                                      {{ Form::checkbox('roles[]',  $role->id ) }}
                                      {{ Form::label($role->name, ucfirst($role->name)) }}<br>

                                  @endforeach
                              @endif
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

