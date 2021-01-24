


<div  class="modal  fade" tabindex="-1" role="dialog" id="modal-info">
   <div class="modal-dialog" role="document">
       <div class="modal-content">
                 <div class="modal-header">
                    <h4 class="modal-title"> Roles</h4>
                 </div>
                  {{ Form::open(array('url' => 'roles_store')) }}
                   <div class="modal-body">
                
                           <div class="box-body">

                       
                          @csrf
                              <div class="form-group">
                                  {{ Form::label('name', 'Name') }}
                                  @if ($errors->has('name'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('name') }}</strong>
                                      </span>
                                  @endif
                                  {{ Form::text('name', null, array('class' => 'form-control')) }}
                              </div>

                              <h5><b>Assign Permissions</b></h5>

                              <div class='form-group'>
                                  @foreach ($permissions as $permission)
                                      {{ Form::checkbox('permissions[]',  $permission->id ) }}
                                      {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>

                                  @endforeach
                              </div>

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
</div>
