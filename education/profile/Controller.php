<?php
session_start();
include ("../DAO/PersonModel.php");
include ("../DAO/UserModel.php");

class Controller
{
	public function Update($name,$apepat,$apemat,$email,$Dni,$numberphone)
	{   
	    
	    $objPerson=new PersonaModel;
	    $resp=$objPerson->updatePerson($name,$apepat,$apemat,$email,$Dni,$numberphone);
	    
	    return $resp;
	    
	}
	
	public function UpdatePassword($username,$pass){
	    
	    $objUser=new UsuarioModel;
	    $resp=$objUser->UpdatePassword($username,$pass);
	     
	     return $resp;
	}
	
	public function UpdatePicture($src,$dni){
	    
	    $objPerson=new PersonaModel;
	    $resp=$objPerson->updateProfilePicture($src,$dni);
	    
	    return $resp;
	}
	
	public function getPassword($user){
	    
	    $objUser=new UsuarioModel;
	    $resp=$objUser->getPassword($user);
	     
	    return $resp;
	}
	
	public function getInfoPerson($code){
	    
	    $objPerson=new PersonaModel;
	    $resp=$objPerson->getInfoPerson($code);
	    
	    return $resp;
	}
	
}


?>