

<?php
require_once '../core/init.php';
include 'include/overall/head.php';
?>
<style >
	#footer_back_image{
		 background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('../public/image/background/3.jpg');
		height:300px;	
		transition:All 1.3332s ease-in-out;
		position:relative;

	}
	#footer_back_image:hover{
		
		background: linear-gradient( rgba(0, 0, 0, 0.5),
		ttransition:All 1.3332s ease-in-out;

	}

	#footer_back_image #footer_back_image_des{display: none;}
	#footer_back_image:hover #footer_back_image_des{display: block;transition:All 1.3332s ease-in-out;}


  body {
      position: relative; 
  }
  #section1 {padding-top:50px;height:500px;color: #fff; background-color: #1E88E5;}
  #section2 {padding-top:50px;height:500px;color: #fff; background-color: #673ab7;}
  #section3 {padding-top:50px;height:500px;color: #fff; background-color: #ff9800;}

</style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" >
<div class="container-fluide" id="header" >
   <div  class="jumbotron" id="home_jumbo section1">
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
      						<a href="index.php"><img src="../public/image/background/aes.png"></a>
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
                            <li ><a href="#" > Blog </a> </li>
                            <li ><a href="#" style="padding-right:20px;"> Contact </a> </li>
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
gfhyf
<div class="container-fluide" id="footer_back_image section2">

	<div class="col-sm-3 col-sm-offset-1" id="footer_back_image_des" >
		<img src="../public/image/background/logo.png">
	</div>

	<div class="col-sm-7" id="footer_back_image_des">
		<h3> Profile </h3>
		<p>wbsite probide description</p>
		
	</div>
</div> 






<?php require_once './include/overall/footer.php'; ?>