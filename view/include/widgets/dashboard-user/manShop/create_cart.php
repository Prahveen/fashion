<?php
if (empty($_GET) === false) {

if (isset($_POST)) {
  if (!empty($_POST)) {
    //submiting the form
    global $path;//variable for image path
  

    if(isset($_FILES['file']['name']) === true) {
        if (empty($_FILES['file']['name']) === false) {


          $file_name = basename($_FILES['file']['name']);
          $tmp_location= $_FILES['file']['tmp_name'];
          $allowed =  array('jpg', 'jpeg' , 'png');
          $extention = strtolower(end(explode('.', $file_name)));
          $dir =$user_data['memory_location'];
          $pic_cat ='image_galery';
          $path =$user_data['memory_location'].'/'.$pic_cat.'/'.$file_name;

          if (in_array($extention, $allowed) == false) {
            $errors = 'Your file format doesn\'t support';
          }else{
            move_uploaded_file($tmp_location, '../'.$dir.'/'.$pic_cat.'/'.$file_name);
            upload_thumb($dir , $pic_cat , $file_name, $extention);//creating thumbnail photo and move it to thumb folder
            // upload_query($pic_cat,$file_name); //storing memory locations for each table
          }
        }
      }//photo section end

    $required_fields = array('item_title' , 'price' , 'item_quantity');

    //checking required fileds
    foreach ($_POST as $key => $value) {
       if (empty($value) && in_array($key, $required_fields) === true) {
          $errors[] = 'You need to fill all the columns *';
          break 1;
       }
     }//checking required fileds closed

     //creating variables for posting data
     //eg $item_title, $price, $phone, $item_quantity, $item_description,
    $form_content= array('item_title' , 'price' , 'phone', 'item_description','item_quantity');
    foreach ($form_content as $key => $value) {
     ${$value} = $_POST[$value];

    }

    if (empty($errors) === true) {
      $creat_cart_data = array(
          'item_cat'          => $main,
          'user_id'           => $user_data['user_id'],
          'item_title'        => $_POST['item_title'],
          'price'             => $_POST['price'],
          'phone'             => $_POST['phone'],
          'item_description'  => $_POST['item_description'],
          'item_quantity'     => $_POST['item_quantity'],
          'image_path'        => $path
      );
      submit_creat_cart_data($creat_cart_data);
      header('Location:'.$current_file.'?activity ');

    }


  }
}
}
?>

<div class="col-md-10">
  <div class="thumbnail">
    <form method="post" enctype="multipart/form-data" class="disabled">

      <img  id="preview" src="../public/image/shop-bg.png" style="width:100%;min-height:200px;background-image:url('../public/image/shop-bg.png')">
      <div class="caption">
      <div class="page-header"><h3><?php echo $main.'/'.$name;?></h3></div>
          <p><input type="file" name="file" class="form-control" disabled="true" id="file"></p>

          <h3><input type="text" class="form-control" placeholder="Title" name="item_title" disabled="true"></h3>
          <p><div class="input-group"><!-- Input Price !-->
              <span class="input-group-addon"><i class="fa fa-usd"></i></span>
              <input type="text" class="form-control" name="price" disabled="true">
              <span class="input-group-addon">.00</span>
          </div></p>

          <p><div class="input-group"> <!-- Phne no !-->
            <span class="input-group-addon"><i class="fa fa-phone"> </i></span>
            <input type="text" name="phone" class="form-control" name="phone" disabled="true">
          </div></p>
          <p><input type="text" class="form-control" name="item_quantity" placeholder="Pieces for sale" disabled="true"></p>
          <p>Add a disctription</p>
          <p><textarea class="form-control" name="item_description" disabled="true"></textarea></p>
          <input type="submit" class="form-control btn btn-primary" value="Add to list" disabled="true">

      </div>
    </form>
  </div>
</div>

<!-- enabling form !-->
<script src="../public/js/jquery.js"></script>
<script src="../public/js/cart_form_validation.js" ></script>
