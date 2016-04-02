<?php


	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_pw 	= '';
	$mysql_db	= 'lr';

	mysql_connect($mysql_host , $mysql_user, $mysql_pw) or die('server error');
	$database = mysql_select_db($mysql_db)or die("coudn\'t find the database"); 


	 if ($database) {
	 	$query = mysql_query("CREATE VIEW `fullProfileUser` AS (
			SELECT  `users`.* ,
		  		    `profile`.`profile_id`, `profile`.`profile_name` , `profile`.`profile_main` , `profile`.`profile_thumbnail` ,
		   			`cover`.`cover_id`, `cover`.`cover_name` , `cover`.`cover_main` , `cover`.`cover_thumbnail`
			FROM `users` 
				LEFT OUTER JOIN `profile` ON `users`.`user_id` = `profile`.`user_id` 
				LEFT OUTER JOIN `cover` ON `users`.`user_id` = `cover`.`user_id`
		) ");
	 	$aa=mysql_db_query($database, $query);

		var_dump($aa);
	 }



?>