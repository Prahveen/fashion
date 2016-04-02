
<!--dashbord!-->
  <!--side navigation !-->
  
  <div  class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
    <ul class="nav navbar-nav side-nav">
        <!--sidebar header!-->
        <div>
          <div class="thumbail">
            <img src=<?php echo '../'.$user_data['memory_location'].$user_data['cover_main'];?> alt="..." style="width:100%;height:150px;  ">
              <center>
                <a href="#"><img class="profile_image" src=<?php echo '../'.$user_data['memory_location'].$user_data['profile_thumbnail'];?> >  </a>
              </center>
          </div>
        <center><p style="color:#fff;"><?php echo ucfirst($user_data['username']);?></p></center>
          </div>
          <!--side bar header!-->
        
        <li class="active-nav"><!-- dashboard!-->
              <a href=<?php echo $current_file.'?dashboard'?>><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        </li>

          <li class=""><!-- Profile!-->
              <a href=<?php echo $current_file.'?profile'?>><i class="fa fa-fw fa-user"></i> Profile</a>
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
              <a href=<?php echo $current_file.'?activity'?>><i class="fa fa-fw fa-bell"></i> My Activity</a>
          </li>
  
          <li ><!-- Mennage my shop!-->
              <a href=<?php echo $current_file.'?shop'?>><i class="fa fa-fw fa-shopping-cart"></i>Manage my shop </a>
          </li>
          <li ><!--Support Inbox!-->
              <a href=<?php echo $current_file.'?s_inbox'?>><i class="fa fa-fw fa-stethoscope"></i> Support Inbox </a>
          </li>
           <li ><!--Settings!-->
              <a href=<?php echo $current_file.'?settings'?>><i class="fa fa-fw fa-cogs" ></i>Account Settings </a>
          </li>
      </ul>
    </div>  
  <!--side navigation !-->