 <!-- Modal -->
 <div class="modal fade" id="admin-meter" tabindex="-1" role="dialog" aria-labelledby="admin-meter" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                    &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; 
                     <h5 class="modal-title" id="add-meterLabel">Add Meter</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form class="forms-sample" id="admin-meter-form" onsubmit="return false" autocomplete="off">
                        <div class="form-group row">
                            <label for="exampleInputName" class="col-sm-3 col-form-label" >Meter Owner</label>
                            <div class="col-sm-9">
                            <input type="text" name="meter_owner" class="form-control" id="meter_owner" placeholder="Opoku Boamah" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputMeterID" class="col-sm-3 col-form-label">Meter ID</label>
                            <div class="col-sm-9">
                            <input type="text" name="meter_id" class="form-control" id="meter_id" placeholder="Meter ID" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputMeterID" class="col-sm-3 col-form-label">Balance</label>
                            <div class="col-sm-9">
                            <input type="text" name="m_bal" class="form-control" id="m_bal" placeholder="25.00" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputCustomerID" class="col-sm-3 col-form-label">Meter Address</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" name="meter_addr" id="meter_addr" required placeholder="Kokoben, Kumasi">
                            <input type="hidden" class="form-control" name="add" id="add" value="1">
                            </div>
                        </div>

                        <br>
                        <div>
                            <center>
                        &emsp; &emsp;   
                        <input type="submit" value="Submit" class="btn btn-primary mr-2" />
                        &emsp;
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </center>
                        </div>
                        </form>

                    </div>
                    
                    </div>
                </div>
            </div>