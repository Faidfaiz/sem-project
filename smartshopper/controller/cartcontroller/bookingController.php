<?php

require_once '../../model/cartdata/bookingInfo.php';

class bookingController {
	
	//display all booking att
	
	public function index($value=''){
		// assign the returned values(array of equipment object) to variable users
		$booking = bookingInfo::All(); // we use the static method All() that we
							  		// created in equipment model to retrieve all 
							  		// data for equipment
					
									
		return $booking;
	}
	
	public function get($bookingid){
		
		// get booking object associate with $id
		$booking = bookingInfo::getById($bookingid);

		// return booking object with the booking details
		return $booking;
	}
	
	
	//delete booking
	
	public function destroy($bookingid){

		// get booking data associate with $id
		$findUser = bookingInfo::getById($bookingid);

		// update/set the attributes of booking
		$booking = new bookingInfo();

		$booking->bookingid = $findUser['bookingid'];

		// delete booking
		$booking->delete();

		// set message
		$message="The record has been successfully deleted";
                    echo "<script type='text/javascript'> 
                            alert('$message');
                            window.location.href=('../loginview/IndexBookingInterface.php');
                        </script>";
	}
	
	//add booking

   public function booking()
    {
       
       $booking = new bookingInfo();
       
       $booking->eventname = $_POST['eventname'];
                
       $booking->packagename = $_POST['packagename'];
	   
	   $booking->startdate = $_POST['startdate'];
	   
	   $booking->enddate = $_POST['enddate'];
	   
	   $booking->starttime = $_POST['starttime'];
	   
	   $booking->endtime = $_POST['endtime'];
	   
	   $booking->venue = $_POST['venue'];
	   
	   $booking->price = $_POST['price'];
	   
	  
       
       $booking->booking();
       
       $message="Your booking is successfully";
                    echo "<SCRIPT type='text/javascript'> 
                            alert('$message');
                            window.location.href=('../../view/bookingInterface.php');
                        </SCRIPT>";
       }
      
               
    }

