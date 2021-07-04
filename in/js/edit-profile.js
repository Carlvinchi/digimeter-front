$(document).ready(function(){
    // edit profile
    $("#profile").on("submit", function(){ 
        var backURL = "http://localhost/digi_rest/api/";

        var frontURL = "http://localhost/digifront/in/";

           // send ajax request
            
            $.ajax({
                url: backURL+"web_edit_profile.php", 

                method: "POST",

                data: $("#profile").serialize(),

                success: function(data){

                    if(data == "Success"){
                        alert(data);
                        location.replace(frontURL+"profile.php");
                    }
                        
                    else{
                        alert(data);
                        
                    }

                }
            });    
    });


    // change password
    $("#change_password").on("submit", function(){
        
         var backURL = "http://localhost/digi_rest/api/";
 
         var frontURL = "http://localhost/digifront/in/";
 
         var new1 = $("#new_pass1").val();
         var new2 = $("#new_pass2").val();
         if(new1 != new2){
             alert("Confirm password does not match");
             return false;
         }
         else{
                 // send ajax request
             
             $.ajax({
                url: backURL+"web_edit_profile.php", 

                method: "POST",

                data: $("#change_password").serialize(),

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
         }
               
     });



  });