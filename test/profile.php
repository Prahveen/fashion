
	
<!DOCTYPE html>
<html>
<head>
  <title>Admin panel</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="fashionable house">
  <meta name="keywords" content="fashion house">
  <meta name="author" content="adrian">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link href="../public/css/dashboard.css" rel="stylesheet">
  <link href="../public/css/profile.css" rel="stylesheet">
  <link href="../public/css/button.css" rel="stylesheet">
  <link href="../public/css/catagory.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  

</head>
<body>
<div class="wrapper ">
  <!--navigation top!-->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluide">
    <!--navbaar header!-->
    <div class="navbar-header">
      <button type="button"class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only"> Menu </span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
      </button>

      <a href="index.php"><img src="../public/image/background/qw.png"></a>     
    </div>
    <!--navbar heaer !-->

    <!-- top menu other content !-->
    
    <ul class="nav navbar-right top-nav">
      <!-- Message !-->
      <li class="dropdown">
        <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge pull-right badge-success">2</span></a>
        <!-- Inside Message !-->
        <ul class="dropdown-menu message-dropdwon">
          <li class="dropdown-header message-preview">You have 4 new messages !</li>
          <li class="message-preview">
            <a href="">
              <div class="media">
                <span class="pull-left">
                  <img class="media-object img-circle" src=<?echo ucfirst($user_data['username']);?> alt=""style="width:50px;height:50px;">
                </span>
                <h5 class="media-heading"><strong>Adrian Prahveen</strong></h5>
                <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 P</p>
                                <p>this is the first message ...</p>
              </div>
            </a>
          </li>

          <li class="message-preview">
            <a href="">
              <div class="media">
                <span class="pull-left">
                  <img src="a.png" class="media-object img-circle" style="width:50;height:50px;">
                </span>
                <h5 class="media-heading"><strong>Ghauthatam</strong></h5>
                <p class="small text-muted"><i class="fa fa-clock-o"></i>Today at 00:01</p>
                <p>what the fuck you doing</p>
              </div>
            </a>
          </li>
        </ul>
        <!--Inside Message !-->
      </li>
      <!-- Message !-->
      
      <!-- Notification !-->
      <li class="dropdown">
        <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="badge pull-right badge-success">4</span></a>
        <ul class="dropdown-menu message-dropdown">
          <li class="dropdown-header notification-preview">You have 3 pending tasks !</li>
          <li class="notification-preview">
            <a href="">
              <i class="fa fa-tag"></i>
              <p class="small text-muted pull-right"><i class="fa fa-clock-o"></i>Today at 00:01</p>
              <span> You have reached 24likes</span>
              
            </a>
          </li>
          <li class="notification-preview">
            <a href="">
              <i class="fa fa-tag"></i>
              <p class="small text-muted pull-right"><i class="fa fa-clock-o"></i>Today at 00:01</p>
              <span> You have reached 24likes</span>
            </a>
            
          </li>
        </ul>
      </li>
      <!-- Notification !-->

      <!-- logged user!-->
      <li class="dropdown image">
        <a href="" class="dropdown-toggle" data-toggle="dropdown">
        <span>thiru</span><i class="fa fa-angle-down"></i>
          <img class=" img-circle" src=../view/upload/-6206be0a5bf1cdcf07821bb35090505c-thiru@gmail.com/profile/thumb/12065823_1643018365948337_1171613850154864711_n.jpg.thumb.jpg>
        </a>
        <!-- Inside the notification !-->
          <ul class="dropdown-menu user-dropdown">
            
            <li><!--profile!-->
              <a href=profile.php?profile><i class="fa fa-user"></i><span>Profile</span></a>
            </li>

            <li><!--inbox!-->
              <a href=""><i class="fa fa-envelope"></i><span>Inbox</span><span class="badge pull-right badge-success">4</span></a>
            </li>

            <li><!--Settings!-->
              <a href=""><i class="fa fa-fw fa-cogs"></i><span>Settings</a>
            </li>
            <li class="divider"></li>
            <li><!--log out!-->
              <a href="../controllers/logout.php"><i class="fa fa-sign-out"></i><span>Log out</span></a>
            </li>
          </ul>
        <!-- Inside the notification !-->
      </li>
      <!-- logged user!-->
    </ul>
    <!-- top menu other content !-->
    </div>
  </nav>
<!--navication top!--><!--wrapper!-->
  
