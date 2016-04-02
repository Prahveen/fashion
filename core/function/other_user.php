<?php

/*facebook logged and storing and passing session*/
function fb_logged_in(){
	return(isset($_SESSION['facebook-user'])) ? true : false;
}

function facebook( $user) {
	$ip_add = $_SERVER['REMOTE_ADDR'];
	array_walk($user, 'sanitize');
	$fb_id = $user['id'];
	$username = $user['name'];
	//$update_time_zone = date('D M Y @ H:I:S', time());
	if (fb_user_exists($fb_id , $ip_add) === false) {
		mysql_query("INSERT INTO `facebook` (`fb_id` , `username` , `last_upate_time`,`update_time_zone` , `host_add` ) VALUES ('$fb_id' , '$username' , null , null , '$ip_add')");
	}else if (fb_user_exists($fb_id , $ip_add) === true) {
		$last = mysql_result(mysql_query("SELECT  TIMESTAMP(`update_time_zone`) FROM `facebook` WHERE `fb_id` = $fb_id "), 0);
		mysql_query("UPDATE `facebook` SET `last_upate_time` = '$last',`update_time_zone`=null ") or die(mysql_error());
	}
	
}

function fb_user_exists($fb_id , $ip_add){
	
	
	return(mysql_result(mysql_query("SELECT COUNT(`fb_id`) FROM `facebook` WHERE `fb_id`= $fb_id  AND `host_add`='$ip_add'"), 0) ==1) ? true:false;
}
?>	