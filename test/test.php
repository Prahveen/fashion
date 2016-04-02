<?php
	include '../core/init.php';

	$_SESSION['user_id'] = user_id_from_username('gyya');


function uploading($pic_cat){
	global $user_data;
	if(isset($_FILES['file']['name']) === true) {
		if (empty($_FILES['file']['name']) ===true) {
			echo 'plaese choose a file';
		}else {

		$file_name = basename($_FILES['file']['name']);
		$allowed   = array('jpg', 'jpeg', 'png');
		$tmp_location = $_FILES['file']['tmp_name'];
		$extension = strtolower(end(explode('.', $file_name)));
		$dir = $user_data['memory_location'];

		if (in_array($extension, $allowed) === false) {
			echo $errors= 'Your file format doesn\'t supported';
		}else{
			
			move_uploaded_file($tmp_location, $dir.'/'.$pic_cat.'/'.$file_name);
			echo 'success';
			//$image =imagecreatefrompng( $dir.'/'.$pic_cat.'/'.$file_name);
			$image_size =getimagesize($dir.'/'.$pic_cat.'/'.$file_name);
			echo $image_width = $image_size[0].'<br>';
			echo $image_height = $image_size[1];

			//$new_size = ($image_width + $image_height) / ($image_width*($image_height/45));
			$new_width = 200;
			$new_height = 200;

			$new_image = imagecreatetruecolor($new_width, $new_height);
			if ($extension === 'jpg' || $extension ==='jpeg') {
				$old_image = imagecreatefromjpeg($dir.'/'.$pic_cat.'/'.$file_name);
			}else if ($extension === 'jpg' || 'jpeg')  {
				$old_image = imagecreatefrompng($dir.'/'.$pic_cat.'/'.$file_name);
			}
			

			$thumb_image = $file_name.'.thumb.jpg';
			imagecopyresized($new_image, $old_image, 0, 0, 0, 0,$new_width, $new_height, $image_width, $image_height);
			imagejpeg($new_image , $dir.'/'.$pic_cat.'/thumb/'.$thumb_image);
			
			$f= '/profile/'.$file_name;
			$g='/profile/thumb/'.$thumb_image;
			$forign_key = user_id_from_username('gyya');
			mysql_query("INSERT INTO `a`(a.id , a.user_id, a.name , a.thumb) VALUES ('' , '$forign_key', '$f', '$g')");
		}
		

		//echo $image =imagecreatefromjpeg($dir.'/'.$pic_cat.'/'.$file_name);
		

		

	}

	} //uploading function closed
}







if (isset($_SESSION['user_id'])) {
		global $user_data;


		if (isset($_POST['profile'])) {
			$pic_cat =  $_POST['profile'];
			uploading($pic_cat);

		}else if (isset($_POST['cover'])) {
			$pic_cat =  $_POST['cover'];
			uploading($pic_cat);
		}

}	



	// $_SESSION['user_id'] = user_id_from_username('gyya');

	// if (isset($_SESSION['user_id'])) {
		
	// 	echo $user_data['username'];
	// //submiting the post
	// 	if (!empty($_POST)) {

	// 		//selecting photo upload category 
			
	// 		//selecting photo upload category 

	// 	if (isset($_FILES['file']['name'])) {
	// 		$name = basename($_FILES['file']['name']);
	// 		$allowd = array('jpg', 'jpeg', 'png');
	// 		$tem_name= $_FILES['file']['tmp_name'];
			
	// 		$ext = strtolower(end(explode('.',$name)));
			
	// 		if (in_array($ext, $allowd) === true) {
	// 			$dir = $user_data['memory_location'];
	// 			move_uploaded_file($tem_name,$dir.'/profile/'.$tem_name );
	// 			echo 'done';
	// 			}
	// 		}
	// 	}

	// }

?>


<form action="" method="post" enctype="multipart/form-data">
	<input type="file" name="file">

	<input type="submit" name="submit" value="upload">
	
	<br>
	<br>

	<form action="" method="post" enctype="multipart/form-data">
	<input type="file" name="file">
	
	<input type="submit" name="profile" value="profile">
	<input type="submit" name="cover" value="cover">
	
	<div>
		<?php 
		$query1 = mysql_result(mysql_query("SELECT `memory_location` FROM `users` where `user_id` ='66'"),0);
		$query2 = mysql_result(mysql_query("SELECT `name` FROM `a` where `user_id` ='66'"),0);
		$query3 = mysql_result(mysql_query("SELECT `thumb` FROM `a` where `user_id` ='66'"),0);
		//$query4 = mysql_result(mysql_query("SELECT `name` FROM `a` where `user_id` ='66'"),0);
		if ($query1) {
			echo 'ela';
		}
		echo '<a href="'.$query1.$query2.'"><img src="'.$query1.$query3.'"></a>';
		?>	
	</div>