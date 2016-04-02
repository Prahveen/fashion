<?php
use PayPal\Api\Payer;
use PayPal\Api\Details;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Exception\PPConecctionException;

require_once '../app/start.php';

$payer 		= new Payer();
$details 	= new Details();
$amount 	= new Amount();
$transaction= new Transaction();
$payment 	= new Payment();
$redirectUrls= new RedirectUrls();


//payer
$payer->setPaymentMethod('paypal');

//Details
$details ->setShipping('2.00')
		 ->setTax('0.00')
		 ->setSubtotal('20');

//Amount
$amount ->setCurrency('GBP')
		->SetTotal('22')
		->setDetails($details);

//Transaction
$transaction->setAmount($amount)
			->setDescription('Membership');

//Payment
$payment->setIntent('sale')
		->setPayer($payer)
		->setTransactions([$transaction]);

//Redirect Urls
$redirectUrls->setReturnUrl('http://localhost/fashion/payment/paypal/pay.php?approved=true')
			 ->setCancelUrl('http://localhost/fashion/payment/paypal/pay.php?approved=false');


$payment->setRedirectUrls($redirectUrls);


try {
	
	$payment->create($api);

	//Generate and store hash
	$hash = md5($payment->getId());
	$_SESSION['paypal_hash'] = $hash;
	//Prepare and execue transaction storage
	$user_id = $user_data['user_id'];
	$payment_id = $payment->getId();
	mysql_query("INSERT INTO `transaction_paypal`(`id`, `user_id`, `payment_id`, `hash`, `complete`) VALUES ('','$user_id' ,'$payment_id' , '$hash',0 )") or die('fuck');
	

} catch (PPConecctionException $e) {
	//Prepahs log an error
	header('location:../paypal/error.php');
}


foreach ($payment->getLinks() as $link) {
	if ($link->getRel() == 'approval_url') {
		$redirectUrls = $link->getHref();
	}
}


header('location:'.$redirectUrls);

?>