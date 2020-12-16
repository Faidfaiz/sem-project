<?php

require_once '../../controller/paymentcontroller/paymentcontroller.php';
	
$bookid = $_GET['id'];
	$PaymentPage = new PaymentPageController();
	$PaymentPage->paymentpage_view($bookid);
    $move=$PaymentPage->paymentpage_view($bookid);

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

if (isset($_POST['submit'])) {
	//create controller
	$value = new PaymentPageController();

	//call method add
	$value->Paymentcheck();
}

$PayNow= new PaymentPageController(); 
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Payment Page</title>

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
                            <p>Welcome to Smartshopper</p>
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
	
    <!-- Payment Area Start -->
	<section id="payment-css">
            <div class="single-welcome-slide bg-img" style="background-image: url(../../libs/img/bg-img/16.png);">
		<div class="method">
		<h3><b><a class="header-text">Select Payment Method</a></b></h3>
			<table border='0'>
			<tr>
				<td  valign="top">
				<div class="tab">
					<button class="tablinks" onclick="paymentMethod(event, 'creditCard')"><img src="../../libs/img/payment/creditCard.png" width=51><br>Credit/Debit Card</button>
				</div>

				<div id="creditCard" class="tabcontent">
				<form method="POST">
					<p>
						<label for="cardNum">Card number</label><br>
						<input name="cardNum" type="text" maxlength="16" class="cardBox" required="required">
					</p><br>
					
					<p>
						<label for="cardName">Name on card</label><br>
						<input name="cardName" type="text" class="cardBox" required="required">
					</p><br>
					
					<p>
						<span style="margin-right: 46px;"><label for="expiryMM">Expiration Month</label></span>
						<span style="margin-right: 67px;"><label for="expiryYY">Expiration Year</label></span>
						<label for="cvv">CVV</label><br>
						
						<select name="cardEXPMM" class="EXPBox" required="required"> 
							<option selected="selected" value="">MM</option> 
							<option value="01">Jan (01)</option> 
							<option value="02">Feb (02)</option> 
							<option value="03">Mar (03)</option> 
							<option value="04">Apr (04)</option> 
							<option value="05">May (05)</option> 
							<option value="06">Jun (06)</option> 
							<option value="07">Jul (07)</option> 
							<option value="08">Aug (08)</option> 
							<option value="09">Sep (09)</option> 
							<option value="10">Oct (10)</option> 
							<option value="11">Nov (11)</option> 
							<option value="12">Dec (12)</option> 
						</select>				
						<select name="cardEXPYY" class="EXPBox" required="required"> 
							<option selected="selected" value="">YYYY</option> 
							<option value="2017">2017</option> 
							<option value="2018">2018</option> 
							<option value="2019">2019</option> 
							<option value="2020">2020</option> 
							<option value="2021">2021</option> 
							<option value="2022">2022</option> 
							<option value="2023">2023</option> 
							<option value="2024">2024</option> 
							<option value="2025">2025</option> 
							<option value="2026">2026</option> 
							<option value="2027">2027</option> 
							<option value="2028">2028</option> 
							<option value="2029">2029</option> 
							<option value="2030">2030</option> 
							<option value="2031">2031</option> 
							<option value="2032">2032</option> 
							<option value="2033">2033</option> 
							<option value="2034">2034</option> 
							<option value="2035">2035</option> 
							<option value="2036">2036</option> 
							<option value="2037">2037</option> 
							<option value="2038">2038</option> 
							<option value="2039">2039</option> 
							<option value="2040">2040</option> 
						</select>
						<input name="cvv" class="EXPBox" maxlength="3" type="password" required="required">
					</p>
					<br><br>
					
					<input class="btn btn-primary" style="margin-left:315px;" type="submit"  border="0" name="submit" alt="CreditCard"><br>
					
				</form>
				</div>
				
				</td>
				
			<!--Right Side summary-->
			<div class="summary_container">
				<div class="summary-text">Summary</div>
				<div id="time" class="time-css" name="payTime"></div>
				<form><br><br><br>
					Booking ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
					<div class="div2"><?php echo $bookid; ?></div><br><br>
					Event Title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
					<div class="div2"><?php echo $Event_Title; ?></div><br><br>
					Event Package&nbsp;&nbsp;&nbsp;&nbsp;: 
					<div class="div2"><?php echo $Package_Type; ?></div><br><br>
					Event Venue&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
					<div class="div2"><?php echo $Venue; ?></div><br><br>
					Start Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
					<div class="div2"><?php echo $Begin_Date; ?></div><br><br>
					End Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
					<div class="div2"><?php echo $End_Date; ?></div><br><br>
					Start Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
					<div class="div2"><?php echo $Begin_Time; ?></div><br><br>
					End Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
					<div class="div2"><?php echo $End_Time; ?></div><br><br>
					<hr color="black">
					Total Amount <div class="div2">RM <?php echo $Payment_Amount; ?></div><br>
				</form>
				</div>
			</tr>
			</table>
			
			<br><button name="backBTN" class="btn btn-danger" onclick="location.href='Bill.php?id=<?php echo $row['bookingid']; ?>'">Back</button>
		</div>
		</div>
	</section>      
    <!-- Payment Area End -->

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
	<script src="https://www.paypalobjects.com/api/checkout.js" async></script>

	</body>
	
</html>