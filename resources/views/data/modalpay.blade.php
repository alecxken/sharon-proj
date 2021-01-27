<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Info Modal</h4>
              </div>
  <form id="frmTasks" name="frmTasks" class="form-horizontal" method="post" action="{{url('store-payment')}}">
                @csrf
              <div class="modal-body">
                 
                            <div class="form-group error">
                                    <label for="inputTask" class="col-sm-3 control-label">Product Serial</label>
                                    <div class="col-sm-9">
                                       <input type="text" class="form-control has-error" id="id" name="loan_id" placeholder="id" readonly="">
                                    </div>
                                </div>

                                 <div class="form-group error">
                                    <label for="inputTask" class="col-sm-3 control-label">Amount Owed</label>
                                    <div class="col-sm-9">
                                       <input type="text" class="form-control has-error" id="amount_owed" name="amount_owed" placeholder="message" readonly="">
                                    </div>
                                </div>

                                <div class="form-group error">
                                    <label for="inputTask" class="col-sm-3 control-label">Amount Paid </label>
                                    <div class="col-sm-9">
                                       <input type="number" class="form-control has-error" id="names" name="amount_paid" placeholder="100.00" >
                                    </div>
                                </div>

                                <div class="form-group error">
                                    <label for="inputTask" class="col-sm-3 control-label">Payment Ref </label>
                                    <div class="col-sm-9">
                                       <input type="text" class="form-control has-error" id="names" name="payment_ref" placeholder="JHE45SX" >
                                    </div>
                                </div>

                          <!--       <div class="form-group error">
                                    <label for="inputTask" class="col-sm-3 control-label">Status</label>
                                      <div class="col-sm-9">
                                   <select class="form-control" name="incident_status" required="">
                                     <option value="">Choose Status</option>
                                     <option>In Progress</option>
                                     <option>Actioned</option>
                                     <option>Customer Out of Reach</option>
                                   </select>
                                 </div>
                                </div> -->

                               {{--  <div class="form-group error">
                                    <label for="inputTask" class="col-sm-3 control-label">Image</label>
                                    <div class="col-sm-9">
                                        <input type="file">
                                    </div>
                                </div> --}}

                

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger-outline pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Save changes</button>
              </div>
          </form>
            </div>
            <!-- /.modal-content -->
          </div>
      </div>