<?php
	
	
    session_start(); //Iniciar una nueva sesión o reanudar la existente
    session_destroy(); //Destruye la sesión
  
    header("Status: 301 Moved Permanently");
    header("Location: https://www.mylegacyvip.com/");
    exit;

	
?>