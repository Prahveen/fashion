<?php

if (isset($_GET['profile']) && $_GET['profile'] == 'about'){
	include 'include/widgets/dashboard-user/user-profile/wall.php';
}else if (isset($_GET['profile']) && $_GET['profile'] == 'setting'){
	echo 'setting';
}else if (isset($_GET['profile']) && $_GET['profile'] == 'help'){
	echo 'help';
}else if (isset($_GET['profile']) && $_GET['profile'] == 's-inbox'){
	echo 's_inbox';
}else if (isset($_GET['profile']) && $_GET['profile'] == 'upgrade' ) {
	header('location:upgrade.php');
}else if (isset($_GET['profile']) || $_GET['profile'] == 'pro' ) {
	include 'include/widgets/dashboard-user/user-profile/wall.php';
}
?>