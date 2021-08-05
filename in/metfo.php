<?php
    session_start();
    if(!isset($_SESSION['user_id'])){
      $domain = "http://localhost/digifront/in/login.php";
      header("location: $domain");
      exit();
    }
    $meter_id = $_GET["meter_id"];
    $customer_id = $_GET["customer_id"];
    $user_email = $_SESSION["user_email"];
?>
<!DOCTYPE html>
<html lang="en">
  <head> 
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Digimeter Meter Information</title>
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
        <?php include("./templates/metfo-top-nav.php")?>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          <!-- promotion flyer card -->
          <?php include("./templates/flyercard.php")?>

          <!-- add meter modal -->

          <?php include("./templates/payments-modal.php")?>

        

            <!-- summary info card -->
            <?php include("./templates/metfo-card.php")?>

            <!-- graph card -->
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Water Consumption Graph</h4>
                    <canvas id="myChart" style="height:250px"></canvas>
                  </div>
                </div>
              </div>
              
            </div> 

            <!-- graph card -->
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Water Consumption Cost Graph</h4>
                    <canvas id="myChart2" style="height:250px"></canvas>
                  </div>
                </div>
              </div>
              
            </div> 

          <!-- table contnent card file -->
          <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Meter Readings</h4>
                   
                    <div class="table-responsive">
                    <input type="hidden" id="customerID" value="<?php echo $_GET['customer_id']?>">
                    <input type="hidden" id="meterID" value="<?php echo $_GET['meter_id']?>">
                    <input type="hidden" id="page_no" value="0">
                      <table class="table">
                        <thead>
                          <tr>
                            
                          <th> Meter ID </th>
                            <th> Volume </th>
                            <th> Cost </th>
                            <th> Date</th>
                          </tr>
                        </thead>
                        <tbody id="readings">
                        

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
    <script src="js/payments.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            var backURL = "http://localhost/digi_rest/api/";

            var frontURL = "http://localhost/digifront/in/";
            var customer_id = document.getElementById("customerID").value;
            var meter_id = document.getElementById("meterID").value;
			      var page_no = document.getElementById("page_no").value;
            //load(meter_id,customer_id,page_no,backURL);
            get_meter_detail(customer_id,meter_id);
            get_meter_bal(meter_id);
            get_pay_sum(meter_id,customer_id);
            readings(backURL,page_no,meter_id);
            draw(meter_id,backURL);
            draw2(meter_id,backURL);
          

			$("#load_more").click(function() {
        load_more();
        
		
      });


      $("#borrow").click(function() {
        
        borrow(meter_id,backURL,frontURL)
		
      });
        });

		
        function get_meter_detail(customer_id,meter_id){
            var backURL = "http://localhost/digi_rest/api/";
            $.ajax(
                {
                    url: backURL+"web_get_alias_meters.php?customer_id="+customer_id+"&met_details&meter_id="+meter_id,
                    method: "GET",

                    success: function(data){
						
                      d = JSON.parse(data);
                      console.log(d[0][0]);
                  var content = document.getElementById("mname"); 
						      //content.innerHTML = ""; 
                  content.innerHTML = content.innerHTML + d[0][0].meter_alias;

                  var item = document.getElementById("mid"); 
						     // item.innerHTML = ""; 
                  item.innerHTML = item.innerHTML + d[0][0].meter_id;
                    }
                }
            );

        }

        function get_meter_bal(meter_id){
            var backURL = "http://localhost/digi_rest/api/";
            $.ajax(
                {
                    url: backURL+"web_get_alias_meters.php?meter_id="+meter_id+"&met-bal",
                    method: "GET",

                    success: function(data){
						
                      d = JSON.parse(data);
                      console.log(d[0].meter_account);
                  var bal = document.getElementById("bal"); 
						      //content.innerHTML = ""; 
                  bal.innerHTML = bal.innerHTML + d[0].meter_account;

                  
                    }
                }
            );

        }

        function get_pay_sum(meter_id,customer_id){
            var backURL = "http://localhost/digi_rest/api/";
            $.ajax(
                {
                    url: backURL+"web_payments.php?customer_id="+customer_id+"&pay_sum&meter_id="+meter_id,
                    method: "GET",

                    success: function(data){
						
                      d = JSON.parse(data);
                      console.log(data);
                  var tt = document.getElementById("sum"); 
						      //content.innerHTML = ""; 
                  tt.innerHTML = tt.innerHTML + d;

                  
                    }
                }
            );

        }


        function borrow(meter_id,backURL,frontURL){
            //var backURL = "http://localhost/digi_rest/api/";
            $.ajax(
                {
                    url: backURL+"web_get_alias_meters.php?meter_id="+meter_id+"&borrow",
                    method: "GET",

                    success: function(data){
                      
                      if(data == "Success"){
                         alert(data);
                         location.replace(frontURL+"index.php");
                     }
                         
                     else{
                         alert(data);
                         
                     }

                  
                    }
                }
            );

        }

       // function to automatically load data when page loads
        function readings(backURL,page_no,m_id){
            console.log('fire')
            $.ajax(
                {
                    url: backURL+"web_get_alias_meters.php?no="+page_no+"&get_readings&m_id="+m_id,
                    method: "GET",

                    success: function(data){
						if(data != 0){
                           // console.log(data);
							var content = document.getElementById("readings");  
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
            var m_id = document.getElementById("meterID").value;
            
            //var userid = document.getElementById("user").value;
            var page_no = document.getElementById("page_no").value;
            $.ajax(
                {
                    url: backURL+"web_get_alias_meters.php?no="+page_no+"&get_readings&m_id="+m_id,
                    method: "GET",

                    success: function(data){
						if(data != 0){
                           // console.log(data);
							var content = document.getElementById("readings");  
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
        // for plotting graph
      async function draw(meter_id,backURL){
            //var backURL = "http://localhost/digi_rest/api/";
            var myData = [];
          await  $.ajax(
                {
                    url: backURL+"web_get_alias_meters.php?meter_id="+meter_id+"&get_all_readings",
                    method: "GET",

                    success: function(data){
                      if(data != 0){
                        json_data = JSON.parse(data) 
                        console.log(json_data);
                        
                        myData = json_data;
                        var volume = myData.map( (x) => x.volume_consumed);
                        var reading_date = myData.map( (x) => x.entry_time);
                        
            var ctx = document.getElementById('myChart').getContext('2d');
              var myChart = new Chart(ctx, {
                  type: 'line',
                  data: {
                      labels: reading_date,
                      datasets: [{
                          label: 'Volume Consumed',
                          data: volume,
                        
                          fill: false,
                          borderColor: 'rgb(75, 192, 192)',
                          tension: 0.1
                      }]
                  },
                  options: {
                      scales: {
                          y: {
                              beginAtZero: true
                          }
                      }
                  }
              });

                      }
                      
                    }
                }
            );

           // v = ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'];
            //v.map((x) => console.log(x));

        }


         // for plotting graph
      async function draw2(meter_id,backURL){
            //var backURL = "http://localhost/digi_rest/api/";
            var myData = [];
          await  $.ajax(
                {
                    url: backURL+"web_get_alias_meters.php?meter_id="+meter_id+"&get_all_readings",
                    method: "GET",

                    success: function(data){
                      if(data != 0){
                        json_data = JSON.parse(data) 
                        console.log(json_data);
                        
                        myData = json_data;
                        var volume = myData.map( (x) => x.volume_consumed);
                        var cost = myData.map( (x) => x.cost);
                        
            var ctx = document.getElementById('myChart2').getContext('2d');
              var myChart = new Chart(ctx, {
                  type: 'bar',
                  data: {
                      labels: cost,
                      datasets: [{
                          label: 'Volume Consumed/Cost ',
                          data: volume,
                          backgroundColor: 'rgba(153, 102, 255, 0.2)',
                          borderColor:  'rgba(255, 99, 132, 1)',
                          borderWidth: 1
                      }]
                  },
                  options: {
                      scales: {
                          y: {
                              beginAtZero: true
                          }
                      }
                  }
              });

                      }
                      
                    }
                }
            );

           // v = ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'];
            //v.map((x) => console.log(x));

        }

</script>
    <!-- End custom js for this page -->
  </body>
</html>