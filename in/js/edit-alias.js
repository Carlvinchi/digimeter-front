$(document).ready(function(){
    // add a meter
    $("#edit_alias_meter").on("submit", function(){
        console.log("HI");
       var meter_alias = $("#alias_name").val();
    
       
        var backURL = "http://localhost/digi_rest/api/";

        var frontURL = "http://localhost/digifront/in/";

    
           // send ajax request
            
            $.ajax({
                url: backURL+"web_add_update.php", 

                method: "POST",

                data: $("#edit_alias_meter").serialize(),

                success: function(data){

                    if(data == "Success"){
                        alert(data);
                        location.replace(frontURL+"index.php");
                    }
                        
                    else{
                        alert(data);
                        
                    }

                }
            });
            

        
    });



  });