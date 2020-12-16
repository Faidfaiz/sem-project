<?php

require_once "../../libs/database.php";


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
 
?>