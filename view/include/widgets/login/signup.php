<?php 

// if (empty($_POST) === false) {
	
// 	$required_feilds = array('firstname' , 'secondname' , 'username' , 'email' , 'password' , 'c_password','gender', 'category','dob');
// 	foreach ($_POST as $key => $value) {
// 		if (empty($value) && in_array($key, $required_feilds) === true) {
// 			$errors[] = 'You need to fill all the columns';
// 			break 1;
// 		}
// 	}

// 	if (user_exists($_POST['username']) === true) {
// 		$errors[] = 'Sorry the username \'' .$_POST['username'] .'\' is already taken.';
// 	}else if(preg_match("/\\s/", $_POST['username'])  == true) {
// 		$errors[] = 'Sorry , Username can\'t be contain any spaces';
// 	}else if (email_validate($_POST['email']) === false) {
// 		$errors[] = 'Need valid email';
// 	}else if (email_exists($_POST['email']) === true) {
// 		$errors[] = 'Sorry the username \'' .$_POST['email'] .'\' is already taken.';
// 	}else if (strlen($_POST['password'] <=6) === false) {
// 		$errors[] = 'atleast password must be contain 6 characters';
// 	}else if ( $_POST['password'] !== $_POST['c_password']) {
// 		$errors[] = 'Password does not matched';
// 	}

// } 


?>
	
<?php

if($_GET['reg']){
	if ($_GET['reg'] === 'free') {
		$type = 'free';
	}else if ($_GET['reg'] === 'pro') {
		$type = 'pro';
	}else if($_GET['reg'] === 'featured'){
		$type = 'featured';
	}
	if (empty($_POST ) === false && empty($errors) === true	) {
		
		$register_data = array(
			
			'firstname'		=> $_POST['firstname'],
			'secondname'	=> $_POST['secondname'],
			'username'		=> $_POST['username'],
			'email'			=> $_POST['email'],
			'password'		=> md5($_POST['firstname']),
			'category'		=> $_POST['category'],
			'gender'		=> $_POST['gender'],
			//'dob'			=> $_POST['dob'],
			'email_code'	=> md5($_POST['email'] + microtime()),
			'type'			=> $type
		);
		
		
		$default_path	= getcwd(); //current file path
		$default_path 	= $default_path.'\upload\\'; //setting up dedfult path to make direcry files
		
		$creat_path 	= 'view/upload/';
		$code 			= md5($register_data['username']);
		$file_path 		= $creat_path.$code.'-'.$register_data['email'];
		$file_name		= $code.'-'.$register_data['email'];
		$make_path		= $default_path.'-'.$file_name;
		$path_mail 		= $register_data['email'];
		
		register_user($register_data);
		mkdir($make_path , 0777);
		mysql_query("UPDATE `users` SET `memory_location` = '$file_path' WHERE `email` = '$path_mail'");
		
		mkdir($make_path.'\profile'  , 0777);
			mkdir($make_path.'\profile\thumb'  , 0777);
		mkdir($make_path.'\cover'	  , 0777);
			mkdir($make_path.'\cover\thumb'  , 0777);
		mkdir($make_path.'\image_galery'  , 0777);
			mkdir($make_path.'\image_galery\thumb'  , 0777);
		
		
		header('Location:login.php?success=log');
		exit();
	}
}
?>
<?php if (empty($errors) === false){?>			
	<div class="row col-sm-10  col-md-offset-1 ">
		<div class="form-group">
		<div class="alert alert-danger" role="alert">
		  <!--<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"> </span>
		  <span class="sr-only">Error:</span>!-->
		  <span style="padding:0;"> <?php echo error_output($errors);?></span>
		  </div>
		  </div>
    </div>
<?php }?>		

