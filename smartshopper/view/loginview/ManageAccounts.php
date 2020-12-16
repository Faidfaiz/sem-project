<?php


require_once '../../controller/logincontroller/AccountController.php';
//declaration of variables

$Name =array();
$Username= array();
$Email=array();
$Approval_Date=array();
$Account_Type=array();

//get the returned value from view
$show = AccessController::view();
foreach ($show as $row) {
//get the data controller in put them in new varibles to display
$Name[] =$row['Name'];
$Username[]=$row['Username'];
$Email[] =$row['Email'];
$Approval_Date[]=$row['Approval_Date'];
$Account_Type[]=$row['Account_Type'];
}
$length = count($Name);




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Smartshopper</title>

    <!-- Favicon -->
    <link rel="icon" href="../../libs/img/core-img/favicon1.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../../libs/css/style0.css">
	<link type="text/css" href="../../libs/css/payment.css" rel="stylesheet">


    <style >
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;

}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 20px;
}

tr:nth-child(even) {
  background-color: #dddddd;

}
header:nth-child(even) {
  background-color: #000000;
}
.btn {
  border-color: black;
  background: #fafafa;
  color: black;
}


</style>


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
                            <p>Welcome to SmartShopper System!</p>
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
                        <a class="nav-brand" href=""><img src="../../libs/img/core-img/llogo.png" style="width:100px" alt=""></a>
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
                                    <li class="active"><a href="AdminHome.php">Home</a></li>
                                    <li><a href="ManageAccounts.php">Manage Accounts</a>
                                    <li><a>Generate Report</a>
                                        <ul class="dropdown">
                                            <li><a href="SupplierReport.php">Supplier Report</a></li>
                                            <li><a href="CustomerReport.php">Customer Report</a></li>
                                         </ul>   
                                
                                </ul>

                                <!-- Cart Icon -->
                            
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

    
     <main id="main">

    <!--==========================
      Manage Accounts Section
    ============================-->
    <br><br>
    <section id="main" class="section-bg wow fadeInUp">  
    <button  class="btn" type="button" disabled style="background-color:grey;">User Pending Accounts</button>
    <a href="ApprovedAccounts.php"><button  class="btn" type="button"> Approved Accounts</button></a>
    <a href="BlockedAccounts.php"><button class="btn" type="button">Blocked Accounts</button></a>
   <br><br>  
   <form method="post"> 
<table>
  <tr>
 
      <tr>
        <th>Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Registeration Date</th>
        <th>Account Type</th>
        <th>Action</th>
      </tr>

<?php
//display data in view      
for ($i=0; $i < $length; $i++) { 
     # code...
  
 ?>
      <tr>        
 <td> <?php echo $Name[$i] ?></td>
 <td> <?php echo $Username[$i] ?></td>
 <td> <?php echo $Email[$i] ?></td>
  <td> <?php echo $Approval_Date[$i] ?></td>
    <td> <?php echo $Account_Type[$i] ?></td>

<td>
    <?php echo "<a href=Successfully.php?id1=",urlencode($Username[$i]),">" ?> <button  class="btn" type="button">Reject</button> <?php "</a>" ?>

    <?php echo "<a href=Successfully.php?id2=",urlencode($Username[$i]),">" ?> <button  class="btn" type="button">Approve</button> <?php "</a>" ?>

</td> 

      </tr>
     <?php
        }
     ?>
</table>
</form>


      </section><!-- #contact -->

  </main>
  <br><br>

  <hr>

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

