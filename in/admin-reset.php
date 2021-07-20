<!DOCTYPE html>
<html lang="en">
  <head> 
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Reset Password</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
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
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Reset</h3>
                <form id="reset-form" onsubmit="return false" autocomplete="off">
                  
                  <div class="form-group">
                    
                    <input type="hidden" class="form-control p_input" id="email" name="email" value="<?php echo $_GET['email'] ?>">

                    <input type="hidden" class="form-control p_input" id="token" name="token" value="<?php echo $_GET['token'] ?>">
                    <input type="hidden" class="form-control p_input" id="reset" name="reset" value="1">
                  </div>

                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control p_input" id="pass1" name="pass1" required>
                  </div>

                   <div class="form-group">
                    <label> Confirm Password</label>
                    <input type="password" class="form-control p_input" id="pass2" name="pass2" required>
                  </div>
                  
                  <div class="text-center">
                    <input type="submit" name="submit" value="Reset" class="btn btn-primary btn-block enter-btn">
                  </div> 
                 
                </form>

              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <script src="js/admin-forgot.js"></script>
    <!-- endinject -->
  </body>
</html>