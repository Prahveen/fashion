<?php require_once '../core/init.php';?>

<!--header !-->
<?php include 'product-view/header.php';?>
<!--header!-->


<!--navbar !-->
<?php include 'product-view/nav_bar.php';?>
<!-- navbar !-->

<!--slider!-->
<?php include 'product-view/slider.php';?>
<!--slider!-->

<!--slider after contain!-->
<div id="wrapper">
	<div class="contianer">
		<center id="header">
			<p>Online shopping portal</p>
			<h1>WELCOME TO FASION කඩේ</h1>
			<span>--- |f|a|s|h|i|o|n| ---</span>
		</center>
	</div>

<div class="container" style="padding-top:40px;">
		
		<!-- Left side content!-->
		<div class="col-sm-3" id="left-side-cart">
			<?php include 'product-view/left-side.php';?>
		</div>
		<!--right side content!-->
		<div class="col-sm-9" id="right-side-cart">
			<div class="con" >
				<!--item view!-->
				
					<?php include 'product-view/item-view.php';?>
				<!--item view!-->
			</div>
		</div>
	</div>
</div>
<div style="clear:both;"></div>
	
<!--footer!-->
<?php include 'include/overall/footer.php';?>
<!--footer!-->
</body>
</html>