<?php


require_once '../../controller/logincontroller/AccountController.php'; 


if (isset($_POST['submit'])) {
    $user = new AccountController();
    // call method dd

    $user->S_add();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../../libs/Style/css/style.css">
    
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Create Supplier account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="Name" id="Name" placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="Email" id="Email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="Username" id="Username" placeholder="Your Username"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="Password" id="Password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password"/>
                        </div>
                         <div class="form-group">
                            <input type="text" class="form-input" name="ICno" id="ICno" placeholder="Your IC Number"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="Address" id="Address" placeholder="Your Address"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="ContactNo" id="ContactNo" placeholder="Your Contact Number"/>
                        </div>

                           <div class="form-group">
                            <input type="text" class="form-input" name="Company" id="Company" placeholder="Your Company Number"/>
                        </div>
                           <div class="form-group">
                                Gender: <br>
                          <input type="radio" name="Gender" value="male" checked> Male
                          <input type="radio" name="Gender" value="female"> Female
                         </div>

					
						<br>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="Login.php" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>