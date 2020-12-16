<?php

require_once '../../libs/database.php';
/**
 * 
 */
class bookingInfo
{
	public $table = 'eventbook';
	
	public $bookingid;
	public $value,$eventname,$packagename,$startdate,$enddate,$starttime,$endtime,$venue,$price;
        
        public function booking()
	{
		$query="INSERT INTO eventbook (eventname,packagename,startdate,enddate,starttime,endtime,venue,price) 
		VALUES (:eventname,:packagename,:startdate,:enddate,:starttime,:endtime,:venue,:price)";
                $param=[ ':eventname' => $this->eventname, ':packagename' => $this->packagename, ':startdate' => $this->startdate, ':enddate' => $this->enddate, ':starttime' => $this->starttime, ':endtime' => $this->endtime, ':venue' => $this->venue, ':price' => $this->price ];
                $stmt = DB::RUN($query, $param);
               
	}
	
	public static function All()	{

		$query = "SELECT * FROM eventbook";

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
	
	public static function getById($bookingid){

		$query = "SELECT * FROM eventbook WHERE bookingid = :bookingid LIMIT 1";

		$param = [':bookingid' => $bookingid]; // the parameter that will be bind by pdo

		try {
			// use static method run() from class DB 
	    	if ($stmt = DB::Run($query, $param)) { // this will run the build query

				// need to use fetch to retrieve only 1 row of data
				// this will retrieve the row of data
				// that is associated to the passed id
				$booking = $stmt->fetch(PDO::FETCH_ASSOC); 
													    	 
				// return the equipment object
				return $booking;
			};
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}
	
	public function delete(){

		$query = "DELETE FROM $this->table WHERE bookingid=:bookingid";

		$param = [':bookingid' => $this->bookingid]; // the parameter that will be bind by pdo

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
