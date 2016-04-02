<?php 

require_once '../core/init.php';
require_once 'include/overall/login_header.php';


/* Ridrecting signup and logging funcion */
if (isset($_GET['log'])) {
	logged_in_redirect();

	include 'include/widgets/login/log_fourm.php';
}else if (isset($_GET['reg'])) {
	if ($_GET['reg'] === 'free' || $_GET['reg'] === 'pro' || $_GET['reg'] === 'featured') {
		logged_in_redirect();
		include 'include/widgets/login/signup.php';
	}else{
		logged_in_redirect();
		include 'include/widgets/login/signup_cat.php';  
	}
}

/* Dielivery messages*/
if (isset($_GET['success']) && $_GET['success'] === 'log') {
	require 'include/widgets/success.php';	
}
if (isset($_GET['activated'])) {
	require 'include/widgets/success.php';
}

/* Account activation with conforming email*/
if (isset($_GET['email'] ) === true && isset($_GET['email_code']) === true) {
	require '../controllers/activate.php';
} 




?>
