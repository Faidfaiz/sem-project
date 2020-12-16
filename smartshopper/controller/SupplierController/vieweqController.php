<?php

require_once '../../model/SupplierData/vieweqInfo.php';
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

