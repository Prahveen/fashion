<?php

use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;



require __DIR__.'/../vendor/autoload.php';


$api = new ApiContext(
	new OAuthTokenCredential(

		'Ab86Yn8SQDCynttB0MhpdYgMkj4xpvVGau_5MPwG4cvGlqutUD-U16Qiv0Z0Q3EBMhvR6aGgexn2xwK1',
		'EOJfxoVpiJf7Apk4aNred-wwKCxsECzW5w4TLGJxXcccFZBN4wxs5ik-Akxor_xoBjhWkPSV7lIOu1DG'
	)
);

$api->setConfig([

	'mod' => 'sandbox',
	'http.ConnextionTimeOut' => 500,
	'log.LogEnabled'=>false,
	'log.FilName'=>'',
	'log.LogLevel' => 'FINE',
	'validation.level'=>'log'
]);

require_once '../../core/init.php';

// mysql_connect('localhost' , 'root' , '');
// $db = mysql_select_db('paypal');
//$user =mysql_fetch_array(mysql_query("SELECT * FROM `user` WHERE `id` = $user_id"));


?>
