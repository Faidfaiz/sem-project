<?php

require_once '../../model/logindata/AccountInfo.php';
/**
 * 
 */
class AccountController
{

	public function view()
	{
		//call static method All from user class
		$user = account::validate();

		
		 foreach ($user as $tmp) 
            { 
          
		if($tmp['Password'] == $_POST['Password']  &&  $tmp['Username'] == $_POST['Username'] && $_POST['Account_Type']=="Customer" && $tmp['Account_Type']=="Customer" && $tmp['Approval_Status']=="APPROVE")
		{

					header("Location: http://localhost/smartshopper/view/productview/product.php");	
				
		}
		else if($tmp['Password'] == $_POST['Password']  &&  $tmp['Username'] == $_POST['Username'] && $_POST['Account_Type']=="Supplier" && $tmp['Account_Type']=="Supplier" && $tmp['Approval_Status']=="APPROVE")
		{

					header("Location: http://localhost/smartshopper/view/SupplierInterface/indexEqInterface.php");	
			
		}
		else if($tmp['Password'] == $_POST['Password']  &&  $tmp['Username'] == $_POST['Username'] && $tmp['Account_Type']=="Admin")
		{

			
					header("Location: http://localhost/smartshopper/view/loginview/AdminHome.php");
			
		}
		else
		{

    		$error = "<script type='text/javascript'>alert('the username or password is wrong, do it again')</script>";		

		}
         
        } 

        echo $error;
		return $user;
	}



	public function forget()
	{
		$user1 = new account();
		
		
		$user1->Password = $_POST['Password'];
		$user1->Username = $_POST['Username'];
		
		$user1->update();
		
		//Session::setFlash(['New record succesfully added'], 'success');
	}


	public function add()
	{
		$user1 = new account();
		
		$user1->Username = $_POST['Username'];
		$user1->Password = $_POST['Password'];
		$user1->Name = $_POST['Name'];
		$user1->Email = $_POST['Email'];
		$user1->Address = $_POST['Address'];
		$user1->ContactNo = $_POST['ContactNo'];
		$user1->ICno = $_POST['ICno'];
		$user1->Gender = $_POST['Gender'];
		$user1->Approval_Status ="PENDING";
		$user1->Approval_Date =date("Y-m-d");
		$user1->Account_Type ="Customer";

		$user1->save();
		echo "<script>window.open('Login.php','_self')</script>";

		
	}

		public function S_add()
	{
		$user1 = new account();
		
		$user1->Username = $_POST['Username'];
		$user1->Password = $_POST['Password'];
		$user1->Name = $_POST['Name'];
		$user1->Email = $_POST['Email'];
		$user1->Address = $_POST['Address'];
		$user1->ContactNo = $_POST['ContactNo'];
		$user1->ICno = $_POST['ICno'];
		$user1->Gender = $_POST['Gender'];
		$user1->Approval_Status ="PENDING";
		$user1->Approval_Date =date("Y-m-d");
		$user1->Account_Type ="Supplier";
		$user1->Company =$_POST['Company'];

		$user1->S_save();
					echo "<script>window.open('Login.php','_self')</script>";

		
	}


}

class AccessController
{

public function view()
	{
		//get the returned value  from model_show function  in Access class
		$dis = Access::model_show();
		return $dis;
	}



public function approve_view()
	{
		//get the returned value  from approve_show function  in Access class
		$dis = Access::approve_show();
		return $dis;
	}



	public function block_view()
	{
//get the returned value  from block_show function  in Access class
		$dis = Access::block_show();
		return $dis;
	}



   public function delete($username)
	{

		//create object of Access class
		$delete = new Access();
		//call delete_model function
		$delete->delete_model($username);

	}



	public function Block($username)
	{

		//create object of Access class
		$block = new Access();
				//call block_model function
		$block->block_model($username);

	}



	public function approve($username)
	{
	   //create object of Access class

		$approve = new Access();
		//call approve_model function
		$approve->approve_model($username);

	}




	


}

class ReportController
{
	
	//to get all customer information from report class (model)
	public function customer_view()
	{
		$Report = new Report();
		$month = $_POST['month'];
		
	
		$viewReport = $Report->customer_model($month);
	
		return $viewReport;
	} 


	//to get all supplier information from report class (model)
	public function supplier_view()
	{
		$Report = new Report();
		$month = $_POST['month'];
		
		$viewReport = $Report->supplier_model($month);

	
		return $viewReport;
	} 

	//to get all event information from report class (model)
		public function event_view()
	{
		$Report = new Report();
		$month = $_POST['month'];
		
		$viewReport = $Report->event_model($month);

	
		return $viewReport;
	} 


	//to get all equipment information from report class (model)
		public function equipment_view()
	{
		$Report = new Report();
		$month = $_POST['month'];
		
		$viewReport = $Report->equipment_model($month);

	
		return $viewReport;
	}


	//to get income from report class (model)
	public function income_view()
	{
		$Report = new Report();
		$month = $_POST['month'];
		

		$viewReport = $Report->income_model($month);


		return $viewReport;
	} 

}

class EqController{

	public function index($Username){
		// assign the returned values(array of products object) to variable users
		$products = EqInfo::All($Username); // we use the static method All() that we
							  		// created in products model to retrieve all 
							  		// data for products
		return $products;
	}

	public function add($value=''){

		// create new products object
		$products = new EqInfo();

		// set the attributes of products object
		$products->ProductName = $_POST['ProductName'];
		$products->Qty = $_POST['Qty'];
		$products->ProductPrice = $_POST['ProductPrice'];
		$products->EqDate = date("Y-m-d");
		$products->ProductDescription = $_POST['ProductDescription'];

		// save new products into database
		$products->save();

		// set message
		$message="The record has been successfully added";
                    echo "<script type='text/javascript'> 
                            alert('$message');
                            window.location.href=('../../view/SupplierInterface/indexEqInterface.php');
                        </script>";
	}

	public function get($Username){
		
		// get products object associate with $ProductID
		$products = EqInfo::getById($Username);

		// return products object with the products details
		return $products;
	}

	public function update($Username){

		// get products data associate with $ProductID
		$findUser = EqInfo::getById($Username);

		// update/set the attributes of the products
		$products = new EqInfo();

		$products->Username = $findUser['Username'];
		$products->Password = $_POST['Password'];
		$products->Name = $_POST['Name'];
		$products->ICno = $_POST['ICno'];
		$products->Address = $_POST['Address'];
		$products->ContactNo = $_POST['ContactNo'];
		$products->Email = $_POST['Email'];
		$products->Company = $_POST['Company'];
		$products->Gender = $_POST['Gender'];
		// update the products data in database
		$products->update();

		// set message
		$message="The record has been updated";
        	echo "<script type='text/javascript'> 
        		alert('$message');
        		window.location.href=('../../view/productview/product.php'); </script>";
	}

	public function destroy($ProductID){

		// get products data associate with $ProductID
		$findUser = EqInfo::getById($ProductID);

		// update/set the attributes of the products
		$products = new EqInfo();

		$products->ProductID = $findUser['ProductID'];

		// delete the products
		$products->delete();

		// set message
		$message="The record has been successfully deleted";
                    echo "<script type='text/javascript'> 
                            alert('$message');
                            window.location.href=('../../view/SupplierInterface/indexEqInterface.php');
                        </script>";
	}

	public function redirect($url){
        header('Location: '.$url);
        exit();
    }
}




