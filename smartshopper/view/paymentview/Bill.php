<?php

require_once '../../controller/paymentcontroller/paymentcontroller.php';
$bookid = $_GET['id'];
	$Bill = new BillController();
	$Bill->bill_view($bookid);
    $move=$Bill->bill_view($bookid);

    foreach ($move as $row) {

    $Event_Title =$row['eventname'];
    $Package_Type=$row['packagename'];
    $Venue=$row['venue'];  
    $Begin_Date=$row['startdate'];
    $End_Date=$row['enddate'];
    $Begin_Time =$row['starttime'];
    $End_Time=$row['endtime'];
	$Payment_Amount=$row['price'];
    $bookingid=$row['bookingid'];

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
    <title>Payment Bill</title>

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
                            <p>Bill</p>
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
                                    <li class="active"><a href="../productview/product.php">Home</a></li>
                                    <li><a href="../loginview/IndexBookingInterface.php">Cart </a>
                                        <li><a href="../loginview/updateview.php">Edit Account </a>
                                    </li>
                                    <li><a href="../home.php">Log out</a></li>
                                    
                                </ul>

                                <!-- Cart Icon -->
                                <div class="cart-icon ml-5 mt-4 mt-lg-0">
                                    <a href="../loginview/IndexBookingInterface.php"><i class="icon_cart"></i></a>
                                </div>

                                <!-- Book Icon -->
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Bill Area Start -->
    <section id="bill-css">
            <div class="single-welcome-slide bg-img" style="background-image: url(../../libs/img/bg-img/16.png);">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">

                            <!-- Welcome Text -->
							<h3><b><a class="header-text">Payment Bill</a></b></h3><br>
                            <div class="col-12 col-md-9 col-lg-6">
                                <div class="welcome-text">
									<p class="paymentDetailsHeader"> PaymentDetails</p><hr class="line">
                                    <table align="center">
                                    <tr>
										<td>Booking ID</td><td>&nbsp;&nbsp;&nbsp;:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $bookid; ?></td>
										</tr>
										<tr>
										<td>Event Title</td><td>&nbsp;&nbsp;&nbsp;:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Event_Title; ?></td>
										</tr>
										<tr>
										<td>Package Type</td><td>&nbsp;&nbsp;&nbsp;:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Package_Type; ?></td>
										</tr>
										<tr>
										<td>Venue</td><td>&nbsp;&nbsp;&nbsp;:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Venue; ?></td>
										</tr>
										<tr>
										<td>Begin Date</td><td>&nbsp;&nbsp;&nbsp;:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Begin_Date; ?></td>
										</tr>
										<tr>
										<td>End Date</td><td>&nbsp;&nbsp;&nbsp;:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $End_Date; ?></td>
										</tr>
										<tr>
										<td>Begin Time</td><td>&nbsp;&nbsp;&nbsp;:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Begin_Time; ?></td>
										</tr>
										<tr>
										<td>End Time</td><td>&nbsp;&nbsp;&nbsp;:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $End_Time; ?></td>
										</tr>
										<tr>
										<td>Total Price</td><td>&nbsp;&nbsp;&nbsp;: </td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RM&nbsp;<?php echo $Payment_Amount; ?></td>
										</tr>
									
									</table>

									<img src="../../libs/img/payment/secure_payment.png" class="secure_payment_png">
								
									<div class="form-group">
										<a href="../Indexhome.php" class="btn btn-danger" name="cancelBTN" role="button">Cancel</a>
						               	<input class="btn btn-primary" name="proceedBTN" type="submit" value="Proceed" style="margin-left:315px;" onclick="location.href='PaymentPage.php?id=<?php echo $row['bookingid']; ?>'">
										
						            </div>
                                </div>
							</div>
                    </div>
                </div>
		</div>
    </section>
    <!-- Bill Area End -->
	
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