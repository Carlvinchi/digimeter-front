$(document).ready(function(){
    // add a meter
    $("#add-meter-form").on("submit", function(){
        
       var meter_alias = $("#meter_alias").val();
    
       var meter_id = $("#meter_id").val();
       var customer_id = $("#customer_id").val();
       
        var backURL = "http://localhost/digi_rest/api/";

        var frontURL = "http://localhost/digifront/in/";

    
           // send ajax request
            
            $.ajax({
                url: backURL+"web_add_update.php", 

                method: "POST",

                data: $("#add-meter-form").serialize(),

                success: function(data){

                    if(data == "Success"){
                        alert(data);
                        location.replace(frontURL+"index.php");
                    }
                        
                    else{
                        alert(data);
                        $("#meter_alias").html(meter_alias);
                        $("#meter_id").html(meter_id);
                        $("#customer_id").html(customer_id);
                    }

                }
            });
            

        
    });


    $("#admin-meter-form").on("submit", function(){
        
        var meter_owner = $("#meter_owner").val();
        var meter_id = $("#meter_id").val();
        var meter_addr = $("#meter_addr").val();
        var m_bal = $("#m_bal").val();
        
         var backURL = "http://localhost/digi_rest/api/";
 
         var frontURL = "http://localhost/digifront/in/";
 
     
            // send ajax request
             console.log('we are adding');
             $.ajax({
                 url: backURL+"admin_service.php", 
 
                 method: "POST",
 
                 data: {
                     meter_owner: meter_owner,
                     meter_id: meter_id,
                     m_bal: m_bal,
                     meter_addr: meter_addr,
                     add_meter: 1
                 },
 
                 success: function(data){
 
                     if(data == "Success"){
                         alert(data);
                         location.replace(frontURL+"meters.php");
                     }
                         
                     else{
                         alert(data);
                         $("#meter_owner").html(meter_owner);
                         $("#meter_id").html(meter_id);
                         $("#meter_addr").html(meter_addr);
                         $("#m_bal").html(m_bal);
                     }
 
                 }
             });
             
 
         
     });



  });