<!-- Main Wrapper container !-->
<div class="container-fluid " id="lg_form">

		<center><a href="index.php"><img src="../public/image/background/logo_final.png"></a></center>

	<div class="col-sm-7 col-sm-offset-2">
		<form action="" method="POST" data-toggle="validator"  class="form-horizontal" >
			<!-- 1.1 FIRST NAME !-->
			<div class="row ">
				<div class="form-group">
					<label class="label-control col-sm-2 " for="inputFirstname"> First Name</label>
					<div   class="col-sm-10	">
					<input type="text" class="form-control" name="firstname" placeholder="Enter the first name" required>	
					</div>
					<!-- error showing !-->
					<span class="help-block with-errors"><i></i></span>
				</div>	
			</div>
			<!-- 1 !-->

			<!-- 1.2 SECOND NAME!-->
			<div class="row ">
				<div class="form-group">
					<label class="label-control col-sm-2 "> Last Name</label>
					<div   class="col-sm-10">
					<input type="text" class="form-control" placeholder="Enter the last name" name="secondname" required>	
					</div>
					<!-- error showing !-->
					<span class="help-block with-errors"><i></i></span>
				</div>	
			</div>
			<!-- 1 !-->

			<!-- 2 USERNAME!-->
			<div class="row ">
				<div class="form-group">
					<label class="label-control col-sm-2 "> User Name</label>
					<div   class="col-sm-10">
					<input type="text" class="form-control" placeholder="choose username for logging" name="username"required>	
					</div>
					<!-- error showing !-->
					<span class="help-block with-errors"><i></i></span>
				</div>
			</div>
			<!-- 2 !-->

			<!-- 3 EMAIL!-->
			<div class="row ">
				<div class="form-group">
					<label class="label-control col-sm-2 "> E-mail</label>
					<div   class="col-sm-10">
					<input type="email" class="form-control" placeholder="Example@me.com" name="email" data-error="email address is invalid"required >	
					</div>
					<!-- error showing !-->
					<span class="help-block with-errors"><i></i></span>
				</div>
			</div>
			<!-- 3 !-->

			<!-- 4 PASSWORD !-->
			<div class="row ">
				<div class="form-group">
					<label class="label-control col-sm-2 ">Password</label>
					<div   class="col-sm-10">
					<input type="password" class="form-control" data-minlength="6"placeholder="choose password" id="inputPassword" name="password"required>	
					</div>
					<!-- error showing !-->
					<span class="help-block with-errors"><i></i></span>
				</div>
			</div>
			<!-- 4 !-->

			<!-- 5 CONFORM PASSWORD !-->
			<div class="row ">
				<div class="form-group">
					<label class="label-control col-sm-2 ">C Password</label>
					<div   class="col-sm-10">
					<input type="password" class="form-control" placeholder="conform password" name="c_password" data-match="#inputPassword" data-match-error="Whoops, these don't match" required >	
					</div>
					<!-- error showing !-->
					<span class="help-block with-errors"><i></i></span>
				</div>
			</div>
			<!-- 5 !-->

			<!-- 6 PHONE NUMBER !-->
			<div class="row ">
				<div class="form-group">
					<label class="label-control col-sm-2 ">Phone Number</label>
					<div   class="col-sm-10">
					<input type="text" class="form-control" placeholder="0094774547140" name="phone_no"required>	
					</div>
					<!-- error showing !-->
					<span class="help-block with-errors"><i></i></span>
				</div>
			</div>
			<!-- 6 !-->

			<!-- 7 DOB!-->
			<div class="row ">

				<div class="form-group">
					<label class="label-control col-sm-2">DOB</label>
					<!-- month  !-->
						<div class="col-sm-2">
							<label class="sr-only" for="month">Enter Month</label> 
	            			<input type="text"name="month" class="form-control" placeholder="MM"  maxlength="2" required>
						</div>
					<!-- day  !-->
						<div class="col-sm-2">
							<label class="sr-only" for="day">Enter Day</label> 
	            			<input type="text"name="day" class="form-control" placeholder="DD"  maxlength="2" required>
						</div>
					<!-- Year  !-->
						<div class="col-sm-3">
							<label class="sr-only" for="year">Enter Year</label> 
	            			<input type="text"name="year" class="form-control" placeholder="YYYY" required maxlength="4" required>
						</div>
					<!-- error showing !-->
						<span class="help-block with-errors"><i></i></span>
				</div>
			</div>
			<!-- 7 !-->

			<!-- 8 CATEGORY!-->
			<!-- <div class="row col-sm-12">
				<div class="form-group">
					<label class="label-control col-sm-2 text-right"> Category</label>
					<div class="col-sm-7">
						<select name="category" class="form-control " required >
	                    	 	<option value=""> Select one</option>
	                    	 	<option value="cloths"> Cloths</option>
	                    	 	<option value="shoes"> Shoes</option>
	                    	 	<option value="dresses"> Dresses</option>
	                    	</select>
					</div>
					<!- error showing !-->
					<!--<span class="help-block with-errors"><i></i></span>
				</div>
			</div> -->
			<!-- 8 !-->

			<!-- 9 GENDER!-->
			<div class="row ">
				<div class="form-group">
					<label class="label-control col-sm-2 ">Gender</label>
					<div class="ccol-sm-10">
						<span class="radio-inline col-sm-3 "  >
								<input type="radio" name="gender" value="M" id="male" /> Male
						</span>
						<span class="radio-inline col-sm-3 ">
							<input type="radio" name="gender" value="F" id="female" /> Female
						</span>
					</div>
					<!-- error showing !-->
					
				</div>
			</div>
			<!-- 9 !-->

			<!-- 10 logging button!-->
			<div class="row ">
				<div class="row col-sm-8 col-md-offset-3">
						<button class="btn  btn-primary btn-block signup-btn" type="submit"  >
							 Create my account</button>
					</div>
			</div>
			<!-- !-->
		</form>
	</div>
</div>	
<!-- Main Wrapper container !-->
<script type="text/javascript" src="../public/js/validator.min.js"></script>
<script type="text/javascript" src="../public/js/form-script.js"></script>

