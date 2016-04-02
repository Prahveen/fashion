<!-- Header !-->
<?php include 'blog/header.php';?>
<!-- Header !-->

<div class="container-fluide" >
	<!--navigation bar!-->
	<?php include 'blog/nav_bar.php';?>
	<!-- navigation bar closed!-->
</div>

<div class="container">
	
<div class="container-fluide">

	<div id="wrapper" >
		
		<!-- Left side content !-->
		<?php include 'blog/left_side.php';?>
		<!-- Middle side content !-->
		<div class="col-sm-7" id="middle">

		<!--slider!-->
		<?php include 'blog/slider.php';?>
		<!--slider!-->

		<!--Middle !-->
		<?php include 'blog/middle.php';?>
		<!--Middle !-->


		<!-- Right side content !-->
		<div class="col-sm-3" id="right-side">
			<!-- Random post !-->
			<?php include 'blog/random_post.php';?>
			<!-- Random post !-->

			<!-- Most popular post !-->
			<?php include 'blog/most_popular.php';?>
			<!-- Most popular post !-->

			<!-- comment!-->
			<div id="fb-root"></div>
			<?php include 'blog/comment.php';?>
			<!-- comment!-->

		</div>
	</div>
</div>
</div>
<div style="clear:both"></div>

<?php include 'include/overall/footer.php';?>




</body>
</html>