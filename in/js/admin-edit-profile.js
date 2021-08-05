$(document).ready(function(){
    // edit profile
    $("#admin-pro").on("submit", function(){ 
        var backURL = "http://localhost/digi_rest/api/";

        var frontURL = "http://localhost/digifront/in/";

           // send ajax request
            
            $.ajax({
                url: backURL+"admin_service.php", 

                method: "POST",

                data: $("#admin-pro").serialize(),

                success: function(data){

                    if(data == "Success"){
                        alert(data);
                        location.replace(frontURL+"admin-profile.php");
                    }
                        
                    else{
                        alert(data);
                        
                    }

                }
            });    
    });

 
    // change password
    $("#change_password_admin").on("submit", function(){
        
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
                url: backURL+"admin_service.php", 

                method: "POST",

                data: $("#change_password_admin").serialize(),

                success: function(data){

                    if(data == "Success"){
                        alert(data);
                        location.replace(frontURL+"admin-logout.php");
                    }
                        
                    else{
                        alert(data);
                        
                    }

                }
            });
         }
               
     });



  });