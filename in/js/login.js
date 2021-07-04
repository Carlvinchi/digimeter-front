$(document).ready(function(){
    $("#login-form").on("submit", function(){
        
       var email = $("#email").val();
    
       var password = $("#pass").val();
       
        var backURL = "http://localhost/digi_rest/api/";
        var frontURL = "http://localhost/digifront/in/";

    
           // send ajax request
            
            $.ajax({
                url: backURL+"web_login.php", 

                method: "POST",

                data: {
                    email: email,
                    pass: password
                },

                success: function(data){

                    if(data == "Success"){
                        alert(data);
                        location.replace(frontURL+"index.php");
                    }
                        
                    else{
                        alert(data);
                        $("#email").html(email);
                    }

                },
                error: function(xhr, resp, text) {
                    console.log(xhr, resp, text);
                },
            });
            

        
    });



    // admin login

    $("#admin-login").on("submit", function(){
        
        var email = $("#email").val();
     
        var password = $("#pass").val();
        
         var backURL = "http://localhost/digi_rest/api/";
         var frontURL = "http://localhost/digifront/in/";
 
     
            // send ajax request
             
             $.ajax({
                 url: backURL+"admin_login.php", 
 
                 method: "POST",
 
                 data: {
                     email: email,
                     pass: password
                 },
 
                 success: function(data){
 
                     if(data == "Success"){
                         alert(data);
                         location.replace(frontURL+"admin.php");
                     }
                         
                     else{
                         alert(data);
                         $("#email").html(email);
                     }
 
                 },
                 error: function(xhr, resp, text) {
                     console.log(xhr, resp, text);
                 },
             });
             
 
         
     });






  });