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
 <div class="modal fade" id="direct" tabindex="-1" role="dialog" aria-labelledby="direct" aria-hidden="true">
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
                        <form class="forms-sample" id="direct-pay" onsubmit="return false" autocomplete="off">
                        <div class="form-group row">
                            <label for="exampleInputName" class="col-sm-3 col-form-label" >Meter ID</label>
                            <div class="col-sm-9">
                            <input type="text" name="met-id" class="form-control" id="met-id" placeholder="Meter ID" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputName" class="col-sm-3 col-form-label" >Amount</label>
                            <div class="col-sm-9">
                            <input type="text" name="amount" class="form-control" id="amount" placeholder="30" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputName" class="col-sm-3 col-form-label" >Payment Method</label>
                            <div class="col-sm-9">
                            <input type="text" name="met" class="form-control" id="met" placeholder="Cash" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputName" class="col-sm-3 col-form-label" >Transaction ID</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" name="trx_id" id="trx_id" required value="<?php echo $trx_id ?>">
                            <input type="hidden" class="form-control" name="paid_st" id="paid_st" value="Paid">
                            <input type="hidden" class="form-control" name="add-money" id="add-money" value="1">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputName" class="col-sm-3 col-form-label" >Payer</label>
                            <div class="col-sm-9">
                            <input type="text" name="cu-id" class="form-control" id="cu-id" placeholder="Amoako Attah" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="exampleInputName" class="col-sm-3 col-form-label" >Mobile</label>
                            <div class="col-sm-9">
                            <input type="text" name="mob" class="form-control" id="mob" placeholder="0543424033" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputName" class="col-sm-3 col-form-label" >Email</label>
                            <div class="col-sm-9">
                            <input type="text" name="em" class="form-control" id="em" placeholder="ama@yahoo.com">
                            </div>
                        </div>
                        

                        <br>
                        <div>
                            <center>
                        &emsp; &emsp;   
                        <button type="submit" onclick="add_payment()" class="btn btn-primary mr-2">Submit</button>
                        &emsp;
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </center>
                        </div>
                        </form>

                    </div>
                    
                    </div>
                </div>
            </div>