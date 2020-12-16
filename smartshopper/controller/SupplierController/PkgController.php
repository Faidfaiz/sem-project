<?php
require_once '../../model/SupplierData/PkgInfo.php';
/**
 * 
 */
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
?>