
<style >
	#post{padding-bottom: 5px;}
	#post img{
	width: 50%;
	height: 50px;
}
</style>

<?php 
require_once '../core/init.php';

		$user_id = $user_data['user_id'];
  		
	
  		$result =mysql_query("SELECT * FROM `status` WHERE `user_id` = $user_id ") or die(mysql_error());
		while ($row = mysql_fetch_array($result)) {?>

		<div class="row" id="post">
			<div class="col-sm-2">
				<img src=<?php echo '../'.$user_data['memory_location'].$user_data['profile_main']?>>
			</div>
			<div class="col-sm-8">
				<?php
					echo '<p>'.$row['status'].'</p>';

				?>
				<textarea class="form-control" placeholder="Status" aria-describedby="basic-addon2" id="reply_status"></textarea>	
			</div>
		</div>


			 

<?php
		}



	