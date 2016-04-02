<?php require_once '../core/init.php';?>


<!--header !-->
<?php include 'designer-view/header.php';?>
<!--header!-->


<!--navbar !-->
<?php include 'designer-view/nav_bar.php';?>
<!-- navbar !-->

<!--slider!-->
<?php include 'designer-view/slider.php';?>
<!--slider!-->

<div id="wrapper">
	<div class="contianer">
		<center id="header">
			<p>Online shopping portal</p>
			<h1>WELCOME TO FASION කඩේ</h1>
			<span>--- |f|a|s|h|i|o|n| ---</span>
		</center>
	</div>

<div class="container">
	<div class="jumbotron">
		<div class="col-md-12  " >
		    <div class="container">
				<?php 
				$result =mysql_query("SELECT * FROM `fullprofileuser`");
				while ($row = mysql_fetch_array($result)) {?>			
					<div class="col-sm-3">
		    			<div class="thumbnail">
		    				<img src=<?php echo '../'.$row['memory_location'].$row['cover_main'];?> style="height:200px;"> 
		    				<img src=<?php echo '../'.$row['memory_location'].$row['profile_main'];?>style="height:85px;width:95px;margin-top:-45px;border-radius:50%;">   				
		    				<div class="caption">
		    					<center>
		    						<h4><b><?php echo ucfirst($row['username']);?></b></h4>
		    						<div  style="color:orange"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
		  							<h5>Show more detailes</h5>
		  							<a href=<?php echo 'profile-view.php?custom='.$row['user_id'];?> ><button class="btn btn-default" style="font-family:Delicious-Roman;font-weight:bolder;">View Profile</button></a>
		  							
		  						</center>	    					
		    				</div>	 				
		    			</div>
		    		</div>
					
				<?php } ?>
			</div>
		</div>
	</div>
</div>

<?php require_once './include/overall/footer.php'; ?>



</div>