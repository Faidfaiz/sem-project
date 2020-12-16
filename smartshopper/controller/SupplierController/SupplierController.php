<?php
require_once '../../model/SupplierData/SupplierInfo.php';
/**

* 

*/
class EqController{

	public function index($value=''){
		// assign the returned values(array of products object) to variable users
		$products = EqInfo::All(); // we use the static method All() that we
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

	public function get($ProductID){
		
		// get products object associate with $ProductID
		$products = EqInfo::getById($ProductID);

		// return products object with the products details
		return $products;
	}

	public function update($ProductID){

		// get products data associate with $ProductID
		$findUser = EqInfo::getById($ProductID);

		// update/set the attributes of the products
		$products = new EqInfo();

		$products->ProductID = $findUser['ProductID'];
		$products->ProductName = $_POST['ProductName'];
		$products->Qty = $_POST['Qty'];
		$products->ProductPrice = $_POST['ProductPrice'];
		$products->EqDate = date("Y-m-d");
		$products->ProductDescription = $_POST['ProductDescription'];

		// update the products data in database
		$products->update();

		// set message
		$message="The record has been updated";
        	echo "<script type='text/javascript'> 
        		alert('$message');
        		window.location.href=('../../view/SupplierInterface/indexEqInterface.php'); </script>";
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
class vieweqController {
	
	//display att
	
	
	public function index($value=''){
		// assign the returned values(array of equipment object) to variable users
		$booking = vieweqinfo::Alleq(); // we use the static method All() that we
							  		// created in equipment model to retrieve all 
							  		// data for equipment
					
									
		return $booking;
	}
	
	
      
               
    }

    class PkgController
{
	public function index($value=''){
		// assign the returned values(array of package object) to variable users
		$package = PkgInfo::All(); // we use the static method All() that we
							  		// created in package model to retrieve all 
							  		// data for package
		return $package;
	}

	public function add($value=''){

		// create new package object
		$package = new PkgInfo();

		// set the attributes of package object
		$package->PkgName = $_POST['PkgName'];
		$package->PkgType = $_POST['PkgType'];
		$package->PkgDesc = $_POST['PkgDesc'];
		$package->PkgPrice = $_POST['PkgPrice'];
		$package->PkgDate = date("Y-m-d");

		// save new packageinto database
		$package->save();

		// set message
		$message="The record has been successfully added";
                    echo "<script type='text/javascript'> 
                            alert('$message');
                            window.location.href=('../../view/SupplierInterface/indexPkgInterface.php'); </script>";
	}

	public function get($pkgid){
		
		// get package object associate with $pkgid
		$package = PkgInfo::getById($pkgid);

		// return package object with the package details
		return $package;
	}

	public function update($pkgid){

		// get package data associate with $pkgid
		$findUser = PkgInfo::getById($pkgid);

		// update/set the attributes of the package
		$package = new PkgInfo();

		$package->pkgid = $findUser['pkgid'];
		$package->PkgName = $_POST['PkgName'];
		$package->PkgDesc = $_POST['PkgDesc'];
		$package->PkgPrice = $_POST['PkgPrice'];
		$package->PkgDate = date("Y-m-d");

		// update the packaget data in database
		$package->update();

		// set message
		$message="The record has been updated";
        	echo "<script type='text/javascript'> 
        		alert('$message');
        		window.location.href=('../../view/SupplierInterface/indexPkgInterface.php'); </script>";
	}

	public function destroy($pkgid){

		// get package data associate with $pkgid
		$findUser = PkgInfo::getById($pkgid);

		// update/set the attributes of the packaget
		$package = new PkgInfo();

		$package->pkgid = $findUser['pkgid'];

		// delete the package
		$package->delete();

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


class Supdate{

	public function index($Username){
		// assign the returned values(array of products object) to variable users
		$products = UpdateInfo::All($Username); // we use the static method All() that we
							  		// created in products model to retrieve all 
							  		// data for products
		return $products;
	}

	public function add($value=''){

		// create new products object
		$products = new UpdateInfo();

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
		$products = UpdateInfo::getById($Username);

		// return products object with the products details
		return $products;
	}

	public function update($Username){

		// get products data associate with $ProductID
		$findUser = UpdateInfo::getById($Username);

		// update/set the attributes of the products
		$products = new UpdateInfo();

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
        		window.location.href=('../../view/SupplierInterface/indexEqInterface.php'); </script>";
	}

	public function destroy($ProductID){

		// get products data associate with $ProductID
		$findUser = UpdateInfo::getById($ProductID);

		// update/set the attributes of the products
		$products = new UpdateInfo();

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

?>