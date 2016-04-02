<?php
ob_start();
session_start();
//error_reporting(1);

require_once 'function/general.php';
require_once 'function/users.php';
require_once 'function/other_user.php';
require_once 'database/connect.php';	
	



$current_file = explode('/', $_SERVER['SCRIPT_NAME']);
 $current_file = end($current_file);
 global $current_file;

if(logged_in() === true){
	$session_user_id = $_SESSION['user_id'];
	$user_data = user_data($session_user_id, 'user_id', 'username', 'firstname', 'secondname', 'email','phone_no', 'category', 'gender', 'dob' , 'email_code', 'active' , 'type', 'memory_location',
							'profile_id','user_id', 'profile_name', 'profile_main','profile_thumbnail',
							'cover_id','user_id', 'cover_name', 'cover_main','cover_thumbnail');
	//$profile_data = profile_data($session_user_id, 'profile_id','user_id', 'profile_name', 'profile_main','profile_thumbnail');
	//$cover_data	= cover_data($session_user_id, 'cover_id','user_id', 'cover_name', 'cover_main','cover_thumbnail');
	$creat_cart_data = creat_cart_data($session_user_id,'username', 'firstname', 'secondname','item_id', 'item_cat', 'item_title','price','phone' , 'item_quantity' ,'item_description' ,'image_path' );
	
}else{require_once '../controllers/facebook/fbinit.php';}	
$errors = array();
?>