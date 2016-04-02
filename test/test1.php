<?php
include 'core/init.php';

	//$query1 = mysql_result(mysql_query("SELECT `memory_location` FROM `users` where `user_id` ='66'"),0);
		//$query2 = mysql_result(mysql_query("SELECT `name` FROM `a` where `user_id` ='66'"),0);
		//$query3 = mysql_result(mysql_query("SELECT `thumb` FROM `a` where `user_id` ='66'"),0);
		$a =1;
		//print_r($query2);
		 $query = mysql_query("SELECT * FROM `a` where a.user_id ='66'");
		 $query1 = mysql_result(mysql_query("SELECT `memory_location` FROM `users` where `user_id` ='66'"),0);
		//print_r(mysql_fetch_assoc($query));
		//rint_r(mysql_fetch_assoc($query1));

	if ($query1) {
	 	while ($row = mysql_fetch_assoc($query)) {
			echo '<img src="'.$query1.$row['thumb'].'">';

			
		}
	}else{echo mysql_error();}
	
?>
