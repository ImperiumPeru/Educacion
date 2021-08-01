<?php
class FormAcceso{
	public function FormAccesoShow($Mensaje){
		
	?>	

<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<title>Login</title>
	
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
			        <a href="https://www.mylegacyvip.com/index.php">
			        <img src="../img/LOGO-LEGACY.png" width="200px" height="150px" alt="LOGO">
			        </a>
			    </span>
				<span class="login100-form-title p-b-10">
					CUENTA DE ACCESO
				</span>
				<?php 
				    if($Mensaje!=""){

				        switch($Mensaje){
				            
				            case "No Activo": echo('<div class="alert alert-danger" role="alert" align="center">
                                                      Usuario no está activo.
                                                    </div>');break;
                                				            
				            case "No encontrado":  echo('<div class="alert alert-warning" role="alert" align="center">
                                                      No se ha encontrado al usuario.
                                                    </div>');break;
                                                    
				            case "Complete": echo('<div class="alert alert-warning" role="alert" align="center">
                                                     Complete los campos correctamente.
                                                    </div>');break;
                                                    
                            case "Registrado": echo('<div class="alert alert-success" role="alert" align="center">
                                                     Usuario registrado con éxito.
                                                    </div>');break;
                            
                            case "Problema": echo('<div class="alert alert-danger" role="alert" align="center">
                                                     Ha ocurrido un problema. Inténtelo nuevamente.
                                                    </div>');break;
                            
                            case "Ingrese": echo('<div class="alert alert-danger" role="alert" align="center">
                                                    Ingrese correctamente.
                                                    </div>');break;
				            
				        }
				    }
				    
				?>
				<form class="login100-form validate-form p-b-33 p-t-5" method="POST" action="./validate.php">

					<div class="wrap-input100 validate-input" data-validate = "Ingrese un usuario">
						<input class="input100" type="text" name="username" placeholder="Usuario" id="username">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Ingrese una contrase&ntilde;a">
						<input class="input100" type="password" name="pass" placeholder="Contrase&ntilde;a">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" id="btn_login" name="btn_login">
							INGRESAR
						</button>
						
					</div>
					<div class="container-login100-form-btn m-t-20">
					    <a href="./Reg.html">Registrarse</a>
					</div>
					<div class="container-login100-form-btn m-t-20">
					    <a href="./RecoveryPass.html">He olvidado mi contraseña</a>
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

}
    
}
?>