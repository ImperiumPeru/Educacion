<?php
session_start();

include_once("UserProfileIndex.php");

if(isset($_SESSION['user'])==false){
  $_SESSION['user']="";
}

$usuarioSession=$_SESSION['user'];		 
$vacio="";
			  
if($usuarioSession!=$vacio){
    
    
    $userProf=new FormProfile;;
    $userDato=$_SESSION['userinfo'];
	$userPersona=$_SESSION['personinfo'];

    $userProf->FormProfileShow($userPersona);
    
    
  
}

else{

echo ('<html>
                    <head>
                    <title>Error</title>
                    <META HTTP-EQUIV="REFRESH" CONTENT="3;URL=https://www.mylegacyvip.com/login/index.php">
                    </head>
                    <body>
                    Ingrese de manera correcta...
                    </body>
                    </html>');
}

?>