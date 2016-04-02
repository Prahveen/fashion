<?php 
require_once '../core/init.php';

if (fb_logged_in() === false && fb_logged_in() === false ) {
	echo 'You need to login';
}else if (fb_logged_in() === true   ) {
	if (isset($_POST['message'])) {

		if (empty($_POST['message'])) {
			echo 'Oppz ... !! Please input your message ..!!';
		}else{
			$fb_id = $_SESSION['facebook-user'];
			$message= $_POST['message'];
			$dashboard_user_id = $_POST['dashboard_user_id'];
			mysql_query("INSERT INTO `message` ( `id` , `dashboard_user_id` , `dashboard_user_msg` , `custom_user_id` , `custom_user_msg`) VALUES('' , $dashboard_user_id,'',$fb_id ,'$message')");
		}
	
		
	}
}


?>