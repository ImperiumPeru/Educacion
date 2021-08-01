<?php
session_start();
include ("../DAO/UserModel.php");
include ("../DAO/PersonModel.php");


class ControladorAcceso
{
	public function ValidarUsuario($user,$password)
	{
		$objUsuarioModel=new UsuarioModel;
		$usuarioInfo=$objUsuarioModel->VerificarUsuario($user,$password);
		
		if(count($usuarioInfo)==1)
		{
		    
		    if($usuarioInfo[0][4]=="0"){
		        
		        return 0;//Desactivado
				
		    }else{
		      
		      
		      $Person=new PersonaModel;
			  $DetalleUser=$Person->getInfoPerson($usuarioInfo[0][1]);

              $_SESSION['userinfo']=$usuarioInfo;
			  $_SESSION['personinfo']=$DetalleUser;
			  $_SESSION['user']=$usuarioInfo[0][2];
			  $_SESSION['opcion']=1;

			  return 1;//Encontrado
			
		    }
		  
		}
		else
		{
				return 2;//No encontrado
				
		
		}
	}
	
	public function ValidateUserForCreate($user,$password,$Name,$ApePat,$ApeMat,$Email,$Dni,$NumberPhone,$Sex){
	    
	    $objUsuarioModel=new UsuarioModel;
	    $usuarioInfo=$objUsuarioModel->ValidateUser($user);
	    
	    $filas=count($usuarioInfo);
	    
	    if($filas==0){
	        
	        return 2;//No encontrado
	    }else{
	        
	        $objPersonaModel=new PersonaModel;
	        $personInfo=$objPersonaModel->AddPerson($Name,$ApePat,$ApeMat,$Email,$Dni,$NumberPhone,$usuarioInfo[4],$usuarioInfo[3]);
	        if($personInfo==0){
	            
	            return 2;//No se pudo registrar
	        }else{
	            
	            $personInfoId=$objPersonaModel->getPersonForDni($Dni);
	            $idPerson=$personInfoId[0];
	            
	            $userRegister=$objUsuarioModel->RegisterNewUser($idPerson,$user,$password);
	            
	            if($userRegister==0){
	                
	                return 2;//No se pudo registrar
	            }else{
	                
	                return 1;//success
	            }
	        }
	    }
	}
}


?>