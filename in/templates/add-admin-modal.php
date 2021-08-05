 <!-- Modal -->
 <div class="modal fade" id="add-admin" tabindex="-1" role="dialog" aria-labelledby="add-admin" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                    &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; 
                     <h5 class="modal-title" id="add-adminLabel">Create Admin</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form class="forms-sample" id="create-admin-form" onsubmit="return false" autocomplete="off">
                        <div class="form-group row">
                            <label for="exampleInputEmail" class="col-sm-3 col-form-label" >email</label>
                            <div class="col-sm-9">
                            <input type="email" name="admin-email" class="form-control" id="admin-email" placeholder="email" required autocomplete="false">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputFirstName" class="col-sm-3 col-form-label">First Name</label>
                            <div class="col-sm-9">
                            <input type="text" name="admin-firstName" class="form-control" id="admin-firstName" placeholder="First Name" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputLastName" class="col-sm-3 col-form-label">Last Name</label>
                            <div class="col-sm-9">
                            <input type="text" name="admin-lastName" class="form-control" id="admin-lastName" placeholder="Last Name" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile No</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" name="admin-mobile" id="admin-mobile" required placeholder="Mobile">
                            <input type="hidden" class="form-control" name="create-admin" id="create-admin" value="1">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputPassword" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                            <input type="password" name="admin-pass" class="form-control" id="admin-pass" placeholder="password" required>
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