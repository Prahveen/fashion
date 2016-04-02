<?php
require_once '../core/init.php';
include 'include/overall/head.php';
?>

</head>
<body >
<div class="container-fluide" id="header" >
   <div  class="jumbotron" id="home_jumbo" >
      <!-- logging title functioning !-->
        <?php include 'include/login_title.php';?>
      <!-- logging title functioning !-->
      <div  class="container-fluide">
			<div class="row" >
            <!--logo side!-->
            <div class="col-xs-6 col-md-4">
               <div class="container">
                  <div class="navbar-header container">

                     <!--<a class="navbar-brand" href="#"  style="width:40px; height:40px;padding:0px;margin:0x;">!-->
      						<a href="index.php"><img src="../public/image/background/abc.png"></a>
      					<!--</a> !-->
                  </div>
               </div>
            </div>
            <!-- close the logo dec !-->

            <!--search bar and menu bar!-->
            <div class="col-xs-12 col-md-8" >
               <div class="container">
                  <div class="row">
                     <!-- add search form -->
                     <div class="container" id="search" >
                        <form class="navbar-form navbar-right" role="search" >
                            <div class="input-group"  >
                                <input type="text" class="form-control" placeholder="Search this site" id="s_bar_dec"   >
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default" id="s_bar_dec" >
                                    <span class="glyphicon glyphicon-search" id="s_bar_dec" ></span>
                                    </button>
                                </span>
                            </div>
                        </form>
                     </div>

                  </div>

                  <!-- Menu Bra !-->
                  <div class="row">
                    <nav class="navbar navbar-inverse container  "  role="navigation" id="nav_list" >
                 			<div class="container">
                        <div class="navbar-header">
                          <button type="button"class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Menu</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                        </div>
                 				<div  class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
                 					<ul class="nav navbar-nav navbar-right">
                 						<li ><a href="index.php" > Home </a> </li>
                 						<li ><a href="#" > About </a> </li>
                            <li ><a href="#" > Service </a> </li>
                            <li ><a href="#" > News </a> </li>
                            <li ><a href="blog.php" > Blog </a> </li>
                            <li ><a href="contact.php" style="padding-right:20px;"> Contact </a> </li>
                 					</ul>
                 				</div>
                 			</div>
               		 </nav>
                  </div>
               </div>
            </div>

         </div>
      </div>

      <hr class="container" id="breaker">
      <!-- after navigation slider decarion!-->
      <div class="container-fluid">
         <div class="row">
            <div class="col-xs-12 col-sm-6" >
					<div	class="container" id="slider_des">
					  <h1><span>HELLO !!</span>
						   <small>YOU ARE HERE</small></h1>
						<p >We can help you to build the valaue for your
						business.Well it is not only about the beautiful design but
						 also avvout ggreater functionality and flexibility.
						 Let us help you  with businesss
						</p>
					</div>
            </div>

            <!--slider!-->
            <div class="col-xs-12 col-sm-6" style="margin-top:2% ;">
               <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="opacity:0.7;" >
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                     <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                     <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                     <li data-target="#carousel-example-generic" data-slide-to="2"></li>
							       <li data-target="#carousel-example-generic" data-slide-to="3"></li>
							       <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                  </ol>

                 <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                     <div class="item active">
                        <img src="../public/image/slider/1.jpg" alt="1">
                           <div class="carousel-caption">
                              fashion hous proufly present
                           </div>
                     </div>
                     <div class="item">
                        <img src="../public/image/slider/2.jpg" alt="1">
                           <div class="carousel-caption">
                            fashion hous proufly present
                           </div>
                     </div>
                     <div class="item">
                        <img src="../public/image/slider/3.jpg" alt="1">
                           <div class="carousel-caption">
                            fashion hous proufly present
                           </div>
                     </div>
							<div class="item">
                        <img src="../public/image/slider/4.jpg" alt="1">
                           <div class="carousel-caption">
                            fashion hous proufly present
                           </div>
                     </div>
							<div class="item">
                        <img src="../public/image/slider/5.jpg" alt="1">
                           <div class="carousel-caption">
                            fashion hous proufly present
                           </div>
              </div>


                  </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
         </div>
      </div>
      </div>
   </div>

</div>
<div id="center_contain" >
    <div class="row text-center">
      <div class="col-sm-10 col-sm-offset-1">
          <h2>Designed for everyone, everywhere.</h2>
          <hr class="small">
          <div  style="padding-top:50px;">
              <div class="col-sm-4">
                  <div id="service-item">
                      <span class="fa-stack fa-5x">
                      <i class="fa fa-circle fa-stack-2x"></i>
                     <i class="fa  fa-stack-1x text-primary"><img src="../public/image/icon/king.png"></i>
                  </span>
                      <h4>
                          <strong>Popular Designers</strong>
                      </h4>
                      <p>Select your best match web designer form top reveiws </p>
                      <a href="designer.php" class="btn btn-light">More Detailes</a>
                  </div>
              </div>
              <div class="col-sm-4">
                  <div id="service-item">
                      <span class="fa-stack fa-5x">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa  fa-stack-1x text-primary"><img src="../public/image/icon/suit.png"></i>
                  </span>
                      <h4>
                          <strong>New Collections</strong>
                      </h4>
                      <p>Choose your own fashion and make it rich for your taste</p>
                      <a href="product-view.php" class="btn btn-light">More Detailes</a>
                  </div>
              </div>
              <div class="col-sm-4">
                  <div id="service-item">
                      <span class="fa-stack fa-5x">
                      <i class="fa fa-circle fa-stack-2x"></i>
                     <i class="fa  fa-stack-1x text-primary"><img src="../public/image/icon/credit.png"></i>
                  </span>
                      <h4>
                          <strong>Secure Shhoping</strong>
                      </h4>
                      <p>Most secure system to purchus your own choices, best prices .</p>
                      <a href="#" class="btn btn-light">More Detailes</a>
                  </div>
              </div>
              
          </div>
      </div>
    </div>
</div>

  <div class="container-fluide" id="footer_back_image">
    <div class="col-sm-4 col-sm-offset-1" id="footer_back_image_des">
      <img src="../public/image/background/logo_final.png">
    </div>

    <div class="col-sm-7" id="footer_back_image_des">
      <h3> Profile </h3>
      <p>wbsite probide description</p>
      
    </div>
  </div>







 
<?php require_once './include/overall/footer.php'; ?>
  
