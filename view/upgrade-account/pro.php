<?php 
if (isset($_GET['pro'])) {

	echo $fee = 200;
	 header('Location:../payment/member/payment.php');
}
?>


<div class="col-sm-5 col-sm-offset-1" >	
	<div id="pro_background">
		<div class="panel panel-default" id="pro" >
			<center>
				<div class="panel-body " >
					<h3 id="main_heading">Pro</h3><hr>
					<h4>Great for those wanting additional features and more featurs..</h4><hr>
					<p>High visibility</p><hr>
					<p>Up to 15 categories</p><hr>
					<p>Accept deposits up to $1,000	</p><hr>
					<p>Upload audio files	</p><hr>
					<p>Add YouTube and Vimeo videos	</p><hr>

					<p>Priority phone support	</p><hr>
				
				</div>
			<!-- Submit Button !-->
				<div class="row ">
					<div class=" col-sm-12 ">
						<form>
							<button class="btn btn-default " type="submit" name="pro">Upgrade Account</button>	
						</form>
						
					</div>
				</div>
			</center>
		</div>
	</div>
</div>







