$(document).ready(function(){

    // change password
    $("#forgot-form").on("submit", function(){
        
         var backURL = "http://localhost/digi_rest/api/";
 
         var frontURL = "http://localhost/digifront/in/";

                 // send ajax request
             
             $.ajax({
                url: backURL+"web_reset.php", 

                method: "POST",

                data: $("#forgot-form").serialize(),

                success: function(data){

                    if(data == "Success"){
                        alert(data);
                        location.replace(frontURL+"reset.php");
                    }
                        
                    else{
                        alert(data);
                        
                    }

                }
            });
         
               
     });

     // change password
    $("#reset-form").on("submit", function(){
        
        var backURL = "http://localhost/digi_rest/api/";

        var frontURL = "http://localhost/digifront/in/";

        var new1 = $("#pass1").val();
         var new2 = $("#pass2").val();
         if(new1 != new2){
             alert("Confirm password does not match");
             return false;
         }

                // send ajax request
            
            $.ajax({
               url: backURL+"web_reset.php", 

               method: "POST",

               data: $("#reset-form").serialize(),

               success: function(data){

                   if(data == "Success"){
                       alert(data);
                       location.replace(frontURL+"login.php");
                   }
                       
                   else{
                       alert(data);
                       
                   }

               }
           });
        
              
    });



  });