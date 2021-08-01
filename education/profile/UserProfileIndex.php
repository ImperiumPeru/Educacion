<?php
class FormProfile{
	public function FormProfileShow($userPerson){
	    session_start();
	    $message=$_SESSION['mensaje'];
	?>	
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Legacy Vip | Perfil</title>
    <meta property="og:title" content="Legacy Vip">
    <link rel="shortcut icon" type="image/png" href="../images/LOGO-LEGACY.png"/>
    <meta property="og:site_name" content="Legacy Vip">
    <meta property="og:description" content="El negocio consiste en atraer inversionistas para generales hasta el cuádruple de su inversión. Ya que por cada afiliado LEGACY VIP se gana solo el 6% de la inversión que realice el inversionista.">
    <meta property="og:type" content="business.business">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a8e2730d73.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../css/hover.css">
    <style>
        .non:focus, .non {
            outline: none !important;
        }
    </style>
    
</head>

<body class="">

    <div class="container">
  
 
    <div class="row justify-content-center mision py-5" data-wow-offset="450">
        <div class="col-md-4" align="center">
            <div class="row" style="position:relative;padding-bottom:5%;width:80%">
                    <img src="<?php echo $userPerson[0][9];?>" style="width:100%;height:100%;">
                    
            </div>
            </br>
            <?php 
				    if($message!=""){

				      echo('<div class="alert alert-warning" role="alert">'. $message .'.</div>');

				    }
				    ?>
            
            <div align="left">
                
                <form enctype="multipart/form-data" method="POST" action="upload.php">
                    <label for="uploadedFile">Subir imagen:</label>
                    <input type="hidden" name="dni" readonly value="<?php echo $userPerson[0][5];?>">
                    <input type="file" name="uploadedFile" style="font-size:80%;"/>
                    <button type="submit" name="subirBtn" class="btn btn-info hvr-fade btn-sm" style="font-size:80%;">SUBIR IMAGEN</button>
                </form>
            </div>
          <form action="./settingsprofile.php" method="POST">          
        </div>
        
        <div class="col-md-8" align="left" style="position:relative;padding-left:10%;padding-top:4%;">
            <div class="row" with="100%">
                    <h2 style="color:rgba(46, 92, 198)"><strong>Mi perfil</strong><span>&nbsp;</span><i style="font-size:100%;" class="fas fa-pen-square"></i></h2>
                    

            </div>
            <div class="row" with="100%">
                    <input id="non" style="width:30%;border:none;" class="non" value="Nombres" readonly ></input>
                    <input id="non"  style="width:5%;border:none;" class="non" value=":" readonly ></input>
                    <input type="text" style="border:none;width:55%" class="non" name="name" value="<?php echo $userPerson[0][1] ?>" onkeypress="return word(event)" maxlength="20">
            </div>
            <hr style="color: #0056b2;" /><!-- Separator -->
            <div class="row" with="100%">
                    <input  id="non" style="width:30%;border:none;" class="non" value="Apellido P." readonly></input>
                    <input  id="non" style="width:5%;border:none;" class="non" value=":" readonly></input>
                    <input type="text" style="border:none;width:55%" class="non" name="apepat" value="<?php echo $userPerson[0][2] ?>" onkeypress="return word(event)" maxlength="20">
            </div>
            <hr style="color: #0056b2;" /><!-- Separator -->
            <div class="row" with="100%">
                    <input  id="non" style="width:30%;border:none;" class="non" value="Apellido M." readonly></input>
                    <input  id="non" style="width:5%;border:none;" class="non" value=":" readonly></input>
                    <input type="text" style="border:none;width:55%" class="non" name="apemat" value="<?php echo $userPerson[0][3] ?>" onkeypress="return word(event)" maxlength="20">
            </div>
            <hr style="color: #0056b2;" /><!-- Separator -->
            <div class="row" with="100%">
                    <input  id="non" style="width:30%;border:none;" class="non" value="DNI" readonly></input>
                    <input  id="non" style="width:5%;border:none;" class="non" value=":" readonly></input>
                    <input type="text" style="border:none;width:55%" class="non" name="dni" readonly value="<?php echo $userPerson[0][5];?>" onkeypress="return valida(event)" maxlength="8">
            </div>
            <hr style="color: #0056b2;" /><!-- Separator -->
             <div class="row" with="100%">
                    <input  id="non" style="width:30%;border:none;" class="non" value="Sexo" readonly></input>
                    <input  id="non" style="width:5%;border:none;" class="non" value=":" readonly></input>
                    <input type="text" style="border:none;width:55%" class="non" name="Sexo" readonly value="<?php echo $userPerson[0][7];?>">
            </div>
            <hr style="color: #0056b2;" /><!-- Separator -->
            <div class="row" with="100%">
                    <input  id="non" style="width:30%;border:none;" class="non" value="Email" readonly></input>
                    <input  id="non" style="width:5%;border:none;" class="non" value=":" readonly></input>
                    <input type="email" style="border:none;width:55%" class="non" name="email" value="<?php echo $userPerson[0][4]; ?>" >
            </div>
            <hr style="color: #0056b2;" /><!-- Separator -->
            <div class="row" with="100%">
                    <input  id="non" style="width:30%;border:none;" class="non" value="Teléfono" readonly></input>
                    <input  id="non" style="width:5%;border:none;" class="non" value=":" readonly></input>
                    <input type="text" style="border:none;width:55%" class="non" name="phone" value="<?php echo $userPerson[0][6]; ?>" onkeypress="return valida(event)" maxlength="9">
            </div>
            <hr style="color: #0056b2;" /><!-- Separator -->

            <div class="row" with="100%">
                <span>ACTUALIZAR CONTRASEÑA</span>
            </div>
            
            <div class="row" with="100%">
                    <input  id="non" style="width:30%;border:none;" class="non" value="Contraseña" readonly></input>
                    <input  id="non" style="width:5%;border:none;" class="non" value=":" readonly></input>
                    <input type="password" name="pass0" style="width:55%" placeholder="Contraseña actual">
            </div>
            
            <div class="row" with="100%" style="padding-top:3%">
                    <input  id="non" style="width:30%;border:none;" class="non" value="Contraseña" readonly></input>
                    <input  id="non" style="width:5%;border:none;" class="non" value=":" readonly></input>
                    <input type="password" name="pass" style="width:55%" placeholder="Nueva contraseña">
            </div>
        </div>
        
        <div class="col-md-8" align="center" style="position:relative;padding-top:5%">
            <a style="left:0px"  href="../index.php" class="text-left btn btn-danger hvr-pulse">VOLVER</a><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span>
            <button align="right" type="submit" name="settProfile" class="btn btn-success hvr-pulse" style="text-decoration:none;"><i class="far fa-save"></i> GUARDAR</button>
        </div>
    </div>
    
    </form>    
  </div>
  
<!--===============================================================================================-->	    
    <script type="text/javascript">
            function word(e) { // 1
            tecla = (document.all) ? e.keyCode : e.which; // 2
            if (tecla==8) return true; // 3
            patron =/[A-Za-z\s]/; // 4
            te = String.fromCharCode(tecla); // 5
            return patron.test(te); // 6
            }
    </script>
<!--===============================================================================================-->    
    <script>
		function valida(e){
    	tecla = (document.all) ? e.keyCode : e.which;

        //Tecla de retroceso para borrar, siempre la permite
    	if (tecla==8){
        return true;
    		}
        
    	// Patron de entrada, en este caso solo acepta numeros
    	patron =/[0-9]/;
    	tecla_final = String.fromCharCode(tecla);
    	return patron.test(tecla_final);
		}
	</script>
</body>
</html>
<?php 

}
    
}
?>