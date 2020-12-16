 <?php

require_once '../../libs/database.php';
/**
 * 
 */



class account
{
	public $table = 'register';
	
	public $Name;
	public $Email;
	public $Username;
	public $Password;
	public $Address;
	public $Account_Type;
	public $ContactNo;
	public $ICno;
	public $Approval_Status;
	public $Approval_Date;
	public $Company;
	public $Gender;

	



	public function validate()
	{
		$query = "SELECT Username, Password, Account_Type, Approval_Status FROM register";
			
		$user = DB::Run($query)->fetchAll(PDO::FETCH_ASSOC);
		
		return $user;
	}	


	public function save()
	{
 		

		$query = "INSERT INTO register (Name, Password, Username, Email, Address, ContactNo, ICno, Approval_Status, Approval_Date, Account_Type, Gender) VALUES (:Name, :Password, :Username, :Email, :Address, :ContactNo, :ICno, :Approval_Status, :Approval_Date, :Account_Type, :Gender)";

		$param = [

				':Name' => $this->Name,
				':Password'	 => $this->Password,
				':Username' => $this->Username,
				':Email' => $this->Email,
				':Address' => $this->Address,
				':ContactNo' => $this->ContactNo,
				':ICno' => $this->ICno,
				':Approval_Status' => $this->Approval_Status,
				':Approval_Date' => $this->Approval_Date,
				':Account_Type' => $this->Account_Type,
				':Gender' => $this->Gender,


				
			];

			$stmt = DB::RUN($query, $param);
	

			if ($stmt) {
    echo "<script type='text/javascript'>alert('your account has been created successfully!')</script>";
						}
			else
						{
    	echo "<script type='text/javascript'>alert('failed!')</script>";
						}
	}



	public function S_save()
	{
 		

		$query = "INSERT INTO register (Name, Password, Username, Email, Address, ContactNo, ICno, Approval_Status, Approval_Date, Account_Type, Company, Gender) VALUES (:Name, :Password, :Username, :Email, :Address, :ContactNo, :ICno, :Approval_Status, :Approval_Date, :Account_Type, :Company, :Gender)";

		$param = [

				':Name' => $this->Name,
				':Password'	 => $this->Password,
				':Username' => $this->Username,
				':Email' => $this->Email,
				':Address' => $this->Address,
				':ContactNo' => $this->ContactNo,
				':ICno' => $this->ICno,
				':Approval_Status' => $this->Approval_Status,
				':Approval_Date' => $this->Approval_Date,
				':Account_Type' => $this->Account_Type,
				':Company' => $this->Company,
				':Gender' => $this->Gender,



				
			];

			$stmt = DB::RUN($query, $param);

			if ($stmt) {
    echo "<script type='text/javascript'>alert('your account has been created successfully!')</script>";


						}
			else
						{
    	echo "<script type='text/javascript'>alert('failed!')</script>";
						}
	}



public function update()
	{
		$query = "UPDATE register SET Password = :Password WHERE Username = :Username";

		$param = [
				':Password' => $this->Password,
				':Username' => $this->Username,
			];

			$stmt = DB::RUN($query, $param);

			if ($stmt) {
    echo "<script type='text/javascript'>alert('your password has been change successfully!')</script>";
    					
						}
			else
						{
    	echo "<script type='text/javascript'>alert('failed!')</script>";
						}
	}
}

class Access
{

   	public $table = 'register';
 
//to retrieve all accounts that in pending status from database
	public function model_show()
	{
		$query = "SELECT * FROM register WHERE Approval_status = 'PENDING'";
			
		$dis = DB::Run($query)->fetchAll(PDO::FETCH_ASSOC);
		
		return $dis;
	}


//to retrieve all accounts that  approved from database
	public function approve_show()
	{
		$query = "SELECT * FROM register WHERE Approval_status = 'APPROVE'";
			
		$dis = DB::Run($query)->fetchAll(PDO::FETCH_ASSOC);
		
		return $dis;
	}	

//to retrieve all accounts that blocked from database
	public function block_show()
	{
		$query = "SELECT * FROM register WHERE Approval_status = 'BLOCK'";
			
		$dis = DB::Run($query)->fetchAll(PDO::FETCH_ASSOC);
		
		return $dis;
	}	



//to delete an account from the database
		public function delete_model($username)
	{

		$query = "DELETE FROM register WHERE Username = '$username'";
			
		 $dis = DB::Run($query);
	
	}	


//to block an account from the database
	public function block_model($username)
	{

		$query = "UPDATE register SET Approval_status = 'BLOCK' WHERE Username = '$username'";
			
		$dis =DB::Run($query);

	
	}	




//to approve/unblock an account from the database
	public function approve_model($username)
	{

		$query = "UPDATE register SET Approval_status = 'APPROVE' WHERE Username = '$username'";
			
		DB::Run($query);
	
	}	



}

class Report{

	
	
//to retrieve all customers infromation from database
	public function customer_model($month)
	{

		$month1=$month;
		$query = "SELECT * FROM register WHERE Approval_status = 'APPROVE' AND Account_Type = 'Customer' AND 
	MONTH(Approval_Date) = '$month1'";


			
		$di = DB::Run($query)->fetchAll(PDO::FETCH_ASSOC);
	
		return $di;
	}

//to retrieve all suppliers infromation from database
	public function supplier_model($month)
	{

		$month1=$month;
		$query = "SELECT * FROM register WHERE Approval_status = 'APPROVE' AND Account_Type = 'Supplier' AND 
	MONTH(Approval_Date) = '$month1'";
			
		$di = DB::Run($query)->fetchAll(PDO::FETCH_ASSOC);
		
		return $di;
	}

//to retrieve all events infromation from database
public function event_model($month)
	{

		$month1=$month;
		$query = "SELECT * FROM eventbook WHERE MONTH(startdate) = '$month1'";
			
		$di = DB::Run($query)->fetchAll(PDO::FETCH_ASSOC);
		
		return $di;
	}


//to retrieve all equipment infromation from database
public function equipment_model($month)
	{

		$month1=$month;
		$query = "SELECT * FROM equipment WHERE MONTH(EqDate) = '$month1'";
			
		$di = DB::Run($query)->fetchAll(PDO::FETCH_ASSOC);
		
		return $di;
	}

//to retrieve income  from database
public function income_model($month)
	{

		$month1=$month;
		$query = "SELECT * FROM eventbook WHERE MONTH(startdate) = '$month1' AND Username != '' ";
			
		$di = DB::Run($query)->fetchAll(PDO::FETCH_ASSOC);
		
		return $di;
	}


}

class EqInfo{

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