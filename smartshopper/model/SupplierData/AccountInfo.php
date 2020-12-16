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
		$query = "SELECT Username, Password, Account_Type FROM register";
			
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

	public function E_save()
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