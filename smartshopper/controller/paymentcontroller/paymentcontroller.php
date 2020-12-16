<?php
require_once '../../model/PaymentData/paymentInfo.php';


class BillController{

	public function bill_view($bookid)
	{
		$Bill = new Bill();
	
		$viewBill = $Bill->bill_model($bookid);

	
		return $viewBill;
	} 
}
class PaymentPageController {

	public function paymentpage_view($bookid)
	{
		$PaymentPage = new PaymentPage();
	
		$viewPaymentPage = $PaymentPage->paymentpage_model($bookid);

	
		return $viewPaymentPage;
	} 
	public function Paymentcheck()
	{

		$user = PaymentPage::paymentcheck();


		foreach ($user as $tmp) 
            { 
          
		if($tmp['cardnum'] == $_POST['cardNum']  &&  $tmp['holdername'] == $_POST['cardName'])
		{

					header("Location: http://localhost/smartshopper/view/paymentview/Paymentsuccess.php");	
				
		}
		else
		{

    		$error = "<script type='text/javascript'>alert('Wrong informations, do it again')</script>";		

		}
         
        } 

	
	echo $error;
		return $user;
	} 
}
class ReceiptController {

	public function receipt_view($bookid)
	{
		$Receipt = new Receipt();
		
		$viewReceipt = $Receipt->receipt_model($bookid);

	
		return $viewReceipt;
	} 
}
class PaymentSuccessController{

	public function paymentsuccess_view($bookid)
	{
		$PaymentSuccess = new PaymentSuccess();
	
		$viewPaymentSuccess = $PaymentSuccess->paymentsuccess_model($bookid);

	
		return $viewPaymentSuccess;
	} 
}

?>
