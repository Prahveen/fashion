<?php
require_once '../core/init.php';


// function jointable($tbl1, $tbl2) {

// 	$data =mysql_query("SELECT $tbl1.* , $tbl2.* FROM $tbl1 LEFT JOIN $tbl2 ON $tbl1.`user_id` = $tbl2.`user_id`");
// 	return $data;
// }
// $result1 = mysql_query("SELECT `users`.* , `cover`.* FROM `users` 
// 	LEFT JOIN `cover` ON `users`.`user_id` = `cover`.`user_id`");

// $result2 = mysql_query("SELECT `users`.* , `profile`.* FROM `users` 
// 	INNER JOIN `profile` ON `users`.`user_id` = `profile`.`user_id`");


// $result1= jointable('users' , 'cover');
$result =mysql_query("SELECT `users`.* , `cover`.* FROM `users` 
	LEFT JOIN `cover` ON `users`.`user_id` = `cover`.`user_id`
	LEFT JOIN `profile` ON `users`.`user_id` = `profile`.`user_id`
	WHERE `users`.`user_id` = `cover`.`user_id`= `profile`.`user_id`");


while ($row = mysql_fetch_array($result)) {
	die('FUCK');
	echo $row['memory_location'];
}





// if ($result1) {
// 	echo 'ela';
// }else{
// 	echo mysql_error();
// }
?>