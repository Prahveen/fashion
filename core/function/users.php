<?php 
/*inner join*/
// function inner_join($tbl1 , $tbl2 , $tbl3) {
// 	$result =mysql_query("SELECT $tbl1.* , $tbl2.* , $tbl3.* FROM `$tbl1` 
// 	INNER JOIN $tbl2 ON $tbl1.`user_id` = $tbl2.`user_id` 
// 	INNER JOIN $tbl3 ON `$tbl1`.`user_id` = $tbl3.`user_id`");

// 	return $result;
// }
// /*inner join*/

/*status update*/
function status_update($status) {
	global $user_data;
	$user_id =$user_data['user_id'];

	mysql_query("INSERT INTO `status`(`status_id`, `user_id`, `status`) VALUES (null,$user_id,'$status')");
	$status_id = mysql_result(mysql_query("SELECT `status_id` FROM `status` WHERE `user_id`=$user_id"), 0);
	mysql_query("INSERT INTO `reply_status`(`status_reply_id`, `reply_user_id`, `status_id`, `reply_status`) VALUES (null,'',$status_id,'')") or die(mysql_error());
}
/*status update*/

/*check creating catogeries*/
function upload_remain() {
	global $user_data;
	$user_id =$user_data['user_id'];
	$query = mysql_query("SELECT * FROM `creatcart` ");
           	$result= mysql_result(mysql_query("SELECT COUNT(`item_id`) FROM `creatcart`WHERE `user_id` = $user_id"), 0);
            $row = mysql_fetch_array($query);
            $cat   = array(
                      'free'      => (int)4,
                      'pro'       => 16,
                      'featured'  => 25
                    ); 
            
            foreach ($cat as $key => $value) {

              if ($key  === $user_data['type'] && $result < $value ) {
                  $more = $value - $result;                   	
                  return $remain =   'You can upload ' .$more. ' more Catogries';
              }else{
              	  return false;
              }
            }
}
/*customer creat cart data*/
function creat_cart_data($user_id) {
	$data = array();
	$user_id = (int)$user_id;

	$func_num_args = func_num_args();
	$func_get_args = func_get_args();

	if ($func_num_args > 1) {
		unset($func_get_args[0]);

		$fields = '`'.implode('`,`', $func_get_args).'`';
		$data   = mysql_fetch_assoc(mysql_query("SELECT $fields FROM `cartdetailes`"));
		return $data;
	}

}
/*customer creat cart data*/


/*insert data into creating cart details*/
function submit_creat_cart_data($submit_data) {
	array_walk($submit_data, 'sanitize');
	global $user_data;
	$user_id = $user_data['user_id'];
	$fields = '`'.implode('`,`', array_keys($submit_data)).'`';
	$data   = '\''.implode('\',\'', $submit_data).'\'';

	$result = mysql_query("INSERT INTO `creatcart`($fields) VALUES ($data)");
}
/*insert data into creating cart details*/



/*######################################################################*/


/* Register function queries Start*/