<!--dashbord!-->
  <!--side navigation !-->
  
  <div  class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
    <ul class="nav navbar-nav side-nav">
        <!--sidebar header!-->
        <div>
          <div class="thumbail">
            <img src=../view/upload/-6206be0a5bf1cdcf07821bb35090505c-thiru@gmail.com/cover/83CBC133-ECCC-41AB-88ED-6E9199A1A365-25076-0000164584C0635F.jpg  alt="..." style="width:100%;height:150px;  ">
              <center>
                <a href="#"><img class="profile_image" src=../view/upload/-6206be0a5bf1cdcf07821bb35090505c-thiru@gmail.com/profile/thumb/12065823_1643018365948337_1171613850154864711_n.jpg.thumb.jpg >  </a>
              </center>
          </div>
        <center><p style="color:#fff;">Thiru</p></center>
          </div>
          <!--side bar header!-->
        
        <li class="active-nav"><!-- dashboard!-->
              <a href=profile.php?dashboard><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        </li>

          <li class=""><!-- Profile!-->
              <a href=profile.php?profile><i class="fa fa-fw fa-user"></i> Profile</a>
          </li>
          <li ><!-- Messages!-->
              <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-envelope"></i> Message <i class="fa fa-fw fa-caret-down"></i></a>

              <ul id="demo" class="collapse">

                <li>
                  <a href="">Inbox</a>
                </li>
                  <li>
                  <a href="">Sent</a>
                </li>
              </ul>
          </li>
          <li ><!-- Avtivity !-->
              <a href=profile.php?activity><i class="fa fa-fw fa-bell"></i> My Activity</a>
          </li>
  
          <li ><!-- Mennage my shop!-->
              <a href=profile.php?shop><i class="fa fa-fw fa-shopping-cart"></i>Manage my shop </a>
          </li>
          <li ><!--Support Inbox!-->
              <a href=profile.php?s_inbox><i class="fa fa-fw fa-stethoscope"></i> Support Inbox </a>
          </li>
           <li ><!--Settings!-->
              <a href=profile.php?settings><i class="fa fa-fw fa-cogs" ></i>Account Settings </a>
          </li>
      </ul>
    </div>  
  <!--side navigation !-->



<div id="page-wrapper">
    <div class="container-fluid">
    <!--page heading!-->
        <div class="row">
           <div class="col-md-12">
           
<form method="post" enctype="multipart/form-data">
<div class="container-fluid" >
 <!--  <div class="panel panel-default panel-body"> -->
    <!--cover and propic!-->
    <div class="col-sm-12" >
      <!--cover!-->
      <div class="col-sm-12" >
        <img src=../view/upload/-6206be0a5bf1cdcf07821bb35090505c-thiru@gmail.com/cover/83CBC133-ECCC-41AB-88ED-6E9199A1A365-25076-0000164584C0635F.jpg  class="img-thumbnail center-block img-responsive"  id="cover_pic">
        <!--upload button!-->
        <span class="btn btn-file" id="cover_btn" data-toggle="collapse" data-target="#upload">
          <img src="../public/image/cam.png" alt="cover_button" class="img" name="upload" ><!--<input type="file" name="cover" align="right"> <span style=" font-family:Righteous;"></span>
        </span> !-->
      </div>
      <!--cover!-->
      <!--pro!-->
      <div class="col-sm-2 col-md-3" >
        <img src=../view/upload/-6206be0a5bf1cdcf07821bb35090505c-thiru@gmail.com/profile/12065823_1643018365948337_1171613850154864711_n.jpg  class="img-thumbnail center-block img-responsive pro_pic"  >
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


             			<!--LEFT side content!-->
 	 <div class="col-md-3"> <!-- content START !-->
    	<div class="well">
  			<ul class="list-group" >
    <!-- Profile!-->
    <a href="#"><li class="list-group-item"><span class="glyphicon glyphicon-home" id="menu_icon"> </span> <span class=""> </span>Profile</li></a>
    <!-- Messages!-->
    <a href="#"><li class="list-group-item"><span class="glyphicon glyphicon-envelope" id="menu_icon"> </span><span class="badge">5</span>Messages</li></a>
    <!--About!-->
    <a href="#"><li class="list-group-item"><span class="glyphicon glyphicon-info-sign" id="menu_icon"> </span><span class="badge">5</span>About</li></a>
    <!-- Notification!-->
    <a href="#"><li class="list-group-item"><span class="glyphicon glyphicon-globe" id="menu_icon"> </span><span class="badge">14</span>Notification</li></a>
    <!-- Gallery!-->
    <a href="#"><li class="list-group-item"><span class="glyphicon glyphicon-picture" id="menu_icon"> </span><span class="badge">2</span>Gallery</li>
    <!-- Settings!-->
    <a href="#"><li class="list-group-item"><span class="glyphicon glyphicon-cog" id="menu_icon"> </span><span class="">  </span>Settings</li></a>
    <!-- Help!-->
    <a href="#"><li class="list-group-item"><span class="glyphicon glyphicon-wrench" id="menu_icon"> </span><span class="">  </span>Help</li></a>
    <!-- Support inbox!-->
    <a href="#"><li class="list-group-item"><span class="glyphicon glyphicon-envelope" id="menu_icon"> </span><span class="badge">2</span>Support Inbox</li></a>

</ul>

  		</div>				<!-- content CLOSED!-->	
	</div>
 	<!--LEFT side content!-->

<!-- #######################################################################################!-->

  <!--Middle Content!-->
  <div class="col-sm-6">
    <div class="well"><!--content START!-->
  			middle content    </div>			  <!--content CLOSED!-->
  </div>
  <!--Middle content!-->

  
<!-- #######################################################################################!-->

  <!--Right side content!-->
  <div class="col-sm-3">
    <div class="well">
  			right side    </div>
  </div>
  <!--Right side content!-->
  


           </div>
        </div>
    </div>
    
</div>



  
<!--wrapper!-->

<!-- ############################################################################################!-->





</body>
