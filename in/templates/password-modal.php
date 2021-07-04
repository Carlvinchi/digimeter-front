                    

                     <!-- Modal -->
            <div class="modal fade" id="change-pass" tabindex="-1" role="dialog" aria-labelledby="change-pass" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                    &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; 
                     <h5 class="modal-title" id="change-passLabel">Change Password</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                    <form class="forms-sample" id="change_password" onsubmit="return false" autocomplete="off">
                      
                      
                      <div class="form-group">
                        <label for="exampleInputPassword1">Old Password</label>
                        <input type="password" class="form-control" name="old_pass" id="old_pass" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">New Password</label>
                        <input type="password" class="form-control" name="new_pass1" id="new_pass1" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Confirm Password</label>
                        <input type="password" class="form-control" name="new_pass2" id="new_pass2" placeholder="Password">
                        <input type="hidden" name="us_id" id="us_id" required value="<?php echo $_SESSION['user_id']?>">
                        <input type="hidden" name="change_p" id="change_p" required value="1">
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