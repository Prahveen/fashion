<?php

use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
require '../app/start.php';


if (isset($_GET['approved'])) {
	
	$approved = $_GET['approved']  ;

	if ($approved == 'true' ) {
		$payer_id = $_GET['PayerID'];

		//Get  payment _id from datbase
		$hash = $_SESSION['paypal_hash'];
		$payment_id = mysql_result(mysql_query("SELECT `payment_id` FROM `transaction_paypal` WHERE `hash` = '$hash'"), 0)or die(mysql_error());
		// Get the PayPal payment
		$payment = Payment::get($payment_id , $api);
		
		$execution = new PaymentExecution();
		$execution->setPayerId($payer_id);

		// Execute Paypal payment (charge)
		$payment->execute($execution , $api);

		// Update transaction
		$updateTransaction = mysql_query("UPDATE `transaction_paypal` SET `complete`= 1 WHERE `payment_id` = '$payment_id' ")or die(mysql_error());

		// Set the user as a member
		$user_id = $user_data['user_id'];
		$setMember =  mysql_query("UPDATE `users` SET `type`='pro' WHERE `user_id` =  $user_id")or die(mysql_error());
		
		// Unset PayPal hash
		unset($_SESSION['paypal_hash']);

		header('location:../member/complete.php');


	}else if ($approved == 'false'){
		header('location:../paypal/canceled.php');
		
	}
}
?>