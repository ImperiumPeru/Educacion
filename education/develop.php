<?php
class FormDevelop{
	public function FormDevelopShow($userDat,$userPerson,$userWatch,$ListItems){
	    
		$userState=0;
		$viewSize=count($ListItems);
		$userWatcheSize=count($userWatch);

		$namePerson=explode(" ",$userPerson[0][1]);			 
	?>	

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Legacy VIP Educación</title>
	<link rel="shortcut icon" type="image/png" href="./images/LOGO-LEGACY.png"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Website LEGACY VIP" />
	<meta name="keywords" content="Website" />
	<meta name="author" content="Andres" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/hover.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Incon Font-awesone -->
	<script src="https://kit.fontawesome.com/99fa133a01.js" crossorigin="anonymous"></script>
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>-->
	<script src="js/respond.min.js"></script>
	<!--[endif]-->
	
    
	</head>
	<body>

	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		
		<!-- MAIN -->
		<aside id="fh5co-aside" role="complementary" class="border js-fullheight">
		<h4 align="right"><a href="profile/index.php" width="100px" height="100px" style="cursor:pointer;text-decoration:none;"><span><strong><?php echo $namePerson[0]?><i class="fas fa-user-cog"></i></strong></span></a></h4>
			<h1 id="fh5co-logo"><a href="index.php"><img src="./images/LOGO-LEGACY.png" alt="LOGO LEGACY VIP" width="100px" height="100px"></a></h1>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					<li class="fh5co-active">
					    <form action="./educate.php" method="POST">
					        <input type="hidden" name="o" value="1">
					        <button name="btn_home" type="submit" class="btn-link hvr-underline-from-center " style="text-decoration:none;color:black;">INICIO</button>
					    </form>
					    </li>
					<li>
					    <form action="./educate.php" method="POST">
					        <input type="hidden" name="o" value="2">
					        <button name="btn_course" type="submit" class="btn-link hvr-underline-from-center" style="text-decoration:none;color:black;">CURSOS</button>
					    </form>
					    </li>
					<li>
					    <form action="./educate.php" method="POST">
					        <input type="hidden" name="o" value="3">
					        <button name="btn_develop" type="submit" class="btn-link hvr-underline-from-center" style="text-decoration:none;color:black;">DESARROLLO PERSONAL</button>
					    </form>
					</li>
					<li>
					    <form action="./contact.php" method="POST">
					        <input type="hidden" name="o" value="4">
					        <button name="btn_contact" type="submit" class="btn-link hvr-underline-from-center" style="text-decoration:none;color:black;">SOPORTE</button>
					    </form>
					</li>
					<li>
					    <form action="logout.php">
					        <button name="btn_logout" type="submit" class="btn-link hvr-underline-from-center" style="text-decoration:none;color:black;">CERRAR SESIÓN</button>
					    </form>
					</li>
				</ul>
			</nav>

			<div class="fh5co-footer">
				<p><small><span>&copy; 2019 Legacy VIP - Todos los derechos reservados.</span> <span>Designed by <a href="https://www.facebook.com/andresalv.alvarez" target="_blank">AAT</a> </span> </small></p>
				<ul>
					<li><a href="#"><i class="icon-facebook"></i></a></li>
					
					<li><a href="#"><i class="icon-instagram"></i></a></li>
					
				</ul>
				
			</div>

		</aside>
        <!-- MAIN FINISH-->
        
        <!-- Contain -->

		<div id="fh5co-main" style="padding-top:5%;">
            <div class="col-md-8" align="center" align-content="center">
             <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft"><span>DESARROLLO PERSONAL</span></h2>   
            </div>
            <div>
                <div>
                    
                    <div class="col-md-5">
                        <div class="fh5co-narrow-content">
				        <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft"><span>TEMARIO</span></h2>
				            <div class="row animate-box" data-animate-effect="fadeInLeft">
				    <?php
                    
				    for($i=0;$i<$viewSize;$i++){

				        echo ('<!------------------------------------------------------------------------------->
				        <div class="col-md-12 col-sm-6 col-xs-6 col-xxs-12 work-item">
                            <form action="Option/option.php" method="POST">
                            	
                            	<input type="hidden" name="id" value="'.$ListItems[$i][0].'">
                            	<input type="hidden" name="link" value="'.$ListItems[$i][1].'">
                            	<input type="hidden" name="option" value="Develop">
                            	<button name="btn_select" type="submit" class="btn-link btn-no-watch text-left" style="text-decoration:none;"><i class="icon-watch far fa-play-circle"></i>'.$ListItems[$i][2].'</button>
                            </form>
                            </div>
                        <!------------------------------------------------------------------------------->
				        ');
				    }
				
				    ?>
				</div>
			            </div>
                    </div>
                </div>
            
		    </div>
		  <!-- Contain finish-->
	    </div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>

	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>
<?php 

}
    
}
?>