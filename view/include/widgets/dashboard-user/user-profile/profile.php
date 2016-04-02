<?php 

if(isset($_POST)){
  
  if(isset($_POST['profile']) ===true){
    $pic_cat = 'profile';
    upload_photo($pic_cat);

  }else if (isset($_POST['cover'])){
    $pic_cat = 'cover';
    upload_photo($pic_cat);
  }
}
?>

<div id="page-wrapper">
    <div class="container-fluid">
    <!--page heading!-->
        <div class="row">
           <div class="col-md-12">
           <?php include 'include/widgets/dashboard-user/user-profile/profile_header.php';?>
           			<!--LEFT side content!-->
               	<div class="col-md-3"> <!-- content START !-->
                  	<div class="well">
                			<?php include 'include/widgets/dashboard-user/user-profile/l_side_content.php';?>
                		</div>				<!-- content CLOSED!-->	
              	</div>
               	<!--LEFT side content!-->



                <!--Middle Content!-->
                <div class="col-sm-8">
                  <div class="well"><!--content START!-->
                			<?php include 'include/widgets/dashboard-user/user-profile/middle_content.php';?>
                  </div>			  <!--content CLOSED!-->
                </div>
                <!--Middle content!-->
           </div>
        </div>
    </div>
    
</div>
<script src="../public/js/jquery.js"></script>
<script src="../public/js/upload_button_validation.js"></script>
