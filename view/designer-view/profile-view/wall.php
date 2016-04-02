
<?php  $user = user_data($user_id , 'firstname' , 'secondname');?>
<h3 ><?php echo ucfirst($user['firstname']).' '.ucfirst($user['secondname']);?></h3>
<div id="hr_line"></div>
<div class="well">
	<textarea class="form-control" placeholder="Status" aria-describedby="basic-addon2"></textarea>
	<br>
	<button class="btn btn-primary">post</button>
</div>



<div class="well">
	<p>hello !!</p>
		<textarea class="form-control" placeholder="Comment here" aria-describedby="basic-addon2"></textarea>
</div>