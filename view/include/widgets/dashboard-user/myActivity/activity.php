<?php 
if (isset($_POST)) {

  foreach ($_POST as $key => $value) {
    $key = (int)$key;
    if (mysql_query("DELETE FROM `creatcart` WHERE  `item_id` = $key")) {
      echo 'ela';
    }else {echo mysql_error();}
  }
}
?>

<div id="page-wrapper">
	<div class="container-fluid">
    	<!--page heading!-->
        <div class="row">
          <div class="col-md-12">
            <h1 class="page-header">Mannage My Shop <small>Overview</small></h1>  
          </div>
        </div>
        <!--page heading!-->

        <!--navigational hierarchy!-->
          <ol class="breadcrumb">
            <li><a href=<?php echo $current_file.'?dashboard'?>><i class="fa fa-fw fa-dashboard"></i> Dashboard</a></li>
            <li class="active"><i class="fa fa-fw fa-bell"></i> My Activity </li>
          </ol>
        <!--navigational hierarchy!-->
    </div>

    <div class="row">
    	<div class="col-md-12 " >

    	<?php 
        global $user_data;
        $user_id =$user_data['user_id'];
    		$query = mysql_query("SELECT * FROM `creatcart` WHERE `user_id`= $user_id  ");
    		while($row = mysql_fetch_array($query)){?>
        <form method="post">
    		<div class="col-sm-3">
    			<div class="thumbnail">
    				<img src=<?php echo '../'.$row['image_path']?> style="height:250px;width:100%;">   				
    				<div class="caption">
    					<center>
    						<p><b><?php echo $row['item_title']?></b></p>
    						<div id="star" ></div>
  							<p id="des">Show more detailes</p>
  							<div id="edit_bord">
  								<?php
  									echo 'Description:'.$row['item_description'].'<br>';
  									echo 'Price: Rs'.$row['price'].'<br>';
  									echo 'Phone No'.$row['phone'].'<br>';
  									echo 'Pieces Acailable'.$row['item_quantity'];
  								?>
  							</div>
  							<button class="btn btn-sm btn-primary" >Edit</button>
    						<button class="btn btn-sm btn-success">Save</button>
    						<button class="btn btn-sm btn-danger"  type="submit"  name=<?php echo $row['item_id']?>>Delete</button><div class="fuck"></div>
  						</center>	    					
    				</div>	 				
    			</div>
    		</div>
        </form>
    	<?php } ?>
    	</div>
    </div>
</div>


<script sr="../public/js/jquery.js"></script>
<script src="../public/js/cart_activity_details_toggle.js"></script>
