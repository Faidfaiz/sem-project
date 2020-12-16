<?php

require_once '../../libs/database.php';

/**
* Model class for products
*/
class EqInfo{

	public $table = 'products';

	public $ProductID;
	public $ProductName;
	public $Qty;
	public $ProductPrice;
	public $EqDate;
	public $ProductDescription;

	/**
	* Static method All()
	* this method will retrieve all products data in database 
	* and will return the data as array of products object
	*/

	public static function All()	{

		$query = "SELECT * FROM products";

		try {
			// use static method run() from class DB 
	    	if ($stmt = DB::run($query)) { // this will run the build query

	    		// assign all of the data fetch from database to variable data
	    		// need to add fetchAll for pdo 
				// in order for pdo to retrieve the data from database
				$products = $stmt->fetchAll(PDO::FETCH_ASSOC); 

				// return the array of users filled with products array
				return $products;
			};
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}

	/**
	* Static method getById()
	* this method will retrieve 1 row of data from database
	* based on the ProductID passed to the method

	* @param int ProductID
	*/

	public static function getById($ProductID){

		$query = "SELECT * FROM products WHERE ProductID = :ProductID LIMIT 1";

		$param = [':ProductID' => $ProductID]; // the parameter that will be bind by pdo

		try {
			// use static method run() from class DB 
	    	if ($stmt = DB::Run($query, $param)) { // this will run the build query

				// need to use fetch to retrieve only 1 row of data
				// this will retrieve the row of data
				// that is associated to the passed ProductID
				$products = $stmt->fetch(PDO::FETCH_ASSOC); 
													    	 
				// return the products object
				return $products;
			};
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}

	public function save(){

		$query = "INSERT INTO products (`ProductName`, `Qty`, `ProductPrice`, `EqDate`,`ProductDescription`) VALUES (:ProductName, :Qty, :ProductPrice, :EqDate, :ProductDescription)";

		$param = [ //the parameter that will be bind by pdo
			':ProductName' => $this->ProductName,
			':Qty' => $this->Qty,
			':ProductPrice' => $this->ProductPrice,
			':ProductDescription' => $this->ProductDescription,
			':EqDate' => $this->EqDate
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

		$query = "UPDATE `products` SET `ProductName`=:ProductName, `Qty`=:Qty, `ProductPrice`=:ProductPrice, `EqDate`=:EqDate,               `ProductDescription`=:ProductDescription WHERE `ProductID`=:ProductID";

		$param = [ //the parameter that will be bind by pdo
			':ProductName' => $this->ProductName,
			':Qty' => $this->Qty,
			':ProductPrice' => $this->ProductPrice,
			':EqDate' => $this->EqDate,
			':ProductDescription' => $this->ProductDescription,
            ':ProductID' => $this->ProductID
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

		$query = "DELETE FROM $this->table WHERE ProductID=:ProductID";

		$param = [':ProductID' => $this->ProductID]; // the parameter that will be bind by pdo

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

class vieweqInfo
{
	public $table = 'eventbook';
	
	public $value,$eventname,$packagename,$startdate,$enddate,$starttime,$endtime,$venue,$price,$eqname,$qty,$eqprice;
        
        public function booking()
	{
		$query="INSERT INTO eventbook (eventname,packagename,startdate,enddate,starttime,endtime,venue,price) 
		VALUES (:eventname,:packagename,:startdate,:enddate,:starttime,:endtime,:venue,:price)";
                $param=[ ':eventname' => $this->eventname, ':packagename' => $this->packagename, ':startdate' => $this->startdate, ':enddate' => $this->enddate, ':starttime' => $this->starttime, ':endtime' => $this->endtime, ':venue' => $this->venue, ':price' => $this->price ];
                $stmt = DB::RUN($query, $param);
               
	}
	
	public static function Alleq()	{

		$query = "SELECT * FROM products";

		try {
			// use static method run() from class DB 
	    	if ($stmt = DB::run($query)) { // this will run the build query

	    		// assign all of the data fetch from database to variable data
	    		// need to add fetchAll for pdo 
				// in order for pdo to retrieve the data from database
				$booking = $stmt->fetchAll(PDO::FETCH_ASSOC); 

				// return the array of users filled with equipment array
				return $booking;
			};
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}
	
	
        
        
}




class UpdateInfo{

	public $table = 'register';

	
	public $Username;
	public $Password;
	public $Name;
	public $ICno;
	public $Address;
	public $ContactNo;
	public $Email;
	public $Company;
	public $Gender;

	/**
	* Static method All()
	* this method will retrieve all register data in database 
	* and will return the data as array of register object
	*/

	public function All($Username)	{

		$query = "SELECT * FROM register WHERE Username = '$Username'";

		try {
			// use static method run() from class DB 
	    	if ($stmt = DB::run($query)) { // this will run the build query

	    		// assign all of the data fetch from database to variable data
	    		// need to add fetchAll for pdo 
				// in order for pdo to retrieve the data from database
				$products = $stmt->fetchAll(PDO::FETCH_ASSOC); 

				// return the array of users filled with products array
				return $products;
			};
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}

	/**
	* Static method getById()
	* this method will retrieve 1 row of data from database
	* based on the ProductID passed to the method

	* @param int ProductID
	*/

	public static function getById($Username){

		$query = "SELECT * FROM register WHERE Username = :Username LIMIT 1";

		$param = [':Username' => $Username]; // the parameter that will be bind by pdo

		try {
			// use static method run() from class DB 
	    	if ($stmt = DB::Run($query, $param)) { // this will run the build query

				// need to use fetch to retrieve only 1 row of data
				// this will retrieve the row of data
				// that is associated to the passed ProductID
				$products = $stmt->fetch(PDO::FETCH_ASSOC); 
													    	 
				// return the products object
				return $products;
			};
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}

	public function save(){

		$query = "INSERT INTO products (`ProductName`, `Qty`, `ProductPrice`, `EqDate`,`ProductDescription`) VALUES (:ProductName, :Qty, :ProductPrice, :EqDate, :ProductDescription)";

		$param = [ //the parameter that will be bind by pdo
			':ProductName' => $this->ProductName,
			':Qty' => $this->Qty,
			':ProductPrice' => $this->ProductPrice,
			':ProductDescription' => $this->ProductDescription,
			':EqDate' => $this->EqDate
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
		
		$query = "UPDATE `register` SET `Username`=:Username, `Password`=:Password, `Name`=:Name, `ICno`=:ICno,`Address`=:Address,`ContactNo`=:ContactNo,`Email`=:Email,`Company`=:Company,`Gender`=:Gender WHERE `Username`=:Username";

		$param = [ //the parameter that will be bind by pdo
			':Username' => $this->Username,
			':Password' => $this->Password,
			':Name' => $this->Name,
			':ICno' => $this->ICno,
			':Address' => $this->Address,
			':ContactNo' => $this->ContactNo,
			':Email' => $this->Email,
			':Company' => $this->Company,
            ':Gender' => $this->Gender
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

		$query = "DELETE FROM $this->table WHERE ProductID=:ProductID";

		$param = [':ProductID' => $this->ProductID]; // the parameter that will be bind by pdo

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