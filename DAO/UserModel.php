<?php
include_once ('../BEAN/Usuario.php');


class UsuarioModel  {

    protected $servername = "localhost";
    protected $username = "mylegacy_legacyV";
    protected $pass = "secretpasslegacy";
    protected $bd="mylegacy_homepage";
   
    public function VerificarUsuario($usuario,$password){
    
    $con=mysqli_connect($this->servername, $this->username, $this->pass,$this->bd);
  
    $sql = "SELECT * FROM `User` WHERE User='$usuario' and Password='$password' and Estado='1'"; 
    $result=mysqli_query($con,$sql);
    $cant=mysqli_num_rows($result);
    
    mysqli_close($con);
    
    $ListUser=array();
        
        for ($i = 0; $i < $cant; $i++) {
	
			$array=array();

            $fila[$i] = mysqli_fetch_array($result);
            
            array_push($array,$fila[$i]['idUser']);
            array_push($array,$fila[$i]['idPerson']);
            array_push($array,$fila[$i]['User']);
            array_push($array,$fila[$i]['Password']);
            array_push($array,$fila[$i]['Estado']);
            
            array_push($ListUser,$array);
	        }
	    return $ListUser;
	 
    }
    
    
    
    public function ValidateUser($user){
        
        $con=mysqli_connect($this->servername, $this->username, $this->pass,$this->bd);
        
        $sql = "SELECT * FROM `UserTemporal` WHERE User='$user'"; 
        $result=mysqli_query($con,$sql);
        $cant=mysqli_num_rows($result);
        
        mysqli_close($con);
    
        $ListUser=array();
        
        for ($i = 0; $i < $cant; $i++) {
	
			$array=array();

            $fila[$i] = mysqli_fetch_array($result);
            
            array_push($array,$fila[$i]['User']);
            array_push($array,$fila[$i]['dni']);
            array_push($array,$fila[$i]['FECHANAC']);
            array_push($array,$fila[$i]['Sex']);
            
            array_push($ListUser,$array);
	        }
	    return $ListUser;
    }
    
    public function RegisterNewUser($idPerson,$user,$password){
        
         $con=mysqli_connect($this->servername, $this->username, $this->pass,$this->bd);
         
         $sql="INSERT INTO `User`(`idPerson`, `User`, `Password`, `Estado`) VALUES ('$idPerson','$user','$password',1)";
         $sqlDel="DELETE FROM `UserTemporal` WHERE User='$user'";
         $result=mysqli_query($con,$sql);
         
         $resultDel=mysqli_query($con,$sqlDel);
         mysqli_close($con);
         $ret=0;
         if($result==$resultDel && $result==1){
             $ret=1;
         }
         
         return $ret;
         
    }
    
    public function ReturnUser($idPerson){
        
        $con=mysqli_connect($this->servername, $this->username, $this->pass,$this->bd);
       
        $sql = "SELECT * FROM `User` WHERE idPerson='$idPerson' and Estado='1'"; 
        $result=mysqli_query($con,$sql);
        
        mysqli_close($con);
        
        $user="";
        $fila[0] = mysqli_fetch_array($result);
        $user=$fila[0]['User'];


    	return $user;  
    }
    
    public function ChangePassword($password,$user){
        
        
        $con=mysqli_connect($this->servername, $this->username, $this->pass,$this->bd);
       
        $sql = "UPDATE `User` SET `Password`='$password' WHERE User='$user'"; 
        $result=mysqli_query($con,$sql);
        mysqli_close($con);
        
        return $result;
        
        

    }

}
?>