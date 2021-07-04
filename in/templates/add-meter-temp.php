<!--Button to launch Modal -->
<a class="nav-link btn btn-success create-new-button" data-toggle="modal" data-target="#add-meter" href="#">+ Add Meter</a>
            
 <!-- Modal -->
 <div class="modal fade" id="add-meter" tabindex="-1" role="dialog" aria-labelledby="add-meter" aria-hidden="true">
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

                        <form class="forms-sample">
                        <div class="form-group row">
                            <label for="exampleInputName" class="col-sm-3 col-form-label">Meter Name</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputMeterID" class="col-sm-3 col-form-label">Meter ID</label>
                            <div class="col-sm-9">
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputCustomerID" class="col-sm-3 col-form-label">Customer ID</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputMobile" placeholder="Mobile number">
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