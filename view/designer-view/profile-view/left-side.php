




<?php
	$result =mysql_query("SELECT * FROM `fullprofileuser` WHERE `user_id`=$user_id ");
		while ($row = mysql_fetch_array($result)) {?>


<div class="col-sm-3" id="left-side">
	<div class="thumbnail">
		<img src=<?php echo '../'.$row['memory_location'].$row['profile_main'];?>>
	</div>

	<div class="panel">
		<div class="list-group">
		<a href=<?php echo 'profile-view.php?wall='. $row['user_id'];?> class="list-group-item"><i class="fa fa-home"></i>Wall</a>
		</div>
		<div class="list-group">
			<a href=<?php echo 'profile-view.php?info='. $row['user_id'];?> class="list-group-item"><i class="fa fa-beer"></i>Info</a>
		</div>
		<div class="list-group">
			<a href=<?php echo 'profile-view.php?product='. $row['user_id'];?> class="list-group-item"><i class="fa fa-shield"></i></i>Show Products</a>
		</div>
		<div class="list-group">
			<a href=<?php echo 'profile-view.php?message='. $row['user_id'];?> class="list-group-item"><i class="fa fa-envelope"></i>Message</a>
		</div>
	</div>
</div>
<?php } ?>