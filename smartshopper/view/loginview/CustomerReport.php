<?php
require_once '../../controller/logincontroller/AccountController.php';
//declaration of variables
$Name =array();
$Username= array();
$Email=array();
$ICno= array();
$Address=array();
$ContactNo= array();
$Approval_date = array();
$size = 0;

if (isset($_POST['submit']))
{
   //create object of ReportController class
	$Report = new ReportController();
        //call customer_view function
	$Report->customer_view();
    //get the returned value  from customer_view
    $mo=$Report->customer_view();

     foreach ($mo as $ro) {
//get the data from controller in put them in new varibles to display

    $Name[] =$ro['Name'];
    $Username[]=$ro['Username'];
    $Email[]=$ro['Email'];  
    $ICno[] =$ro['ICno'];
    $Address[]=$ro['Address'];
    $ContactNo[] =$ro['ContactNo'];
    $Approval_date[] =$ro['Approval_Date'];

}
$size = count($Name);

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
    <title>Smartshopper</title>

    <!-- Favicon -->
    <link rel="icon" href="../../libs/img/core-img/favicon1.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../../libs/css/style0.css">
    <link type="text/css" href="../../libs/css/payment.css" rel="stylesheet">
 
    <style >

    select {
        height: 39px;
        width: 300px;
          border-color: black;
            background: #fafafa;
        color: black;
        border-radius: 3px;


        }
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
        height: 39px;
      border-color: black;
      background: #fafafa;
      color: black;
    }
    @media print
{

.h * { visibility: hidden; }

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
                            <p>Customer Report</p>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="top-header-content text-right">
                            <p><i class="fa fa-clock-o" aria-hidden="true"></i><span id="date"></span> <span class="mx-2"></span> | <span class="mx-2"></span> <i class="fa fa-phone" aria-hidden="true"></i> Call us: (+12)-345-6789</p>
                            <a href="../home.php">Log Out</a>

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
                                <div class="book-now-btn ml-5 mt-4 mt-lg-0 ml-md-4" >
                                    <a href="../home.php" class="btn akame-btn" >Log Out</a>
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

    
     <main class="main">
        <br>
   <div id="print">
      <br><br>
       <center><h1> Customer Monthly Report</h1>

    <!--==========================
      Manage Accounts Section
    ============================-->
    <br><br>
    <section id="main" class="section-bg wow fadeInUp">  
     <form method="POST" class="h">


    <select name="month" >

	  <option value="01">January</option>
	  <option value="02">February</option>
	  <option value="03">March</option>
	  <option value="04">April</option>
	  <option value="05">May </option>
	  <option value="06">June</option>
	  <option value="07">July</option>
	  <option value="08">August</option>
	  <option value="09">September</option>
	  <option value="10">October</option>
	  <option value="11">November</option>
	  <option value="12">December</option>


	</select>  

	   <input type="submit" name="submit" class="btn" value="Generate">
	
</form> 
</center> 




  
<br><br>
<table>
  <tr>
      <tr>
        <th>Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>IC Number</th>
        <th>Contact Number</th>
        <th>Address</th>
        <th>Month</th>

      </tr>


<?php
//display data in view      

	for ($i=0; $i < $size; $i++) { 
{ 
 ?>
 
 <td> <?php echo $Name[$i] ?></td>
 <td> <?php echo $Username[$i] ?></td>
 <td> <?php echo $Email[$i] ?></td>
 <td> <?php echo $ICno[$i] ?></td>
 <td> <?php echo $ContactNo[$i] ?></td>
 <td> <?php echo $Address[$i] ?></td>   
 <td> <?php
   if (substr($Approval_date[$i], 5,2)==1)
   {
       echo "January";
 } 
 else if (substr($Approval_date[$i], 5,2)==2)
 {
        echo "February";
 }
  else if (substr($Approval_date[$i], 5,2)==3)
 {
        echo "March";
 }
  else if (substr($Approval_date[$i], 5,2)==4)
 {
        echo "April";
 }
  else if (substr($Approval_date[$i], 5,2)==5)
 {
        echo "May";
 }
  else if (substr($Approval_date[$i], 5,2)==6)
 {
        echo "June";
 }
  else if (substr($Approval_date[$i], 5,2)==7)
 {
        echo "July";
 }
  else if (substr($Approval_date[$i], 5,2)==8)
 {
        echo "August";
 }
 else if (substr($Approval_date[$i], 5,2)==9)
 {
        echo "September";
 }
 else if (substr($Approval_date[$i], 5,2)==10)
 {
        echo "October";
 }
 else if (substr($Approval_date[$i], 5,2)==11)
 {
        echo "November";
 }
 else
 {
    echo "December";
 }

 ?>
     
 </td>

<?php } ?>

      </tr>
     <?php
        }
     ?>
</table>



</div>
<br><br>
  <button name="print" onclick="Print('print')"  style="margin-left:1530px;" class="btn" >Print Report</button>

</section>

  </main>
  <br><br>

  <script type="text/javascript">
      function Print(divName){
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
  </script>

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