/* uploading photoz*/
function upload_query($pic_cat,$file_name) {
	
	global $user_data;
	$user_id =$user_data['user_id']; //forign key for relation table
	
	$thumb_image=$file_name.'.thumb.jpg';//thumb pic name
	$image_path= '/'.$pic_cat.'/'.$file_name; //original image path
	$thumb_path='/'.$pic_cat.'/thumb/'.$thumb_image; //thumnail image path
	$pic_cat;
	if ($pic_cat  === 'profile' || $pic_cat === 'cover') {
		$id=$pic_cat.'_id';
		$name= $pic_cat.'_name';
		$main= $pic_cat.'_main';
		$thumbnail= $pic_cat.'_thumbnail';
		

		
		$query = mysql_query("SELECT COUNT($id) FROM `$pic_cat` WHERE `user_id` = '$user_id'");//query for check photoz exists
		$row = mysql_result($query, 0);
		
		if ($row == 0) { //if dosent exist any photo before
			"INSERT INTO $pic_cat(`$id`, `user_id`,$name , $main,$thumbnail) VALUES (null , $user_id, '$file_name' ,'$image_path', '$thumb_path')";
	 		mysql_query("INSERT INTO $pic_cat(`$id`, `user_id`,$name , $main,$thumbnail) VALUES (null , $user_id, '$file_name' ,'$image_path', '$thumb_path')");
	 		
	 		
		 	} else {//if exist already photo
	 		mysql_query("UPDATE `$pic_cat` SET $name =' $file_name ', $main = '$image_path ', $thumbnail = '$thumb_path' WHERE `user_id`= $user_id");
	 		
	 		
				 
		}	 	
	}else if ($pic_cat === 'image_galery') {

		$path =$user_data['memory_location'].'/'.$pic_cat.'/'.$file_name;
		
		mysql_query("INSERT INTO `creatcart`(`item_id`,`item_cat`,`item_title`,`price`,`phone`,`item_quantity`,`item_description`,`image_path`) 
			VALUES('','','','','','','','$path')
		")or die(mysql_error());
	}	
}

/*account activation*/
function active_account($email , $email_code) {
	$email =sanitize($email);
	$email_code = sanitize($email_code);

	if (mysql_fetch_assoc(mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `email` = '$email' AND `email_code` = '$email_code' AND `active` = 0")) == true) {
		mysql_query("UPDATE `users` SET `active` = 1 WHERE `email` = '$email'");
	}
}
/* storing user details*/
function register_user($register_data) {
	array_walk($register_data, 'sanitize');

	$fields = '`'.implode('`,`', array_keys($register_data)).'`';
	$data   = '\''.implode('\',\'', $register_data).'\'';
	//$forign_key = user_id_from_username($register_data['username']); //to save profile pic directry
	

	
	mysql_query("INSERT INTO `users` ($fields) VALUES ($data)");
	//mysql_query("INSERT INTO `a`(a.id , a.user_id, a.name) VALUES ('' , '$forign_key', 'eliminate')"); //updatint pro pic


	mail($register_data['email'],'Activate your account' , " Hellow" .$register_data['username']. " ,\n\nYou need to activate your account, so use the link below : \n\n
	http://localhost/fashion.php?success?email=".$register_data['email']."&email_code=".$register_data['email_code']." \n\n -adrian prahveen\n\n" ); 
}
/* Register function qwueries Colsed*/


/* Loging functions queries Start*/

/* checking user exists*/
function user_exists($username) {
	$username = sanitize($username);
	return (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$username'"), 0) == 1) ? true:false;
}
/* check user exists with email*/
 function email_exists($email) {
 	$email = sanitize($email);
 	return (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `email` = '$email'"), 0) == 1) ? true : false;
 }
 /* check whether account z activated*/
function user_active($username) {
	$username = sanitize($username);
	return (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$username' AND `active` = 1 "), 0) == 1) ? true : false;
}

/* search user id from username */
function user_id_from_username($username){
	$username = sanitize($username);
	return mysql_result(mysql_query("SELECT `user_id` from `users` where `username` = '$username'"),0 ,'user_id') ;
}//return mysql_fetch_array(mysql_query("SELECT `user_id` from `users` where `username` = '$username'"),'user_id');

/* user logging function */
function user_logging($username , $password){
	$user_id = user_id_from_username($username);
	$username = sanitize($username);
	$password = md5($password);
	return (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$username' AND `password` = '$password'"),0) == 1) ? $user_id :  false ;
}


/* logged and storing and passing session*/
function logged_in(){
	return(isset($_SESSION['user_id'])) ? true : false;
}



/* getting all user detailse*/

function user_data($user_id) {
	$data = array();
	$user_id = (int) $user_id;

	$func_num_args = func_num_args();
	$func_get_args = func_get_args();

	if ($func_num_args >1) {
		unset($func_get_args[0]);

		$fields = '`'.implode('`,`', $func_get_args).'`';
		if ($data = mysql_fetch_assoc(mysql_query("SELECT $fields FROM `fullprofileuser` WHERE `user_id` = '$user_id'"))) {
			return $data;
		}else{echo mysql_error();}
	}
}
/* Loging functions and queris Closed*/