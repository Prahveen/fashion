
<div	class="container">
		<ul class="nav navbar-nav navbar-right" id="reg">
		  	<li class="image">
		  		<a href="profile.php" >
        			<span><?php echo ucfirst($user_data['username']);?></span>
          			<img class=" img-circle" src=<?php echo '../'.$user_data['memory_location'].$user_data['profile_thumbnail'];?>>
        		</a>
        	</li>
				<!--<li><a><?php echo $user_data['username'];?></a></li>!-->
		
			<li style="padding-top:11px"><a href="../controllers/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
		</ul>
</div> 