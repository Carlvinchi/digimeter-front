<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Digimeter User Profile</title>
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

           
            <!-- Change Password modal -->
            <?php include("./templates/password-modal.php")?>
             <!-- summary info card -->

            <div class="row">
              <div class="col-sm-6 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Revenue</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">$32123</h2>
                          <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                        </div>
                        <h6 class="text-muted font-weight-normal">11.38% Since last month</h6>
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
                    <h5>Sales</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">$45850</h2>
                          <p class="text-success ml-2 mb-0 font-weight-medium">+8.3%</p>
                        </div>
                        <h6 class="text-muted font-weight-normal"> 9.61% Since last month</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <input type="hidden" id="user_id" value="<?php echo $_SESSION['user_id']?>">
            </div>

            <!-- profile card -->
          
            <div class="row">
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Profile</h4>
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-circle" class="svg-inline--fa fa-user-circle fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88-88-39.4-88-88 39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2 18.8-35.4 55.6-59.8 98.5-59.8 2.4 0 4.8.4 7.1 1.1 13 4.2 26.6 6.9 40.9 6.9 14.3 0 28-2.7 40.9-6.9 2.3-.7 4.7-1.1 7.1-1.1 42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z">

                    </svg>
                    <br>
                    <br>
                    <br>
                    <center><p>Customer ID: <?php echo $_SESSION['customer_id']?></p></center>
                    <div>
                        <center>
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#change-pass">Change Password</button>
                        </center>
                </div>
                  </div>
                </div>
              </div>
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                      <h4 class="card-title mb-1">Profile Details</h4>
                    
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="preview-list">





                        <form class="forms-sample" id="profile" onsubmit="return false" autocomplete="off">

                        
                        </form>


                        </div>
                      </div>
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
    <!-- Custom js for this page -->
    <script src="assets/js/misc.js"></script>
    <script src="js/add-meter.js"></script>
    <script src="js/edit-profile.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            var backURL = "http://localhost/digi_rest/api/";

        var frontURL = "http://localhost/digifront/in/";
            var user_id = document.getElementById("user_id").value;
			//var page_no = document.getElementById("page_no").value;
            get_profile(user_id,backURL);
        });

		//  function to automatically load data when page loads
        function get_profile(userid,backURL){
            $.ajax(
                {
                    url: backURL+"web_get_profile.php?user_id="+userid,
                    method: "GET",

                    success: function(data){
						if(data != 0){
							console.log(data);
                       //var ob  = JSON.parse(data);
                       
                       var content = document.getElementById("profile"); 
                        content.innerHTML = content.innerHTML + data;
						// We increase the value by 25 because we limit the results by 25
						//document.getElementById("page_no").value = Number(page_no) + 25;
						}
						   
                    }
                }
            );

        }
</script>
    <!-- End custom js for this page -->
  </body>
</html>