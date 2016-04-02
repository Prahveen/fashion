<?php

	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_pw 	= '';
	$mysql_db	= 'lr';

	mysql_connect($mysql_host , $mysql_user, $mysql_pw) or die('server error');
	$database= mysql_select_db($mysql_db)or die("coudn\'t find the database"); 

	//create view for get the full dashboard user  PROFILE DATA
	mysql_query("CREATE VIEW `fullProfileUser` AS (
			SELECT  `users`.* ,
		  		    `profile`.`profile_id`, `profile`.`profile_name` , `profile`.`profile_main` , `profile`.`profile_thumbnail` ,
		   			`cover`.`cover_id`, `cover`.`cover_name` , `cover`.`cover_main` , `cover`.`cover_thumbnail`
			FROM `users` 
				LEFT OUTER JOIN `profile` ON `users`.`user_id` = `profile`.`user_id` 
				LEFT OUTER JOIN `cover` ON `users`.`user_id` = `cover`.`user_id`
		) ");
	
	//create view for get the full dashboard user  CREATE CART DATA
	mysql_query("CREATE VIEW `cartDetailes` AS (
			SELECT  `users`.`user_id` , `users`.`username` , `users`.`firstname` , `users`.`secondname` ,
		  		    `creatcart`.`item_id`, `creatcart`.`item_cat`, `creatcart`.`item_title`, `creatcart`.`price`, `creatcart`.`phone` , `creatcart`.`item_quantity` , `creatcart`.`item_description` , `creatcart`.`image_path` 	   			
			FROM `users` 
				INNER JOIN `creatcart` ON `users`.`user_id` = `creatcart`.`user_id` 
				
		) ");


	//creat view for get the full statu and status reply tables
	mysql_query("CREATE VIEW `overallStatus` AS(
			SELECT `status`.`status_id` , `status`.`user_id` , `status`.`status`,
				   `reply_status`.`status_reply_id` , `reply_status`.`reply_user_id` ,  `reply_status`.`reply_status`
			FROM `status` 
				LEFT JOIN `reply_status` ON `status`.`status_id`= `reply_status`.`status_id`

		) ");





?>