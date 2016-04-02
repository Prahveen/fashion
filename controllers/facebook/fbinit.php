<?php
// require_once '../core/init.php';


require_once "vendor/autoload.php";

Facebook\FacebookSession::setDefaultApplication('1685294375070368' ,'4cc0b2b01611b368490918d517b79ad8');
$facebook = new  Facebook\FacebookRedirectLoginHelper('http://localhost/fashion/view/index.php');

try {
	if($session = $facebook -> getSessionFromRedirect()) {
		$_SESSION['facebook'] = $session->getToken();
		header('Location:index.php');
	}
	
	if (isset($_SESSION['facebook'])) {
		$session = new Facebook\FacebookSession($_SESSION['facebook']);
		$request = new Facebook\FacebookRequest($session , 'GET' , '/me');
		$request = $request->execute();
		$user = $request->getGraphObject()-> asArray();
		$id = $user['id'];
		$_SESSION['facebook-user'] = $id;
		facebook($user);
	}
} catch (Exception $e) {
	
}

?>