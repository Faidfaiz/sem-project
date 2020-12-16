<?php
require_once '../../libs/database.php';
/**
 * 
 */
class PkgInfo
{
	//public $table = 'package';

	public $pkgpkgid;
	public $PkgName;
	public $PkgDesc;
	public $PkgPrice;
	public $PkgDate;

	/**
	* Static method All()
	* this method will retrieve all package data in database 
	* and will return the data as array of package object
	*/

	public static function All()	{

		$query = "SELECT * FROM package";

		try {
			// use static method run() from class DB 
	    	if ($stmt = DB::run($query)) { // this will run the build query

	    		// assign all of the data fetch from database to variable data
	    		// need to add fetchAll for pdo 
				// in order for pdo to retrieve the data from database
				$package = $stmt->fetchAll(PDO::FETCH_ASSOC); 

				// return the array of users filled with package array
				return $package;
			};
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}

	/**
	* Static method getById()
	* this method will retrieve 1 row of data from database
	* based on the pkgid passed to the method

	* @param int pkgid
	*/

	public static function getById($pkgid){

		$query = "SELECT * FROM package WHERE pkgid = :pkgid LIMIT 1";

		$param = [':pkgid' => $pkgid]; // the parameter that will be bind by pdo

		try {
			// use static method run() from class DB 
	    	if ($stmt = DB::Run($query, $param)) { // this will run the build query

				// need to use fetch to retrieve only 1 row of data
				// this will retrieve the row of data
				// that is associated to the passed pkgid
				$package = $stmt->fetch(PDO::FETCH_ASSOC); 
													    	 
				// return the package object
				return $package;
			};
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}

	public function save(){

		$query = "INSERT INTO package (`PkgName`, `PkgDesc`, `PkgPrice`, `PkgDate`) VALUES (:PkgName, :PkgDesc, :PkgPrice, :PkgDate)";

		$param = [ //the parameter that will be bind by pdo
			':PkgName' => $this->PkgName,
			':PkgDesc' => $this->PkgDesc,
			':PkgPrice' => $this->PkgPrice,
			':PkgDate' => $this->PkgDate
			];	

		try { 
			// use static method run() from class DB
	    	if ($stmt = DB::Run($query, $param)) { 

	    		// we dont use fetch() or fetchAll() here
		   		// because no data will be return when we
				// perform update operation

	    		return true;
	    	};
		} catch (PDOException $e) {
			return $e->getMessage();
		}

	}

	public function update(){

		$query = "UPDATE `package` SET `PkgName`=:PkgName, `PkgDesc`=:PkgDesc, `PkgPrice`=:PkgPrice, `PkgDate`=:PkgDate WHERE `pkgid`=:pkgid";

		$param = [ //the parameter that will be bind by pdo
			':PkgName' => $this->PkgName,
			':PkgDesc' => $this->PkgDesc,
			':PkgPrice' => $this->PkgPrice,
			':pkgid' => $this->pkgid,
			':PkgDate' => $this->PkgDate
			];	

		try {
			// use static method run() from class DB
	    	if ($stmt = DB::Run($query, $param)) { 

	    		// we dont use fetch() or fetchAll() here
				// because no data will be return when we
				// perform update operation								   
				                                   
	    		return true;
	    	};
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}

	public function delete(){

		$query = "DELETE FROM package WHERE pkgid=:pkgid";

		$param = [':pkgid' => $this->pkgid]; // the parameter that will be bind by pdo

		try {
			// use static method run() from class D
			if ($stmt = DB::Run($query, $param)) { 
				
				// we dont use fetch() or fetchAll() here
				// because no data will be return when we
				// perform delete operation
				                                   
				return true;
			}
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}
}
?>