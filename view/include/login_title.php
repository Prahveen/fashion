<?php

if(logged_in() === true){
	include 'include/widgets/login/logged_in.php';
}else if (fb_logged_in() ===true) {
	include 'include/widgets/login/fb_logged_in.php'; 
}else if(logged_in() === false){
	include 'include/widgets/login/login.php';
}

		
?>