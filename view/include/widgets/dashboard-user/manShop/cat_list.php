<div class="col-md-6">
  <div id='cssmenu'>
    <ul>
    <!-- Women clothing!-->
       <li class='active'><a href=''><i class="fa fa-angle-right pull-right"></i><span>Women</span></a>
          <ul>
            <?php 
              $query = mysql_query("SELECT * FROM `clothes` WHERE `women` = 'y'");
              while($row = mysql_fetch_array($query)){   
                echo "<li><a href='profile.php?women=".$row['value']."'><span>".$row['sub_name']."</span></a></li>";
              }
            
            ?>
             
             <!-- <li><a href='http://localhost/fashion/view/profile.php?women=dress'><span>dress</span></a></li> -->
          </ul>
       </li>
    <!-- Women clothing!-->
    <!-- Men clothing!-->
       <li class='active has-sub'><a href='#'><i class="fa fa-angle-right pull-right"></i><span>Men</span></a>
          <ul>
            <?php 
              $query = mysql_query("SELECT * FROM `clothes` WHERE `men` = 'y'");
              while($row = mysql_fetch_array($query)){   
                echo "<li><a href='profile.php?men=".$row['value']."'><span>".$row['sub_name']."</span></a></li>";
              }
            
            ?>
          </ul>
       </li> 
    <!-- Men clothing!-->
    <!--Kids & Baby!-->
      <li class='active has-sub'><a href='#'><i class="fa fa-angle-right pull-right"></i><span>Kids & Baby</span></a>
          <ul>
            <?php 
              $query = mysql_query("SELECT * FROM `b_n_k`");
              while($row = mysql_fetch_array($query)){   
                echo "<li><a href='profile.php?bnk=".$row['value']."'><span>".$row['sub_name']."</span></a></li>";
              }
            
            ?>
          </ul>
       </li>
    <!-- Kids & Baby!-->          
    <!--Shoes!-->
      <li class='active has-sub'><a href='#'><i class="fa fa-angle-right pull-right"></i><span>Shoes</span></a>
          <ul>
            <!-- say somthing here!-->
          </ul>
       </li>
    <!-- Shoes!-->          
    <!--Handbags & Accessories!-->
      <li class='active has-sub'><a href='#'><i class="fa fa-angle-right pull-right"></i><span>Handbags & Accessories</span></a>
          <ul>
            <!-- say somthing here!-->
          </ul>
       </li>
    <!-- Handbags & Accessories!-->
    </ul>
  </div>
</div>