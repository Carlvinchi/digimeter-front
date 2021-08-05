$(document).ready(function(){
    // add admin

    $("#create-admin-form").on("submit", function(){
        
         var backURL = "http://localhost/digi_rest/api/";
 
         var frontURL = "http://localhost/digifront/in/";
 
     
            // send ajax request
             console.log('we are adding');
             $.ajax({
                 url: backURL+"admin_service.php", 
 
                 method: "POST",
 
                 data: $("#create-admin-form").serialize(),
 
                 success: function(data){
 
                     if(data == "Success"){
                         alert(data);
                         location.replace(frontURL+"admin-users.php");
                     }
                         
                     else{
                         alert(data);
                         
                     }
 
                 }
             });
             
 
         
     });



  });