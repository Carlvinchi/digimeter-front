<?php
    session_start();
    if(!isset($_SESSION['user_id'])){
      $domain = "http://localhost/digifront/in/login.php";
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
    <title>Digimeter User Dashboard</title>
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
      <?php include("./templates/nav.php")?>

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <!-- top navigation file -->
        <?php include("./templates/index-top-nav.php")?>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          <!-- promotion flyer card -->
          <?php include("./templates/flyercard.php")?>

          <!-- add meter modal -->

          <?php include("./templates/add-meter-modal.php")?>

        <!-- edit meter modal -->

            <?php include("./templates/edit-alias-meter-modal.php")?>

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

            <div class="row">
              <div class="col-sm-6 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Meters</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0" id="total"></h2>
                      
                        </div>
                        <h6 class="text-muted font-weight-normal">You can add more</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Balance</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0" id="bal"></h2>
                          
                        </div>
                        <h6 class="text-muted font-weight-normal"> Avaible balance</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>




          <!-- table contnent card file -->


          <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Meters &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
                    &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
                    &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
                        <button class="btn btn-success mr-2" data-toggle="modal" data-target="#add-meter">+ Add Meter</button>
                    </h4>
                   
                    <div class="table-responsive">
                    <input type="hidden" id="user" value="<?php echo $_SESSION['customer_id']?>">
                    <input type="hidden" id="page_no" value="0">
                      <table class="table">
                        <thead>
                          <tr>
                            
                            <th> Meter Name </th>
                            <th> Meter ID </th>
                            <th> Balance </th>
                            <th> Health Status </th>
                            <th> Lock Status </th>
                            <th> Actions </th>
                          </tr>
                        </thead>
                        <tbody id="list">
                          

                        </tbody>
                      </table>
                      <br>
                      <center><input class="btn btn-primary" type="button" id="load_more" value="Load More"></center>
                    </div>
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
            var userid = document.getElementById("user").value;
            var page_no = document.getElementById("page_no").value;
			//var page_no = document.getElementById("page_no").value;
            load(userid,backURL,page_no);
            get_ifo(userid,backURL);
	
			$("#load_more").click(function() {
        load_more();
        
		
      });
        });

		//  function to automatically load data when page loads
        function load(userid,backURL,page_no){
            $.ajax(
                {
                    url: backURL+"web_get_alias_meters.php?customer_id="+userid+"&get_alias_meters&no="+page_no,
                    method: "GET",

                    success: function(data){
						if(data != 0){
							var content = document.getElementById("list");  
                        content.innerHTML = content.innerHTML + data;
						// We increase the value by 25 because we limit the results by 25
						document.getElementById("page_no").value = Number(page_no) + 30;
						}
						else{
							 $("#load_more").hide();
						}
                       
                    }
                }
            );

        }

        function load_more(){
          var backURL = "http://localhost/digi_rest/api/";
            var frontURL = "http://localhost/digifront/in/";
            var userid = document.getElementById("user").value;
            var page_no = document.getElementById("page_no").value;
            $.ajax(
                {
                    url: backURL+"web_get_alias_meters.php?customer_id="+userid+"&alias_paginate&no="+page_no,
                    method: "GET",

                    success: function(data){
						if(data != 0){
							var content = document.getElementById("list");  
                  content.innerHTML = content.innerHTML + data;
						// We increase the value by 25 because we limit the results by 25
						document.getElementById("page_no").value = Number(page_no) + 30;
						}
						else{
							 $("#load_more").hide();
						}
                       
                    }
                }
            );

        }

        function get_ifo(userid,backURL){
            $.ajax(
                {
                    url: backURL+"web_get_alias_meters.php?customer_id="+userid+"&met-info",
                    method: "GET",

                    success: function(data){
						if(data != 0){
                  jso = JSON.parse(data)
							console.log(jso[0]);
              console.log(jso[1].meter_account);
              var content = document.getElementById("total"); 
						      content.innerHTML = ""; 
                  content.innerHTML = content.innerHTML + jso[0];

              var item = document.getElementById("bal"); 
						      item.innerHTML = ""; 
                  item.innerHTML = item.innerHTML + jso[1].meter_account;
                      
						// We increase the value by 25 because we limit the results by 25
						//document.getElementById("page_no").value = Number(page_no) + 25;
						}
						
                       
                    }
                }
            );

        }
        function get_meter(customer_id,meter_id,){
            var backURL = "http://localhost/digi_rest/api/";
            $.ajax(
                {
                    url: backURL+"web_get_alias_meters.php?customer_id="+customer_id+"&single&meter_id="+meter_id,
                    method: "GET",

                    success: function(data){
						if(data != 0){

							var append = document.getElementById("ali"); 
							append.innerHTML = ""; 
                        append.innerHTML = append.innerHTML + data;
						setTimeout(() => {  $("#edit-alias").modal('show'); }, 100);
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
            var meter_id = $("#mter_id").val();
            var customer_id = $("#cust_id").val();
            var alias = $("#alias_name").val();
            
            setTimeout(100);
            
            $.ajax({
                url: backURL+"web_get_alias_meters.php", 

                method: "POST",

                data: {
                    mter_id: meter_id,
                    cust_id: customer_id,
                    alias: alias,
                    edit_alias:1
                },

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
        } 

        // function to confirm user action before deleting
		function confirm_delete(customer_id,meter_id){
		
        $("#deleteModal").modal('show')
        $("#delete").click(function(){
            delet(customer_id,meter_id);
        });
        
        }

        function delet(customer_id,meter_id){
            var backURL = "http://localhost/digi_rest/api/";
            var frontURL = "http://localhost/digifront/in/";
            
            setTimeout(100);
            
            $.ajax({
                url: backURL+"web_get_alias_meters.php", 

                method: "POST",

                data: {
                    mter_id: meter_id,
                    cust_id: customer_id,
                    delete:1
                },

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
        }

        function lock(meter_id){
            var backURL = "http://localhost/digi_rest/api/";
            var frontURL = "http://localhost/digifront/in/";
            
            setTimeout(100);
            
            $.ajax({
                url: backURL+"web_get_alias_meters.php", 

                method: "POST",

                data: {
                    mter_id: meter_id,
                    lock:1
                },

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
        }
</script>
    <!-- End custom js for this page -->
  </body>
</html>