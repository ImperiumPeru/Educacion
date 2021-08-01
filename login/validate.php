<?php
session_start();
include_once ('../SecurityModel/ControladorAcceso.php');

if(isset($_POST['btn_login'])){
    
	$usuario = $_POST['username'];
	$contrasena = $_POST['pass'];
    
    if($usuario!='' && $contrasena!=''){
        
        $contra=md5($contrasena);
        $objController=new ControladorAcceso;
        $Resp=$objController->ValidarUsuario($usuario,$contra);

        switch($Resp){
            
            case 0: include_once("../login/login.php");
			$ObjFormAccesos = new FormAcceso;
			$mensaje= "No Activo";//No activo
			$ObjFormAccesos -> FormAccesoShow($mensaje);break;
			
            case 1: 
            header("Location: ../education/index.php")
          ;break;
                    
            case 2: include_once("../login/login.php");
            session_destroy();
			$ObjFormAccesos = new FormAcceso;
			$mensaje= "No encontrado";//No encontrado
			$ObjFormAccesos -> FormAccesoShow($mensaje);break;
        }
        
        
    }else{
          
    include_once ('login.php');
    
    session_destroy();
    $ObjFormAccesos = new FormAcceso;
    $mensaje= "Complete";//Complete los campos
    $ObjFormAccesos -> FormAccesoShow($mensaje);
	    
    }
    

}
else if(isset($_POST['btn_register'])){
    
    
    $user=$_POST['username'];
    
    $Name=$_POST['name'];
    $ApePat=$_POST['apepat'];
    $ApeMat=$_POST['apemat'];
    $Email=$_POST['email'];
    $Dni=$_POST['dni'];
    $NumberPhone=$_POST['numberphone'];
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];
    $pass=md5($pass1);
    
    
    $iPASS=0;
    $iDNI=0;
    $iSex=0;
    $longitud=strlen($Dni);
    $longPass=strlen($pass1);
    
    if($pass1!=$pass2 || $longPass==0){
        $iPASS++;
    }
    
    
    if($longitud!=8){
        $iDNI++;
    }
    
    if($Sex=="NONE"){
        $iSex++;
    }
    
    if($iPASS>0 || $iDNI>0 || $iSex>0){
        
        echo ('<html>
                <head>
                <title>Error</title>
                <META HTTP-EQUIV="REFRESH" CONTENT="3;URL=https://www.mylegacyvip.com/login/Reg.html">
                </head>
                <body>
                Complete el formulario correctamente
                </body>
                </html>');
        
    }else{
        
        $objController=new ControladorAcceso;
        $register=$objController->ValidateUserForCreate($user,$pass,$Name,$ApePat,$ApeMat,$Email,$Dni,$NumberPhone,$Sex);
        
        $message="";
        switch($register){
            
            case 1:$message="Registrado" ;break;//Registrado con éxito
            case 2:$message="No encontrado"  ;break;//Usuario no encontrado
            case 3:$message="Problema"  ;break;//Ha ocurrido un problema. Inténtelo nuevamente
            
        }
        
        include_once ('login.php');
        session_destroy();
        $ObjFormAccesos = new FormAcceso;
        $ObjFormAccesos -> FormAccesoShow($message);
        
    }
                
    
}

else if(isset($_POST['btn_recovery'])){
    
    $date=date('Y-m-d H:i:s');
    $email=$_POST['email'];

        include_once('../Mail/mail.php');
        include_once('../DAO/PersonModel.php');
        include_once('../DAO/UserModel.php');
        
        $objPerson=new PersonaModel;
        $id=$objPerson->getPersonForDni($email);
        
        $objUser=new UsuarioModel;
        $user=$objUser->ReturnUser($id[0]);
        
        $objMail=new Email;
        $resp=$objMail->SaveStatusMail($email,$user,$date);
        
        $objMail->SendchangePass($email,$user);
        
        echo "<script languaje='javascript' type='text/javascript'>window.close();</script>";
    
}

else if(isset($_POST['btn_'])){
    
    $m=$_SESSION['mail'];
    $pass0=$_POST['pass0'];
    $pass1=$_POST['pass1'];
    
    if($pass0==$pass1 && $pass0!=""){
        
        include_once('../Mail/mail.php');
        include_once('../DAO/UserModel.php');
        
        $objmail=new Email;
	    $RequestInfo=$objmail->getRequestInfo($m);
	    
	    $user=$RequestInfo[0][1];
	    $Del=$objmail->delRequest($email);
	    $password=md5($pass0);
	    
	    $objUser=new UsuarioModel;
	    $Resp=$objUser->ChangePassword($password,$user);
	    
	    if($Resp==1){
	        
	        echo ('<html>
                <head>
                <title>Login</title>
                <META HTTP-EQUIV="REFRESH" CONTENT="3;URL=https://www.mylegacyvip.com/login/index.php">
                </head>
                <body>
                Contraseña cambiada satisfactoriamente.
                </body>
                </html>');
	    }else{
	        echo ('<html>
                <head>
                <title>Error</title>
                <META HTTP-EQUIV="REFRESH" CONTENT="3;URL=https://www.mylegacyvip.com/login/index.php">
                </head>
                <body>
                Ha ocurrido un problema, no se pudo conectar con Legacy VIP.
                </body>
                </html>');
	        }
	    
    }else{
      
        echo ('<html>
                <head>
                <title>Error</title>
                <META HTTP-EQUIV="REFRESH" CONTENT="3;URL=https://www.mylegacyvip.com/login/index.php">
                </head>
                <body>
                Ingrese correctamente
                </body>
                </html>');
    }
}

//Input out
 else {
    include_once ('login.php');
    session_destroy();
    $ObjFormAccesos = new FormAcceso;
    $mensaje= "Ingrese";//Ingrese correctamente
    $ObjFormAccesos -> FormAccesoShow($mensaje);
    }






/*echo ('<html>
    <head>
    <title>Error</title>
    <META HTTP-EQUIV="REFRESH" CONTENT="3;URL=https://www.mylegacyvip.com/login/login.php">
    </head>
    <body>
    Su mensaje no ha sido enviado. Complete el formulario correctamente
    </body>
    </html>');*/
?>