<?php


require_once '../../controller/logincontroller/AccountController.php';


$user1 = new AccessController();

$id=$_GET['id1'];

  $user1->block($id);

//$id1=$_GET['id1'];

 // $user1->delete($id1);


$id2=$_GET['id2'];

  $user1->approve($id2); 

?>


<!DOCTYPE html>
<html>
<head>
	<title>Successfully</title>  
</head>
<body>

    <?php 

   if ($id=$_GET['id'])
   {
          echo "<script type='text/javascript'>alert('The Account has been blocked successully?'')</script>";

          header("location: ApprovedAccounts.php");

   }
   else if ($id=$_GET['id1'])
   {
           echo "<script type='text/javascript'>alert('The Account has been rejected successully?'')</script>";

           header("location: ManageAccounts.php");
   }
   else
   {

           echo "<script type='text/javascript'>alert('The Account have been approved successully?'')</script>";

           header("location: ManageAccounts.php");

   }

    
     ?>
     

</body>
</html>