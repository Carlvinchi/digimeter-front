$(document).ready(function(){
    // add a meter
    $("#add-pay-form").on("submit", function(){
        
       var email = $("#user_email").val();
       var meter_id = $("#meter_id").val();
       var customer_id = $("#customer_id").val();
       var amount = $("#amount").val(); 
       var charge = (amount  * 100) + (amount * 0.02* 100);
       console.log(charge);
       var ref = $("#trx_id").val();
        var  callback_url  = "http://localhost/digi_rest/api/verify.php";
       
        var backURL = "http://localhost/digi_rest/api/";

        var frontURL = "http://localhost/digifront/in/";

    
           // send ajax request
           $.ajax({
            url: backURL+"web_payments.php", 

            method: "POST",
            

            data: {
                email: email,
                amount: amount,
                reference: ref,
                customer_id: customer_id,
                meter_id: meter_id,
                add_payment: 1
            },

            success: function(data){
                if(data == "Success"){
                    $.ajax({
                        url: "https://api.paystack.co/transaction/initialize", 
        
                        method: "POST",
                        dataType: 'json',
                        headers: {
                            "Authorization": "Bearer sk_test_cb859b103a9e82864c7dd83893960d234c144286"
                        },
        
                        data: {
                            email: email,
                            amount: charge,
                            reference: ref,
                            callback_url: callback_url,
                            metadata: {
                                meter_id: meter_id,
                                customer_id: customer_id
                            }
                        },
        
                        success: function(data){
        
                            console.log(data);
                            console.log(data.data.authorization_url);
                            window.location = data.data.authorization_url;
        
                        }
                    });

                }
                else{
                    alert(data);
                }

            }
        });
   

        
    });



  });

























  