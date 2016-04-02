<?php 

if (empty($_POST) === false) {
		if (isset($_POST['normal'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];

			if (user_exists($username) === false){ //checking user name exists
			 	$errors[] = 'Username dosen\'t exists';
			}else if (user_active($username) === false) { //checking acoount is activated
				$errors[] = 'You need to activate your account, Please vist to your email and follow link';
			}else {
				$logging = user_logging($username, $password); //user logging function
				if ($logging === false) {
					$errors[] = 'Need valid user name and password';
				}else {
					$_SESSION['user_id'] = $logging;
					header('Location:../view/profile.php');
				}
			}
		}
	}

?>







<div class="container " id="lg_form">
	<!-- Logging form start !-->
	<div class="col-sm-6 col-sm-offset-3" >
		<center><a href="index.php"><img src="../public/image/background/logo_final.png"></a></center>
		<!-- Profile picture side !-->
		<form action="" method="post" role="form" enctype="multipart/form-data" >

			<!-- ERROR SHOWING PHP VALIDATION !-->
			<?php if (empty($errors) === false){?>
			<div class="row col-sm-11 col-sm-offset-1">
					<div class="form-group">
						<div class="alert alert-danger" role="alert" style="padding:0;">
						  <!--<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"> </span>
						  <span class="sr-only">Error:</span>!-->
						  <span style="padding:0;"> <?php echo error_output($errors);?></span>
						  </div>
					</div>
			</div>
			<?php }?>		
			
			<!-- username !-->
			<div class="row" >
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="glyphicon glyphicon-user"></i>
						</span>
						<input type="text" name="username" class="form-control" placeholder="User Name" id="username">
					</div>
				</div>
				<!-- error showing !-->
				<span id="uname"><i></i></span>
			</div>
			<!-- password !-->
			<div class="row">
				<div class="form-group ">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="glyphicon glyphicon-lock"></i>
						</span>
						<input type="password" name="password" class="form-control" placeholder="Password" id="password">
					</div>
				</div>

				<!-- error showing !-->
				<span id="pw"><i></i></span>
			</div>

				<!-- BUTTON SECTION !-->
			<div class="form-group">
				<div>
					<button class="btn btn-info" type="submit" name="normal" id="validate"><span class="glyphicon glyphicon-log-in"></span> Login</button>
					<a href="login.php?reg" class="btn btn-default" type="submit" ><span class="glyphicon glyphicon-user"></span> Sign up</a></center><legend>or</legend>
						
					<?php if(!isset($_SESSION['facebook'])):?>
						<a href=<?php echo $facebook->getLoginUrl();?>><button type="button" class="btn btn-primary" name="fb"  >Login with Facebook</button></a>
					<?php endif;?>	




					<div id="forget_pw" ><a href="#">Forgot password?</a></div>
				</div>
			</div>
		</form>
	</div>
</div>



<!-- ################################################################################################## !-->

<script src="../public/js/jquery.js"></script>
<script src="../public/js/validate.js"></script>
</body>
</html>
