
<style >
	#post{padding-bottom: 5px;}
	#post img{
	width: 50%;
	height: 50px;
}
</style>

<?php 
require_once '../core/init.php';

	if ($_GET) {
		$user_id = explode('?',  $_SERVER['REQUEST_URI']);
  		$user_id  = end($user_id );
	
	if(fb_logged_in()==true){
  		$result =mysql_query("SELECT * FROM `message` WHERE `dashboard_user_id` = $user_id AND `custom_user_id` =".$_SESSION['facebook-user']) or die(mysql_error());
		while ($row = mysql_fetch_array($result)) {?>

		<div class="row" id="post">
			<div class="col-sm-2">
				<img src="../public/image/profile.jpg">
			</div>
			<div class="col-sm-8">
				<?php
					echo '<p>'.$row['custom_user_msg'].'</p>';
					echo '<p>'.$row['dashboard_user_msg'].'</p>';
				?>
			</div>
		</div>


			 

<?php
			}
		}
	}


	
?>