<?php require_once '../core/init.php';?>
	<!--header !-->
	<?php include 'designer-view/profile-view/header.php';?>
	<!--header!-->
	<!--navbar !-->
	<?php include 'designer-view/nav_bar.php';?>
	<!-- navbar !-->

<?php 
	$user_id = explode('=',  $_SERVER['REQUEST_URI']);
  	$user_id  = end($user_id );

  	
?>


<div id="wrapper">
	<div class="container">
		<!--left_side!-->
		<?php include 'designer-view/profile-view/left-side.php';?>
		<!--right_side!-->
		<div class="col-sm-9" id="right-side">
			<?php
				
				if(isset($_GET ) && isset($_GET['wall'])) {
					include 'designer-view/profile-view/wall.php';
				}else if (isset($_GET['info'])) {
					include 'designer-view/profile-view/info.php';
				}else if (isset($_GET['product'])) {
					include 'designer-view/profile-view/product.php';
				}else if (isset($_GET['message'])) {
					include 'designer-view/profile-view/message.php';
				}
?>	
		</div>
	</div>


</div>
<script src="../public/js/jquery.js"></script>
<script src="designer-view/profile-view/profile-view.js"></script>