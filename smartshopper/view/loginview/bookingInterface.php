<?php
require_once '../../controller/CustomerController/bookingController.php';

if (isset($_POST['proceedBTN'])) {
	// create controller
	$booking = new bookingController();
	// call method dd
        $booking->booking();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Booking Event</title>

    <!-- Favicon -->
    <link rel="icon" href="../../libs/img/core-img/favicon1.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../../libs/css/style0.css">
	<link type="text/css" href="../../libs/css/payment.css" rel="stylesheet">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Top Header Area Start -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-5">
                        <div class="top-header-content">
                            <p>Welcome to Event Management System!</p>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="top-header-content text-right">
                            <p><i class="fa fa-clock-o" aria-hidden="true"></i><span id="date"></span> <span class="mx-2"></span> | <span class="mx-2"></span> <i class="fa fa-phone" aria-hidden="true"></i> Call us: (+12)-345-6789</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Header Area End -->
		
		
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="akameNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.html"><img src="../../libs/img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                             <div class="classynav">
                                <ul id="nav">
                                    <li class="active"><a href="./HomeInterface.php">Home</a></li>
                                    <li><a href="#">Services</a>
                                        <ul class="dropdown">
                                            <li><a href="./viewpackInterface.php">View Event Package</a></li>
											<li><a href="./viewquipInterface.php">View Equipment List</a></li>
                                            
                                            
                                        
                                        </ul>
                                    </li>
									
									<li><a href="#">Booking </a>
                                        <ul class="dropdown">
                                            <li><a href="./IndexBookingInterface.php">Booking List</a></li>
											<li><a href="./bookingInterface.php">Make new booking</a></li>
                                            
                                            
                                        
                                        </ul>
                                    </li>
									
									
                                                                      <li><a href="../CustomerInterface/index_feedback.php">Feedback</a></li>

                                    <li><a href="./quesviewInterface.php">Post Question</a></li>
                                    <li><a href="../WelcomePage.php">Log out</a></li>
                                    
                                </ul>

                                

                                <!-- Book Icon -->
                                <div class="book-now-btn ml-5 mt-4 mt-lg-0 ml-md-4">
                                    <a href="./bookingInterface.php" class="btn akame-btn">Book Now</a>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Empty Area Start -->
    <section id="bill-css">

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img" style="background-image: url(../../libs/img/bg-img/16.png);">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">

                            <!-- Welcome Text -->
							
							

<!DOCTYPE HTML>
<html>
<head>
    <title>Index Event Organizer</title>
     
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
         
    <!-- custom css -->
    <style>
    .m-r-1em{ margin-right:1em; }
    .m-b-1em{ margin-bottom:1em; }
    .m-l-1em{ margin-left:1em; }
    .mt0{ margin-top:0; }
    </style>
 
</head>
<body>
 
    <!-- container -->
    <div class="container">
  


<!DOCTYPE html>
<html>
<head>
    <title>Event Booking</title>
     
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
         
</head>
<body>
 
    <!-- container -->
    <div class="container">
  
        <div class="page-header">
            
        </div>
     
       
		
		<form class="form-signin" action="" method="POST">       
		<h3 class="form-signin-heading" align="center">EVENT BOOKING</h3>
		
            
			
			
                <tr>
                    <td>Event Name</td>
                    <td><input type='text' name='eventname' class='form-control' /></td>
                </tr>
                <tr>
                    <br><td>Package Type</td>
					<td><br><input type="radio" name="packagename" value="Western Package 1" checked>Western Package 1</input><br>
					    <input type="radio" name="packagename" value="Western Package 2">Western Package 2<br>
							
							<a href="./viewpackInterface.php"target="_blank">Package Menu List</a><br>
					</td>
				
					
                </tr>
                <tr>
                    <br><td>Start Date</td>
                    <td><input type='date' name='startdate' class='form-control' /></td>
                </tr>
				
				<tr>
                    <td>End Date</td>
                    <td><input type='date' name='enddate' class='form-control' /></td>
                </tr>
				
				<tr>
                    <td>Start Time</td>
                    <td><input type='time' name='starttime' class='form-control' /></td>
                </tr>
				
				<tr>
                    <td>End Time</td>
                    <td><input type='time' name='endtime' class='form-control' /></td>
                </tr>
				
                <tr>
                    <td>Venue</td>
                    <td><input type='text' name='venue' class='form-control' /></td>
                </tr>
				
				<tr>
                    <td>Price</td>
                    <td><input type='text' name='price' class='form-control' /></td>
                </tr>
				
				
				
                <tr>
				
                    <td></td>
                    <td>
						<input class="btn btn-success" type="submit" name="proceedBTN" value="OK" onclick="return  confirm('Are you sure to add booking?')">
						<input class="btn btn-danger" type="reset" name="cancelBTN" value="Cancel" onclick="return  confirm('Are you sure to cancel booking?')"></td>
                    </td>
                </tr>
           
        </form>
         
    </div> <!-- end .container -->
     
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</body>
</html>
         
    </div> <!-- end .container -->
     
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
<!-- confirm delete record will be here -->
 
</body>
</html>

							
                            <div class="col-12 col-md-9 col-lg-6">
                                
                            
                            
                        </div>
                    </div>
                </div>
            </div>

    </section>
    <!-- Empty Area End -->
	
    <!-- Footer Area Start -->
    <footer class="footer-area section-padding-80-0">
        <div class="container">
            <div class="row justify-content-between">

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-footer-widget mb-80">
                        <!-- Footer Logo -->
                        <a href="#" class="footer-logo"><img src="../../libs/img/core-img/logo.png" alt=""></a>

                        <p class="mb-30">We would love to serve you and let you enjoy your culinary experience. Excepteur sint occaecat cupidatat non proident.</p>

                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p> <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h4 class="widget-title">Opening times</h4>

                        <!-- Open Times -->
                        <div class="open-time">
                            <p>Monday: Friday: 10.00 - 23.00</p>
                            <p>Saturday: 10.00 - 19.00</p>
                        </div>

                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-md-4 col-xl-3">
                    <div class="single-footer-widget mb-80">

                        <!-- Widget Title -->
                        <h4 class="widget-title">Contact Us</h4>

                        <!-- Contact Address -->
                        <div class="contact-address">
                            <p>Tel: (+12) 345 678 910</p>
                            <p>E-mail: Hello.colorlib@gmail.com</p>
                            <p>Address: Iris Watson, P.O. Box 283 8562 Fusce Rd, NY</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- All JS Files -->
    <!-- jQuery -->
    <script src="../../libs/js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="../../libs/js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../libs/js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="../../libs/js/akame.bundle.js"></script>
    <!-- Active -->
    <script src="../../libs/js/default-assets/active.js"></script>
	<script type="text/javascript" src="../../libs/js/payment.js"></script>
	
	</body>

</html>