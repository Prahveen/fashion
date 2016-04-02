<?php
require_once '../core/init.php';
login_redirect();

include 'include/widgets/dashboard-user/top_nav.php';
?>
<!--wrapper!-->
  <?php include 'include/widgets/dashboard-user/side_nav.php';?>



<?php

  if (isset($_GET['dashboard']) or empty($_GET) === true) {
    include 'include/widgets/dashboard-user/dashboard/dashboard.php';//dashboard url
  }else if (isset($_GET['profile'])) {
    include 'include/widgets/dashboard-user/user-profile/profile.php';//profile url
  }else if (isset($_GET['inbox'])) {
    echo 'inbox'; //inbox url
  }else if (isset($_GET['sent'])){
    echo 'sent'; //outbox url
  }else if (isset($_GET['activity'])){
    include 'include/widgets/dashboard-user/myActivity/activity.php'; //my activty url
  }else if (isset($_GET['shop']) || isset($_GET['men']) || isset($_GET['women']) || isset($_GET['bnk'])){
    include 'include/widgets/dashboard-user/manShop/mennageMyShop.php'; //mennage my shop url   
  }else if (isset($_GET['s-inbox'])){
    include 'include/widgets/dashbord-user/support_inbox.php'; //support box url
  }else if (isset($_GET['settings'])){
    include 'include/widgets/dashbord-user/settings.php'; //setting url
  }
?>




  
<!--wrapper!-->

<!-- ############################################################################################!-->





</body>
