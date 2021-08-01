<?php
session_start();
include_once ('Controller.php');
include_once ('index.php');

if(isset($_POST['settProfile'])){
    
    $username=$_SESSION['user'];
	$name = $_POST['name'];
	$apepat = $_POST['apepat'];
	$apemat = $_POST['apemat'];
	$Dni = $_POST['dni'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$pass = $_POST['pass'];
	$pass0=$_POST['pass0'];
	
	
	$mssg="";

	$md5pass=md5($pass0);

	$Controller=new Controller;
	$passPrev=$Controller->getPassword($username);

	if($pass!="" && $md5pass==$passPrev){
	    
       $resp=$Controller->Update($name,$apepat,$apemat,$email,$Dni,$phone);
       
       if($resp==1){
           
           
           $resp1=$Controller->UpdatePassword($username,md5($pass));
           
           if($resp1==1){
               
               $mssg="Se ha actualizado los datos correctamente";
           }else{
               
               $mssg="Ha ocurrido un problema en el servidor";
           }
       }else{
          
         $mssg="Ha ocurrido un problema en el servidor";  
       }
       
       
    $_SESSION['mensaje']=$mssg;   
	}else{
	    
	    if($pass=="" && $pass0==""){
	        $Controller=new Controller;
            $resp=$Controller->Update($name,$apepat,$apemat,$email,$Dni,$phone);
            
             if($resp==1){
               
               $mssg="Se ha actualizado los datos correctamente";
                }else{
               
               $mssg="Ha ocurrido un problema en el servidor";
                }
	    }
	    
	    else{
	        $mssg="Las contraseñas no coinciden";
	    }
	    
	    $_SESSION['mensaje']=$mssg;
	   
	}
	

        $Persona=$Controller->getInfoPerson($Dni);
        $_SESSION['personinfo']=$Persona;

	 echo ('<html>
    <head>
    <title>Error</title>
    <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=https://www.mylegacyvip.com/education/profile/index.php">
    </head>
    <body>
    Ingrese correctamente...
    </body>
    </html>');
    
        

}
    
    
//Input out
 else {
    
    echo ('<html>
    <head>
    <title>Error</title>
    <META HTTP-EQUIV="REFRESH" CONTENT="3;URL=https://www.mylegacyvip.com/login/index.php">
    </head>
    <body>
    Ingrese correctamente...
    </body>
    </html>');
    
    }






/*echo ('<html>
    <head>
    <title>Error</title>
    <META HTTP-EQUIV="REFRESH" CONTENT="3;URL=https://www.mylegacyvip.com/login/index.php">
    </head>
    <body>
    Su mensaje no ha sido enviado. Complete el formulario correctamente
    </body>
    </html>'*/
?>