<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <h2>Get Started</h2>
            <form method="POST" id="signup-form" class="signup-form" enctype="multipart/form-data">
                <h3>
                    About
                </h3>
                
                <fieldset>
                    <div class="form-row">
                        <div class="form-file">
                        <p class="sign-up text-center">Already have an Account?<a href="login.php"> Login</a></p>
                        </div>
                        <div class="form-group-flex">
                            <div class="form-group">
                                <input type="text" name="first_name" id="first_name" placeholder="First Name" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="last_name" id="last_name" placeholder="Last Name" />
                            </div>
                            <div class="form-group">
                                <input type="number" maxlength="10" name="phone_no" id="phone_no" placeholder="0541234567" />
                            </div>
                        </div>
                        
                    </div>
                </fieldset>

                <h3>
                    Account
                </h3>
                <fieldset>
                    <div class="form-row">
                        <div class="form-file">
                            
                        </div>
                        <div class="form-group-flex">
                            <div class="form-group">
                                <input type="email" name="email" id="email" placeholder="Email" />
                            </div>

                            <div class="form-group">
                                <input type="password" name="pass1" id="pass1" placeholder="password"/>
                            </div>
                            <div class="form-group">
                                <input type="password" name="pass2" id="pass2" placeholder="confirm password"/>
                            </div>
                           
                        </div>
                    </div>
                </fieldset>

                <h3>
                    Address
                </h3>
                <fieldset>
                    <div class="form-row form-input-flex">
                        <div class="form-input">
                            <input type="text" name="street_name" id="street_name" placeholder="Street or Area" />
                        </div>
                        <div class="form-input">
                            <input type="text" name="city" id="city" placeholder="City" />
                        </div>
                    </div>
                    <div class="form-row form-input-flex">
                        <div class="form-input">
                            <input type="text" name="region" id="region" placeholder="Region" />
                        </div>
                        <div class="form-input">
                            <input type="text" name="digital_addr" id="digital_addr" placeholder="Digital Address" />
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="vendor/jquery-steps/jquery.steps.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>