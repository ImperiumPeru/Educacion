<?php
include_once('./DAO/PersonModel.php');
class FormMenu{
	public function FormMenuShow($userDat,$userPerson,$userWatch,$ListItems){
	    
		$userState=0;
		$viewSize=count($ListItems);
		$userWatcheSize=count($userWatch);

		$val=0;
		if($viewSize==0){
		  $val=0;
		}else{
		  $val=($userWatcheSize/$viewSize)*100;  
		}
		
		$percent=ceil($val);

		$bar=(float)(($percent*251.2)/100);
		
		$speed=(int)(50*$percent);
		
		$namePerson=explode(" ",$userPerson[0][1]);
        $openDate=$userPerson[0][10];

		$d1=date("d");
		$m1=date("m");
		$y1=date("Y");
		
		
		$birthday=$userPerson[0][8];
		$Birth=strtotime($birthday);
		
		$d=date("d", $Birth);
		$m=date("m", $Birth);
		$y=date("Y", $Birth);
		
		$objPerson=new PersonaModel;
		
		
		$valor=0;
		if($d==$d1 && $m==$m1 && $openDate=="0"){
		    $valor=1;
		    $objPerson->updateStateViewCel($valor,$userPerson[0][5]);
		}else{
		    if($openDate=="1" && $d!=$d1){
		       $objPerson->updateStateViewCel("0",$userPerson[0][5]);
		    }
		    
		}
		
		
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
	<link rel="stylesheet" href="css/stylesss.css">
	<!-- Incon Font-awesone -->
	<script src="https://kit.fontawesome.com/99fa133a01.js" crossorigin="anonymous"></script>
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>-->
	<script src="js/respond.min.js"></script>
	<!--[endif]-->
	
	<!-- Progress bar-->
	<script>
	    
	    window.onload = function() {
        var count = $(('#count'));
        $({ Counter: 0 }).animate({ Counter: count.text() }, {
        duration: <?php echo $speed;?>,
        easing: 'linear',
        step: function () {
        count.text(Math.ceil(this.Counter)+ "%");
        }
        });

        var s = Snap('#animated');
        var progress = s.select('#progress');

        progress.attr({strokeDasharray: '0, 251.2'});
        Snap.animate(0,<?php echo ($bar);?>
        , function( value ) { //251.2
        progress.attr({ 'stroke-dasharray':value+',251.2'});
        }, <?php echo $speed;?>);
        };
	    
	    
	</script>
	<!-- Progress bar finish-->
	
	<!--Progress bar-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.3.0/snap.svg-min.js"></script>
    <!--Progress bar finish-->
    
    <script>
        function notView(){
        document.getElementById('modal').style.display = 'none';
        }
    </script>
    
    <script>
        $(function(){
  var $bubble = $('.bubble'),
      aText    = $bubble.text().split(''),
      letters = '';
  
  for(var i = 0; i < aText.length; i++){
    letters += '<h1>'+aText[i]+'</h1>';
  }
  
  $bubble.empty().append(letters);
  
  $.each($('h1', $bubble), function(i){
    $(this).css('animation-delay', '-'+i+'70ms');
  });
});
    </script>
	</head>
	<body>
     <!--<div class="row background-gif" >
        
                
        </div>-->
     <?php
    if($valor==1){
        echo('
    <!-- Happy Birthday -->
<div class="container-modal" id="modal">

    <div align="center" class="mod">
    <button class="close-mod" onclick="notView()"><i class="fas fa-times-circle"></i></button>
       <div class="row background-gif"> 
        <h1 class="title h1">FELIZ CUMPLEAÑOS</h1>
        </div>
        
        <div class="row div-congratulation" style="background-color:white"> 
        <p class="p">De parte de toda la familia de Legacy VIP, nos complace desearte <b>Feliz Cumpleaños</b> y a la vez nos llena de orgullo tenerte como socio, Felicidades y a seguir ganando muchos bitcoins</p>
        
        </div>
            
        
    </div>
</div>
    <!-- Happy Birthday --> '); 
    }
    ?>
    
<main>
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
             <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft"><span>¿QUÉ ES BITCOIN?</span></h2>   
            </div>
            <div>
                <div>
                    
                    <div class="col-md-5">
                        <div class="fh5co-narrow-content">
				        <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft"><span>TEMARIO</span></h2>
				            <div class="row animate-box" data-animate-effect="fadeInLeft">
				    <?php
                    
				    for($i=0;$i<$viewSize;$i++){
				        
				        $Class="icon-no-watch";
				        
				        for($f=0;$f<$userWatcheSize;$f++){
				            if($ListItems[$i][0]==$userWatch[$f][2]){
				              $Class="icon-watch";
				            }
				        }
				        
				        echo ('<!------------------------------------------------------------------------------->
				        <div class="col-md-12 col-sm-6 col-xs-6 col-xxs-12 work-item">
                            <form action="Option/option.php" method="POST">
                            	
                            	<input type="hidden" name="id" value="'.$ListItems[$i][0].'">
                            	<input type="hidden" name="link" value="'.$ListItems[$i][1].'">
                            	<input type="hidden" name="option" value="Home">
                            	<button name="btn_select" type="submit" class="btn-link btn-no-watch text-left" style="text-decoration:none;"><i class="'.$Class.' far fa-play-circle"></i>'.$ListItems[$i][2].'</button>
                            </form>
                            </div>
                        <!------------------------------------------------------------------------------->
				        ');
				    }
				
				    ?>
				</div>
			            </div>
                    </div>
            
                    <div class="col-md-7">
                
                <div class="fh5co-narrow-content">
				    <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft"><span>PROGRESO</span></h2>
				    <div class="row animate-box" data-animate-effect="fadeInLeft">
				    
				    <!------------------------------------------------------------------------------->
    				<div class="col-md-3 work-item" >
        					 <div class="col-md-3">
        					     <div class="row">
        					       <span><span><?php echo ($percent);?>%</span>
        					     </div>
        					     <div class="row">
        					       <span><b>PROGRESO</b></span>  
        					     </div>
        					     
        					 </div>
    				    </div>
					<!------------------------------------------------------------------------------->
					<div class="col-md-6 work-item" width="100%">
        					 <div class="row">
        					     <svg id="animated" viewbox="0 0 100 100">
                                     <circle cx="50" cy="50" r="45" fill="#FDB900"/>
                                     <path id="progress" stroke-linecap="round" stroke-width="5" stroke="#fff" fill="none"
                                     d="M50 10
                                       a 40 40 0 0 1 0 80
                                       a 40 40 0 0 1 0 -80">
                                        </path>
                                        <text id="count" x="50" y="50" text-anchor="middle" dy="7" font-size="20"><?php
        					           echo ($percent);
        					           ?>%</text>
                                </svg>
        					     
        					 </div>
    				    </div>
					<!------------------------------------------------------------------------------->
					<div class="col-md-3 work-item" >
        			
        					 <div class="col-md-3">
        					     <div class="row">
        					       <span>100%</span>  
        					     </div>
        					     <div class="row">
        					       <span><b>OBJETIVO</b></span>  
        					     </div>
        					 </div>
                            
    				    </div>
					<!------------------------------------------------------------------------------->
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
</main>

	</body>
</html>
<?php 

}
    
}
?>