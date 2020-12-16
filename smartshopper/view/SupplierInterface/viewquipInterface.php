<?php

require_once '../../controller/SupplierController/SupplierController.php';

$data = new vieweqcontroller();
$result = $data->index();

if(isset($_POST['delete'])) {
    $data->destroy($_POST['delete']);
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
    <title>View products sales</title>

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
                            <p>Welcome to Smartshopper!</p>
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
                        <a class="nav-brand" href="SupplierHomeInterface.html"><img src="../../libs/img/core-img/llogo.png" style="width:100px" alt=""></a>

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
                                    <li><a href="SupplierHomeInterface.html">Home</a></li>
                                    <li  class="active"><a href="#">Services</a>
                                        <ul class="dropdown">
                                            <li><a href="indexEqInterface.php">- Add/view products</a></li>
                                            <li><a href="viewquipInterface.php">- View products sales</a></li>
                                        </ul>
                                    </li>
                                     <li><a href="../loginview/S_updateview.php">Edit Account</a></li>
                                   <li><a href="../home.php">Log out</a></li>
                                    
                                </ul>
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
							
							



<!DOCTYPE html>
<html>
<head>
    
     
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
         
</head>
<body>
 
    <!-- container -->
     <div class="container">
  
        <div class="page-header">
            <h1>products sales</h1>
        </div>
		
		<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body>
  <main>
    <section class="container" style="padding: 50px">
      
      <div class="row">
        <div class="col-12">

            <div class="card-body table-responsive p-0">
              <table class="table table-hover">
                <thead>
                  <tr>

                    <th><b>ProductID</b></th>
                    <th><b>Product Name</b></th>
					<th><b>Quantity</b></th>
                    <th><b>Product Price</b></th>
                    <th><b>Product Date</b></th>
                    <th><b>Product Description</b></th>
                    <th><b>Total Sales Price</b></th>
                   

                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($result as $res) { ?>
                  <tr>
                    <tr>

                      <td><?php echo $res['ProductID']; ?></td>
                      <td><?php echo $res['ProductName']; ?></td>
                      <td><?php echo $res['Qty']; ?></td>
					  <td><?php echo $res['ProductPrice']; ?></td>
                      <td><?php echo $res['EqDate']; ?></td>
                      <td><?php echo $res['ProductDescription']; ?></td>

                      

                    </tr>
                  </tr><?php } ?>
                </tbody>

              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>
</html>
		
             
         
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
 
</body>
</html>
         
     
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
		</div>
    </section>
    <!-- Empty Area End -->
	
   

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