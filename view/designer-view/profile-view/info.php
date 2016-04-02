<?php
	$result =mysql_query("SELECT * FROM `fullprofileuser` WHERE `user_id`=$user_id ");
		while ($row = mysql_fetch_array($result)) {

			$name = ucfirst($row['firstname']).''.ucfirst($row['secondname']);
			$email = $row['email'];
			$phone = $row['phone_no'];
			$gender=$row['gender'];
			if ($gender === 'M') {
				$gender = 'Male';
			}else if ($gender == 'f') {
				$gender = 'Female';
			}
	?>


		<div class="container">
			<div class="row">
				<label class="label-control col-sm-2 "> Name</label>
				<label class="label-control col-sm-2 "><?php echo $name ?></label>
			</div>
			<div class="row">
				<label class="label-control col-sm-2 "> Email</label>
				<label class="label-control col-sm-2 "> <?php echo $email ?></label>
			</div>
			<div class="row">
				<label class="label-control col-sm-2 "> Phone No</label>
				<label class="label-control col-sm-2 "> <?php echo $phone ?></label>
			</div>
			<div class="row">
				<label class="label-control col-sm-2 "> Gender</label>
				<label class="label-control col-sm-2 "><?php echo $gender ?></label>
			</div>
		</div>
<?php } ?>