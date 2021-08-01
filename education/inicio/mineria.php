<?php
                        session_start();
                        $name="mineria";
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
    <script src="https://kit.fontawesome.com/99fa133a01.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/hover.css">	<!-- Modernizr JS -->
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
						<figure class="text-center">
							<iframe style="max-width:100%" width="1200px"; height="550px"; src="https://www.youtube.com/embed/SmPu1ANpuvI?rel=0&amp;autoplay=1 " frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>	
						</figure>
					</div>
					
					<div class="col-md-8 col-md-offset-2 animate-box" data-animate-effect="fadeInLeft">
						
						<div style="text-align: justify">
							<!------------------------------------------------------------------------------->
							<h1></br>&nbsp;Mineria en Bitcoin:</h1>
							
							<p> 
									La minería de criptomonedas es uno de los elementos claves que permiten que 
									las criptomonedas funcionen como una red descentralizada de igual a igual
									sin la necesidad de una autoridad central de terceros. </br>
									Es un proceso en el que las transacciones entre usuarios se verifican y 
									se agregan al libro público de blockchain y también un proceso que se utiliza 
									para introducir nuevas monedas en el suministro circulante existente.
							</p>
								
							<!------------------------------------------------------------------------------->								
							<h1> ¿Cómo funciona?</h1>
								<p>
									Un minero es un nodo en la red que recopila transacciones y trabaja para
									organizarlas en bloques. Cada vez que se realizan transacciones, los nodos
									mineros reciben y verifican las transacciones, las agregan a la agrupación 
									de memoria y comienzan a ensamblarlas en un bloque de transacciones múltiples.
								</br></br>
									El primer paso en un proceso de minería de un bloque es agrupar cada transacción
									en el grupo de memoria.
									Antes de comenzar el proceso, el nodo minero agrega una transacción donde se 
									envía la recompensa de la minería. Esta transacción se conoce como la transacción
									"coinbase", es una transacción en la que las monedas se crean "de la nada" y 
									en la mayoría de los casos es la primera transacción en un nuevo bloque.
								</br></br>
									Una vez que se hasheado cada transacción, estos hashes se organizan en algo 
									llamado árbol Merkle o árbol hash, lo que significa que los hashes se organizan
									en pares y se concatenan hasta que se alcanza "la parte superior del árbol", 
									también llamado hash raíz o una raíz de Merkle.
								</br></br>
									El hash raíz junto con el hash del bloque anterior y un número aleatorio llamado
									nonce se colocan en el encabezado del bloque. El encabezado de los bloques se
									procesa como un hash y produce una salida que servirá como identificador de 
									los bloques.
								</br></br>
									El identificador de bloques debe ser menor que un determinado valor objetivo
									establecido por el protocolo. En otras palabras, el hash de encabezado de bloque
									debe comenzar con un cierto número de ceros.
								</br></br>
									Este valor objetivo, también conocido como la dificultad de hash, se escala, 
									asegurando que la velocidad a la que se crean los nuevos bloques se mantenga 
									proporcional a la cantidad de poder de hashing en la red.
								</br></br>	
									Los mineros mantienen el hash del encabezado una y otra vez mediante la 
									iteración a través del nonce hasta que un minero en la red finalmente produce
									un hash válido. Cuando se encuentra un hash válido, el nodo fundador transmitirá
									el bloque a la red. Todos los demás nodos comprobarán si el hash es válido, 
									agregarán el bloque a su copia de la cadena de bloques y continuarán con la 
									minería del siguiente bloque.
										
								</p>
							<!------------------------------------------------------------------------------->
							<h1>  </h1>
								<p>
									<strong>
									Mientras que la recompensa en bloque se otorga al minero que descubre el 
									hash válido primero, la probabilidad de encontrar el hash es igual a la 
									porción del poder minero total en la red. Los mineros con un pequeño porcentaje 
									del poder minero tienen una probabilidad muy pequeña de descubrir el siguiente 
									bloque por su cuenta. Los grupos de minería se crean para resolver este problema,
									lo que significa que los mineros, que comparten su poder de procesamiento a
									través de una red, comparten la recompensa por igual entre todos los miembros 
									del grupo, de acuerdo con la cantidad de trabajo que contribuyen a la probabilidad
									de encontrar un bloque.
									</strong>
								</p>

							<!------------------------------------------------------------------------------->
							<h1> </h1>
								<p>
									

								</p>
							<!------------------------------------------------------------------------------->									
								

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

