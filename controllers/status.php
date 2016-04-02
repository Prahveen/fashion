<?php
require_once '../core/init.php';

if (isset($_POST['status'])) {
	$status = $_POST['status'];

	if (empty($status)) {
		echo 'Oppz..!! You need to input a status or leave the status posting fucker';
	}else{
		status_update($status);
	}
}

?>