<?php
include '../core/init.php';
	$row = mysql_fetch_array(mysql_query("SELECT * FROM `fullprofileuser` WHERE `user_id` = 67"));

echo '<table border=2><tr>';
foreach ($row as $key => $value) {
	echo '<td border=2>'.$key.'</td>';
	echo '<td border=2>'.$value.'</td>';

}

echo '</tr></table>'
?>
