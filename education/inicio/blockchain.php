<?php
                        
                        session_start();
                        $name="blockchain";
                        $listHome=$_SESSION['ListItemsHomess'];
                        $countHome=count($listHome);
                        $countView=count($viewHome);
                        $userPerson=$_SESSION['personinfo'];
                        
                        //General information
                        //**********************************************************
                        
                        //Agree to this page
                        $listIdHome=array();//large a
                        $listNameHome=array();//large a
                        //**********************************************************
                        
                        //Save in local array
                        for($i=0;$i<$countHome;$i++){
                            
                            array_push($listIdHome,$listHome[$i][0]);
                            array_push($listNameHome,$listHome[$i][1]);
                        }
                        //**********************************************************
                        
                        //Search my position
                        $Position=array_search($name,$listNameHome,false);
                        //**********************************************************
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Legacy VIP Educación</title>
	<link rel="shortcut icon" type="image/png" href="../images/LOGO-LEGACY.png"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Website LEGACY VIP" />
	<meta name="keywords" content="Website" />
	<meta name="author" content="Legacy VIP" />

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

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="../css/style.css">
	<!-- Incon Font-awesone -->
	<script src="https://kit.fontawesome.com/99fa133a01.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/hover.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		
		<!-- MAIN -->
		<aside id="fh5co-aside" role="complementary" class="border js-fullheight">
		<h4 align="right"><a href="../profile/index.php" width="100px" height="100px" style="cursor:pointer;text-decoration:none;"><span><strong><?php echo $userPerson[0][1]?><i class="fas fa-user-cog"></i></strong></span></a></h4>
			<h1 id="fh5co-logo"><a href="../index.php"><img src="../images/LOGO-LEGACY.png" alt="LOGO LEGACY VIP" width="100px" height="100px"></a></h1>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					<li class="fh5co-active">
					    <form action="../educate.php" method="POST">
					        <input type="hidden" name="o" value="1">
					        <button name="btn_home" type="submit" class="btn-link hvr-underline-from-center " style="text-decoration:none;color:black;">INICIO</button>
					    </form>
					    </li>
					<li>
					    <form action="../educate.php" method="POST">
					        <input type="hidden" name="o" value="2">
					        <button name="btn_course" type="submit" class="btn-link hvr-underline-from-center" style="text-decoration:none;color:black;">CURSOS</button>
					    </form>
					    </li>
					<li>
					    <form action="../educate.php" method="POST">
					        <input type="hidden" name="o" value="3">
					        <button name="btn_develop" type="submit" class="btn-link hvr-underline-from-center" style="text-decoration:none;color:black;">DESARROLLO PERSONAL</button>
					    </form>
					</li>
					<li>
					    <form action="../contact.html" method="POST">
					        <input type="hidden" name="o" value="4">
					        <button name="btn_contact" type="submit" class="btn-link hvr-underline-from-center" style="text-decoration:none;color:black;">SOPORTE</button>
					    </form>
					</li>
					<li>
					    <form action="../logout.php">
					        <button name="btn_logout" type="submit" class="btn-link hvr-underline-from-center" style="text-decoration:none;color:black;">CERRAR SESIÓN</button>
					    </form>
					</li>
				</ul>
			</nav>

			<div class="fh5co-footer">
				<p><small><span>&copy; 2019 Legacy VIP - Todos los derechos reservados.</span> <span>Designed by <a href="https://www.facebook.com/andresalv.alvarez" target="_blank">AAT</a> </span> </small></p>
				<ul>
					<li><a href="#"><i class="icon-facebook"></i></a></li>
					<li><a href="#"><i class="icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
					<li><a href="#"><i class="icon-linkedin"></i></a></li>
				</ul>
				
			</div>

		</aside>
        <!-- MAIN FINISH-->

		<div id="fh5co-main">

			<div class="fh5co-narrow-content">
				<div class="row">

					<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<h1>¿QUE ES BLOCKCHAIN?</h1>
						<figure class="text-center">
							<iframe style="max-width:100%" width="1200px" height="550px" src="https://www.youtube.com/embed/Yn8WGaO__ak?rel=0&showinfo=0?rel=0&amp;autoplay=1 " frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>	
						</figure>
					</div>
					
					<div class="col-md-8 col-md-offset-2 animate-box" data-animate-effect="fadeInLeft">
						
						<div style="text-align: justify">
							<!------------------------------------------------------------------------------------------->

							<h1>&nbsp;&nbsp;BLOCKCHAIN</h1>
							
								<p> 
									La cadena de bloques, más conocida por el término en inglés blockchain, 
									es un registro único, consensuado y distribuido en varios nodos de una
									red. En el caso de las criptomonedas, podemos pensarlo como el libro 
									contable donde se registra cada una de las transacciones. </br>

									Su funcionamiento puede resultar complejo de entender si profundizamos 
									en los detalles internos de su implementación, pero la idea básica es 
									sencilla de seguir. </br>
								<ol>
								 <strong> EN CADA BLOQUE SE ALMACENA: </strong> 
								<li type="circle"> una cantidad de registros o transacciones válidas. 
								<li type="circle">información referente a ese bloque. 
								<li type="circle"> su vinculación con el bloque anterior y el bloque siguiente a 
								través del hash de cada bloque ─ un código único que sería como la
								huella digital del bloque.
								</ol>
								</p>
							<!------------------------------------------------------------------------------------------->
							<h1> ¿Por qué blockchain es tan segura? </h1>
								<p>
										Al ser una tecnología distribuida, donde cada nodo de la red almacena una
										copia exacta de la cadena, se garantiza la disponibilidad de la información
										en todo momento. En caso de que un atacante quisiera provocar una denegación
										de servicio, debería anular todos los nodos de la red, ya que basta con que 
										al menos uno esté operativo para que la información esté disponible.

								</p>	
							<!------------------------------------------------------------------------------------------->

							<h1> ¿Qué otros usos se le da a blockchain? </h1>
								<p>
										Básicamente, cualquier tipo de información que necesite ser preservada de forma 
										intacta y que deba permanecer disponible puede ser almacenada en blockchain de 
										manera segura, descentralizada y más económica que a través de intermediarios. 
										Además, si esa información se guarda cifrada se puede garantizar su confidencialidad, 
										ya que solo quien cuente con la llave de cifrado pueda acceder a ella.	
									
								</p>

							<!------------------------------------------------------------------------------------------->

							<h1> Uso de blockchain en la salud </h1>
								<p>
										Por ejemplo, los registros de salud podrían ser unificados y almacenados en blockchain.
										De esta forma, la historia médica de cada paciente estaría segura y a la vez disponible
										para cada médico autorizado, independientemente del centro de salud donde se haya atendido
										el paciente. Incluso la industria farmacéutica puede utilizar esta tecnología para 
										verificar medicamentos y evitar falsificaciones.

								</p>
							<!------------------------------------------------------------------------------------------->

							<h1> Uso de blockchain para documentos </h1>
								<p>
										Por otro lado, resultaría muy útil para la gestión de bienes y documentos digitales. Hasta
										ahora el problema de lo digital es que todo es fácil de copiar, pero blockchain permite 
										registrar compras, escrituras, documentos o cualquier tipo de bien digital y que no pueda 
										ser falsificado.

								</p>
							<!------------------------------------------------------------------------------------------->

							<h1>Otros usos del blockchain </h1>
								<p>
										También puede revolucionar el mercado de Internet de las Cosas (IoT), donde el reto recae en 
										los millones de dispositivos conectados a Internet que deben ser gestionados por las empresas
										proveedoras. En unos años, el modelo centralizado no va a soportar tantos dispositivos, sin
										contar que muchos de ellos no son lo suficientemente seguros. Con blockchain los dispositivos
										pueden comunicarse a través de la red de manera directa, segura y confiable, sin intermediarios.
										</BR> </BR>
										Blockchain permite verificar, validar, rastrear y almacenar todo tipo de información, desde 
										certificados digitales, sistemas de votación democráticos, servicios de logística y mensajería,
										contratos inteligentes y, por supuesto dinero y transacciones financieras.
										

								</p>
							<!------------------------------------------------------------------------------------------->
						</div>
					</div>
				</div>
            
			<div class="row work-pagination animate-box" data-animate-effect="fadeInLeft">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0">
					  <?php 
                        
                        
                        //Previus position
                        $Previus=$Position-1;
                        if($Previus<0){
                            $Previus=$countHome-1;
                        }
                        
                        //**********************************************************
                        
                        //State Previus
                        $idPrevius=$listIdHome[$Previus];
                        $linkPrevius=$listNameHome[$Previus];
                        //**********************************************************
						
							?>
                        <form action="../Option/option.php" method="POST">
						<div class="col-md-4 col-sm-4 col-xs-4 text-center">
						        <input type="hidden" name="id" value="<?php echo $idPrevius;?>">
                            	<input type="hidden" name="link" value="<?php echo $linkPrevius; ?>">
                            	<input type="hidden" name="option" value="Home">
							<button name="btn_select" class="btn-link hvr-backward" style="text-decoration:none;color:black;"><i class="icon-long-arrow-left"></i> <span>Anterior</span></button>
						</div>
						</form>
						<div class="col-md-4 col-sm-4 col-xs-4 text-center">
							<a href="../index.php"><i class="icon-th-large"></i></a>
						</div>
						
						
						<?php 
							
						//Next position
                        $Next=$Position+1;
                        if($Next>=$countHome){
                            $Next=0;
                        }
                        //**********************************************************
                        
                        //State Next
                        $idNext=$listIdHome[$Next];
                        $linkNext=$listNameHome[$Next];
                        //**********************************************************

							?>
						<form action="../Option/option.php" method="POST">
						<div class="col-md-4 col-sm-4 col-xs-4 text-center">
						    <input type="hidden" name="id" value="<?php echo $idNext; ?>">
                            <input type="hidden" name="link" value="<?php echo $linkNext; ?>">
                            <input type="hidden" name="option" value="Home">
							<button name="btn_select" class="btn-link hvr-forward" style="text-decoration:none;color:black;"><span>Siguiente</span> <i class="icon-long-arrow-right"></i></button>
						</div>
						</form>
					</div>
				</div>
			
			</div>
		</div>
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

