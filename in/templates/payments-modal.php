 <?php
        $permitted_chars = '0123456789';
        // Generating transaction id
           function generate_string($input, $strength = 16) {
               $input_length = strlen($input);
               $random_string = '';
               for($i = 0; $i < $strength; $i++) {
                   $random_character = $input[mt_rand(0, $input_length - 1)];
                   $random_string .= $random_character;
               }
            
               return $random_string;
           }
           $trx_id = generate_string($permitted_chars, 12);
 ?>
 <!-- Modal -->
 <div class="modal fade" id="add-pay" tabindex="-1" role="dialog" aria-labelledby="add-pay" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                    &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; 
                     <h5 class="modal-title" id="add-payLabel">Topup</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form class="forms-sample" id="add-pay-form" onsubmit="return false" autocomplete="off">
                        <div class="form-group row">
                            <label for="exampleInputName" class="col-sm-3 col-form-label" >Amount</label>
                            <div class="col-sm-9">
                            <input type="text" name="amount" class="form-control" id="amount" placeholder="30" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            
                            <input type="hidden" class="form-control" name="customer_id" id="customer_id" value="<?php echo $customer_id ?>">
                            <input type="hidden" class="form-control" name="meter_id" id="meter_id" value="<?php echo $meter_id ?>">
                            <input type="hidden" class="form-control" name="trx_id" id="trx_id" value="<?php echo $trx_id ?>">
                            <input type="hidden" class="form-control" name="user_email" id="user_email" value="<?php echo $user_email ?>">
                            
                            
                            
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