
<?php 
	$result =mysql_query("SELECT * FROM `cartdetailes`");
		while ($row = mysql_fetch_array($result)) {?>

<div class="col-sm-4" id="product">
	<div class="thumbnail">
		<img src=<?php echo '../'.$row['image_path'];?> > 
		<div class="caption">
			<center>
				<h4><?php echo ucfirst($row['item_title']);?></h4>
				<p><i class="fa fa-usd"></i> <?php echo $row['price'];?></p>
				<button class="btn btn-defualt">Add cart <i class="fa fa-shopping-cart"></i></button>
			</center>
		</div>	
	</div>

</div>

<?php } ?>