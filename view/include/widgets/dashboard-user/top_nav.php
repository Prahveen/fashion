
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
        <span><?php echo $user_data['username'];?></span><i class="fa fa-angle-down"></i>
          <img class=" img-circle" src=<?php echo '../'.$user_data['memory_location'].$user_data['profile_thumbnail'];?>>
        </a>
        <!-- Inside the notification !-->
          <ul class="dropdown-menu user-dropdown">
            
            <li><!--profile!-->
              <a href=<?php echo $current_file.'?profile'?>><i class="fa fa-user"></i><span>Profile</span></a>
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
<!--navication top!-->