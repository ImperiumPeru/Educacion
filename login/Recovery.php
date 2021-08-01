<?php
session_start();
class FormRecovery{
	public function FormRecoveryShow($Mensaje,$value){
	$m=$_SESSION['mail'];
	
	if($m!=null || $m!=""){
	?>	

<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<title>Recovery</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../img/logoLegacy.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="../img/logoLegacy.png" sizes="16x16" />
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../include/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../include/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../include/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('../img/criptomonedas.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
			    <span class="login100-form-title">
			        <a href="https://www.mylegacyvip.com/index.html">
			        <img src="../img/LOGO-LEGACY.png" width="50%" alt="LOGO">
			        </a>
			    </span>
				<span class="login100-form-title p-b-10">
					CAMBIAR CONTRASEÑA
				</span>
				<?php 
				    if($Mensaje!=""){

				        switch($Mensaje){
				            
				            case "Complete": echo('<div class="alert alert-warning" role="alert" align="center">
                                                     Complete los campos correctamente.
                                                    </div>');break;
                                                    
                            case "Exito": echo('<div class="alert alert-success" role="alert" align="center">
                                                     Contraseña cambiada con éxito.
                                                    </div>');break;
                            
                            case "Problema": echo('<div class="alert alert-danger" role="alert" align="center">
                                                     Ha ocurrido un problema. Inténtelo nuevamente.
                                                    </div>');break;
                            
                            case "Igual": echo('<div class="alert alert-danger" role="alert" align="center">
                                                    Ingrese una contraseña diferente a la actual.
                                                    </div>');break;
				        }
				    }
				    
				?>
				<form class="login100-form validate-form p-b-33 p-t-5" method="POST" action="../login/validate.php">
                    <div></div>
					<div class="wrap-input100 validate-input" data-validate="Ingrese una nueva contrase&ntilde;a">
						<input class="input100" type="password" name="pass0" placeholder="Ingrese una nueva contrase&ntilde;a">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Repita la contrase&ntilde;a">
						<input class="input100" type="password" name="pass1" placeholder="Repita la contrase&ntilde;a">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" id="btn_" name="btn_">
							CAMBIAR
						</button>
						
					</div>
					<div class="container-login100-form-btn m-t-32">
					    <a href="../index.html">SALIR</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="include/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="include/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="include/bootstrap/js/popper.js"></script>
	<script src="include/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="include/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
<?php 
}else{
    echo "Error: Ingreso no autorizado";
}
}
    
}
?>