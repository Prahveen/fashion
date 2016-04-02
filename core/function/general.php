<?php

/*check fb loging session start*/
function fb_login_redirect(){
	if (fb_logged_in()==false) {
		header('location:error.php');
	}
}




/* uploading profile,cover,image gallery photoz*/
function upload_photo($pic_cat) {
	global $user_data;
	$current_file;

	if(isset($_FILES['file']['name']) === true){
		if (empty($_FILES['file']['name']) === true) {
			$errors[] = 'plaese choose a file';
		}else {

			$file_name = basename($_FILES['file']['name']);
			$tmp_location =$_FILES['file']['tmp_name'];
			$allowed = array('jpg' , 'jpeg', 'png');
			$extention = strtolower(end(explode('.', $file_name)));
			$dir = $user_data['memory_location'];

			if (in_array($extention,$allowed) === false) {
				$errors = 'Your file format doesn\'t support';
			}else {
				//echo $dir.'/'.$pic_cat.'/'.$file_name;
				move_uploaded_file($tmp_location, '../'.$dir.'/'.$pic_cat.'/'.$file_name);
				
				upload_thumb($dir , $pic_cat , $file_name, $extention);//creating thumbnail photo and move it to thumb folder
				upload_query($pic_cat,$file_name); //storing memory locations for each table
				header('Location:'. $current_file.'?profile');
				echo 'success';
			}
		}print_r($errors);
	}
}

/*thumbnali saving*/
function upload_thumb($dir , $pic_cat , $file_name, $extention) {
	global $user_data;

	$image_size = getimagesize('../'.$dir.'/'.$pic_cat.'/'.$file_name);
	//old image size
	$image_width = $image_size[0];
	$image_height= $image_size[1];
	//new image size
	$new_width = 200;
	$new_height= 200;
	//getting old image details
	$new_image = imagecreatetruecolor($new_width, $new_height );
	if ($extention === 'jpg' || $extention === 'jpeg') {
		$old_image = imagecreatefromjpeg('../'.$dir.'/'.$pic_cat.'/'.$file_name);
				
	}else if ($extention === 'png') {
		$old_image = imagecreatefrompng('../'.$dir.'/'.$pic_cat.'/'.$file_name);
		
	}
	//thumbnail image name
	$thumb_name = $file_name.'.thumb.jpg';
	//creating new image
	imagecopyresized($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $image_width, $image_height);
	imagejpeg($new_image , '../'.$dir.'/'.$pic_cat.'/thumb/'.$thumb_name);

}


function array_sanitize(&$item){
	$item = htmlentities(strip_tags(mysql_real_escape_string($item)));
}
/* emial validation*/
function email_validate($email){
	$email = sanitize($email);
	if ($email === filter_var($email, FILTER_VALIDATE_EMAIL)) {
		return true;
	}else {
		return false;
	}
}
/* logged in redirect*/
function logged_in_redirect(){
	if (logged_in() === true) {
		header('Location:index.php');
		exit();
	}
}
/*logging ridrect*/
function login_redirect(){
	if (logged_in() === false) {
		header('Location:index.php');
		exit();
	}
}
/* Sanitizing user inputs*/
function sanitize($data) {
	$data = htmlentities(strip_tags(mysql_real_escape_string($data)));
	return $data; 
}

/* Error output function*/
function error_output($errors) {
	
	return'<ul><li>'.implode('</li>, <li>', $errors).'</li></ul>';
}
?>