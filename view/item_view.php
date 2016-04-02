<?php
require_once '../core/init.php';
require_once 'include/overall/header.php';





?>

<div class="container ">
	<div class="jumbotron">
		<div class="col-md-12  " >
		    <div class="container">
		    <?php 
			$result =mysql_query("SELECT * FROM `cartdetailes`");
		
		while ($row = mysql_fetch_array($result)) {?>
							
					<div class="col-sm-3">
		    			<div class="thumbnail">
		    				<img src=<?php echo '../'.$row['image_path'];?> style="height:200px;width:100%;"> 
		  
		    				<div class="caption">
		    					<center>
		    						<h4><b><?php echo ucfirst($row['item_title']);?></b></h4>
		    						<div  style="color:orange"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
		  							<div>
		  								<?php
		  									echo 'Description:'.$row['item_description'].'<br>';
		  									echo 'Price: Rs'.$row['price'].'<br>';
		  									echo 'Phone No'.$row['phone'].'<br>';
		  									echo 'Pieces Acailable'.$row['item_quantity'];
		  								?>
		  							</div>
		  							<a href="" ><button class="btn btn-default" style="font-family:Delicious-Roman;font-weight:bolder;">Add Cart</button></a>
		  							
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
