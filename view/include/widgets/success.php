<?php


?>
</head>
<body>
	<div class="container" >
		<div class="alert alert-success alert-dismissible " role="alert" style="margin-top:10%;">
			<div class="col-md-offset-3">
		  		<strong class="glyphicon glyphicon-ok "></strong> 
			  		<?php if(isset($_GET['activated'])) {?>
			  			Successfully activated your account <a href="../view/index.php" class="alert-link">Vist Home</a>

			  		<?php
			  			}else if(isset($_GET['success']) && $_GET['success'] === 'log'){?>
			  			You have been registered and to activate your account vist your email <a href="../view/index.php" class="alert-link">Vist Home</a>
			  		<?php 

		  		
		  			}?>
			</div>
		</div>
	</div>

</body>
</html>