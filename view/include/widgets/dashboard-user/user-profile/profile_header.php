<?php 

if(isset($_POST)){
  
  if(isset($_POST['profile']) ===true){
    echo $pic_cat = 'profile';
    upload_photo($pic_cat);

  }else if (isset($_POST['cover'])){
    $pic_cat = 'cover';

    upload_photo($pic_cat);
  }
}
?>

<form method="post" enctype="multipart/form-data">
<div class="container-fluid" >
 <!--  <div class="panel panel-default panel-body"> -->
    <!--cover and propic!-->
    <div class="col-sm-12" >
      <!--cover!-->
      <div class="col-sm-12" >
        <img src=<?php echo '../'.$user_data['memory_location'].$user_data['cover_main'];?> class="img-thumbnail center-block img-responsive"  id="cover_pic">
        <!--upload button!-->
        <span class="btn btn-file" id="cover_btn" data-toggle="collapse" data-target="#upload">
          <img src="../public/image/cam.png" alt="cover_button" class="img" name="upload" ><!--<input type="file" name="cover" align="right"> <span style=" font-family:Righteous;"></span>
        </span> !-->
      </div>
      <!--cover!-->
      <!--pro!-->
      <div class="col-sm-2 col-md-3" >
        <img src=<?php echo '../'.$user_data['memory_location'].$user_data['profile_main'];?> class="img-thumbnail center-block img-responsive pro_pic"  >
        <!--upload button!-->
        <span class="btn btn-file" id="pro_btn" data-toggle="collapse" data-target="#upload">
          <img src="../public/image/cam.png" alt="" class="img " name="upload"><!--<input type="file" name="profile" > <span style=" font-family:Righteous;"></span>
        </span>!-->
      </div>
      <!--pro!-->

      <!--form submiting button!-->
      <div class="col-sm-8">
        <div id="upload" class="collapse">
          <div class="input-group image-preview">
            <input placeholder="" type="text" class="form-control" disabled="disabled">
                  <span class="input-group-btn"> 
            <!-- image-preview-clear button -->
            <button type="button" class="btn btn-default image-preview-clear" style="display:none;"> <span class="glyphicon glyphicon-remove"></span> Clear </button>
            <!-- image-preview-input -->
            <div class="btn btn-default image-preview-input"> <span class="glyphicon glyphicon-folder-open"></span> <span class="image-preview-input-title">Browse</span>
              <input type="file" accept="image/png, image/jpeg, image/gif" name="file"/>
              <!-- rename it --> 
            </div>
            <span id="check"></span>
            </span> 
            </div>
        </div>
      </div> 
      <!--form submiting button!-->    
    </div>
    <script src="../public/js/jquery.js"></script>
    <script src="../public/js/upload_button_validation.js"></script>
    <script src="../public/js/jquery.js"></script>


  <!--cover and propic!-->
  <!-- </div> -->
</div>
</form>


  