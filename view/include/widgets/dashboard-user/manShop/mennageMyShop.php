<?php 

if (isset($_GET)) { 
  global $remain;
  global $main;
  global $name;
  $cat_list =array('women' , 'men', 'bnk');//add main catagory list here, but still include some of them only explaine the concept
  //cheking url
  
  $main = 'Select the catogry first';
  foreach($cat_list as $value){
    if (isset($_GET[$value]) == $value ) {
      $main = $value;
      //adding sub menu to cat list (upload section)
      $query = mysql_query("SELECT * FROM `clothes` WHERE $main = 'y' ");
      while ($row = mysql_fetch_array($query)) {
        if ($_GET[$main] == $row['value']) {
          $name= $row['sub_name'];
        }   
      }
      
    }    
  }
}
?>

<div id="page-wrapper">
  <div class="container-fluid">
    <!--page heading!-->
        <div class="row">
          <div class="col-md-12">
            <h1 class="page-header">Mannage My Shop <small>Overview</small></h1>  
          </div>
        </div>
        <!--page heading!-->

        <!--navigational hierarchy!-->
          <ol class="breadcrumb">
            <li><a href=<?php echo $current_file.'?dashboard'?>><i class="fa fa-fw fa-dashboard"></i> Dashboard</a></li>
            <li class="active"><i class="fa fa-fw fa-shopping-cart"></i> Mannage my shop </li>
            <div class="pull-right" >
              <!--how many upload have to remain !--><?php echo upload_remain();?>
            </div>
          </ol>

        <!--navigational hierarchy!-->

        <!-- category selection !-->
      <div class="row">
        <div class="col-md-12">



<?php if(upload_remain() !== false ){?>        

          <!--cat sellection!-->
          <?php include 'cat_list.php';?>
          <!--cat sellection!-->
          <!--upload sellection!-->
          <div class="col-md-6">
            <?php include 'create_cart.php';?>
          </div>
          <!--upload sellection!-->


        </div>
      </div>
        <!-- category selection !-->
  </div>
<?php }else{?>
  
  <div class="col-sm-8 col-md-offset-2 ">
    <center>
      <div class="alert alert-danger ">Your adding item list full, if you wish to upload please mange your activity or upgrade you account</div>
    </center>
  </div>

<?php }?>
</div>


