<?php

include_once("../DAO/UsuarioModel.php");
//include_once("../DAO/DetalleUsuarioModel.php");

class ControladorAcceso
{
	public function ValidarUsuario($user,$password)
	{
		$objUsuarioModel=new UsuarioModel;
		$respuesta=$objUsuarioModel->VerificarUsuario($user,$password);
		if($respuesta==1)
		{
		    
		    $userDate=array();
		    $userState=array();
		    $HomeList=array();
		    $CoursesList=array();
		    $PersonalDevelopment=array();
			/*$objDetalleUsuarioModel=new DetalleUsuarioModel;
			$Privilegios =$objDetalleUsuarioModel -> ExtraerDetallePrivilegio($user);*/
			session_start();
			
			
            header("Status: 301 Moved Permanently");
            header("Location: https://www.mylegacyvip.com/education/index.php");
            exit;

			
		}
		else
		{
				include_once("../login/login.php");
				$ObjFormAccesos = new FormAcceso;
				$mensaje= "No se encontro el usuario";
				$ObjFormAccesos -> FormAccesoShow($mensaje);
				
		
		}
	}
}


?>