<?php
    session_start();
    if(!isset($_SESSION['admin_id'])){
        $domain = "http://localhost/digifront/in/admin-login.php";
        header("location: $domain");
        exit();
      }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Digimeter Meters</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles --> 
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <!-- side navigation file -->
      <?php include("./templates/admin-nav.php")?>

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <!-- top navigation file -->
        <?php include("./templates/admin-top-nav.php")?>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          <!-- promotion flyer card -->
          <?php include("./templates/flyercard.php")?>

          <!-- add meter modal -->

          <?php include("./templates/admin-add-meter.php")?>
    

            <!-- top up modal -->

            <?php include("./templates/topup-modal.php")?>

            <!-- edit meter modal -->

            <?php include("./templates/admin-edit.php")?>

            <!-- Modal to show delete confirmation-->
				<div class="modal fade bs-example-modal-sm" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel">
					<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<center><h4 class="modal-title" id="deleteModalLabel">Confirm &emsp;&emsp;&emsp;&emsp;&emsp;
									&emsp;</h4></center>
						</div>
						<div class="modal-body">
							<p>Do you want to delete?</p>
							<form  class="form-inline"   autocomplete="off" >
								
								
							&emsp;
						
									<div class="form-group">

									<button class="btn btn-danger" id="delete">Yes</button>
									</div>
									&emsp;
									&emsp;
									&emsp;
									&emsp;
									&emsp;
									&emsp;
									<div class="form-group">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
									</div>

									
							</form>

						</div>
						
					</div>
					</div>
				</div>

            <!-- summary info card -->

            <?php include("./templates/admin-scard.php")?>

          <!-- table contnent card file -->


          <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Meters &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
                    &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
                    &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
                        <button class="btn btn-success mr-2" data-toggle="modal" data-target="#admin-meter">+ Add Meter</button>
                    </h4>
                   
                    <div class="table-responsive">
                
                    <input type="hidden" id="page_no" value="0">
                      <table class="table">
                        <thead>
                          <tr>
                            
                            <th> Meter ID </th>
                            <th> Balance </th>
                            <th> Owner </th>
                            <th> Lock Status</th>
                            <th> Health Status </th>
                            <th> Entry Date </th>
                            <th> Actions</th>
                            
                            
                          </tr>
                        </thead>
                        <tbody id="re-meters">
                          

                        </tbody>
                      </table>
                      <br>
                      </div>
                      <br>
                      <center><input class="btn btn-primary" type="button" id="load_more" value="Load More"></center>
                    
                  </div>
                </div>
              </div>
            </div>


          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <?php include("./templates/footer.php")?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="js/add-meter.js"></script>
    <script src="js/edit-alias.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            var backURL = "http://localhost/digi_rest/api/";
            var frontURL = "http://localhost/digifront/in/";
            //var userid = document.getElementById("user").value;
            var page_no = document.getElementById("page_no").value;
			//var page_no = document.getElementById("page_no").value;
            load(backURL,page_no);
            get_total_meters(backURL);
            get_total_users();
            //get_ifo(userid,backURL);
	
			$("#load_more").click(function() {
        load_more();
        
		
      });
        });

		//  function to automatically load data when page loads
        function load(backURL,page_no){
            console.log('fire')
            $.ajax(
                {
                    url: backURL+"admin_service.php?no="+page_no+"&re-meters",
                    method: "GET",

                    success: function(data){
						if(data != 0){
                           // console.log(data);
							var content = document.getElementById("re-meters");  
                        content.innerHTML = content.innerHTML + data;
						// We increase the value by 25 because we limit the results by 25
						document.getElementById("page_no").value = Number(page_no) + 30;
						}
						else{
                            console.log(data);
							 $("#load_more").hide();
						}
                       
                    }
                }
            );

        }

        function load_more(){
          var backURL = "http://localhost/digi_rest/api/";
            var frontURL = "http://localhost/digifront/in/";
            //var userid = document.getElementById("user").value;
            var page_no = document.getElementById("page_no").value;
            $.ajax(
                {
                    url: backURL+"admin_service.php?no="+page_no+"&re-meters",
                    method: "GET",

                    success: function(data){
						if(data != 0){
                           // console.log(data);
							var content = document.getElementById("re-meters");  
                        content.innerHTML = content.innerHTML + data;
						// We increase the value by 25 because we limit the results by 25
						document.getElementById("page_no").value = Number(page_no) + 30;
						}
						else{
                            console.log(data);
							 $("#load_more").hide();
						}
                       
                    }
                }
            );

        }

        function get_total_meters(backURL){
            $.ajax(
                {
                    url: backURL+"admin_service.php?total_meters",
                    method: "GET",

                    success: function(data){
						
                  //jso = JSON.parse(data);
                  console.log(data);
              //console.log(jso[1].meter_account);
              var content = document.getElementById("t_meter"); 
						      content.innerHTML = ""; 
                  content.innerHTML = content.innerHTML + data;
                      
						// We increase the value by 25 because we limit the results by 25
						//document.getElementById("page_no").value = Number(page_no) + 25;
						
						
                       
                    }
                }
            );

        }
        function get_total_users(){
            var backURL = "http://localhost/digi_rest/api/";
            $.ajax(
                {
                    url: backURL+"admin_service.php?total_users",
                    method: "GET",

                    success: function(data){
						
                            console.log(data);
							var append = document.getElementById("t_user"); 
							append.innerHTML = ""; 
                        append.innerHTML = append.innerHTML + data;
						
						// We increase the value by 25 because we limit the results by 25
						//document.getElementById("page_no").value = Number(page_no) + 25;
					
                       
                    }
                }
            );

        }

        function get_details(meter_id){
            var backURL = "http://localhost/digi_rest/api/";
            $.ajax(
                {
                    url: backURL+"admin_service.php?meter_id="+meter_id+"&single_detail",
                    method: "GET",

                    success: function(data){
						if(data != 0){

							var append = document.getElementById("edit-detail"); 
							append.innerHTML = ""; 
                        append.innerHTML = append.innerHTML + data;
						setTimeout(() => {  $("#edit-admin").modal('show'); }, 100);
						// We increase the value by 25 because we limit the results by 25
						//document.getElementById("page_no").value = Number(page_no) + 25;
						}
						else{
							 $("#load_more").hide();
						}
                       
                    }
                }
            );

        }

        function edit(){
            var backURL = "http://localhost/digi_rest/api/";
            var frontURL = "http://localhost/digifront/in/";
            console.log("Hi");
            var meter_id = $("#m_id").val();
            var meter_owner = $("#m_owner").val();
            var m_bal = $("#mt_bal").val();
            var m_addr = $("#m_addr").val();
            var i_no = $("#item_no").val();
            
            setTimeout(100);
            
            $.ajax({
                url: backURL+"admin_service.php", 

                method: "POST",

                data: {
                    m_id: meter_id,
                    m_owner: meter_owner,
                    m_bal: m_bal,
                    m_addr: m_addr,
                    item_no: i_no,
                    edit:1
                },

                success: function(data){

                    if(data == "Success"){
                        alert(data);
                        location.replace(frontURL+"meters.php");
                    }
                        
                    else{
                        alert(data);
                        
                    }

                }
            });
        }

        // function to confirm user action before deleting
		function confirm_delete(meter_id){
		
        $("#deleteModal").modal('show')
        $("#delete").click(function(){
            delet(meter_id);
        });
        
        }

        function delet(meter_id){
            var backURL = "http://localhost/digi_rest/api/";
            var frontURL = "http://localhost/digifront/in/";
            
            setTimeout(100);
            
            $.ajax({
                url: backURL+"admin_service.php", 

                method: "POST",

                data: {
                    m_id: meter_id,
                    delete:1
                },

                success: function(data){

                    if(data == "Success"){
                        alert(data);
                        location.replace(frontURL+"meters.php");
                    }
                        
                    else{
                        alert(data);
                        
                    }

                }
            });
        }

        function lock(meter_id){
            var backURL = "http://localhost/digi_rest/api/";
            var frontURL = "http://localhost/digifront/in/";
            
            setTimeout(100);
            
            $.ajax({
                url: backURL+"admin_service.php", 

                method: "POST",

                data: {
                    m_id: meter_id,
                    lock:1
                },

                success: function(data){

                    if(data == "Success"){
                        alert(data);
                        location.replace(frontURL+"meters.php");
                    }
                        
                    else{
                        alert(data);
                        
                    }

                }
            });
        }

        function add_payment(){
            var backURL = "http://localhost/digi_rest/api/";
            var frontURL = "http://localhost/digifront/in/";
            
            data = $('#direct-pay').serialize();
            console.log(data);
            
            $.ajax({
                url: backURL+"admin_service.php", 

                method: "POST",

                data: $('#direct-pay').serialize(),

                success: function(data){

                    if(data == "Success"){
                        alert(data);
                        location.replace(frontURL+"admin.php");
                    }
                        
                    else{
                        alert(data);
                        
                    }

                }
            });
        }
</script>
    <!-- End custom js for this page -->
  </body>
</html>