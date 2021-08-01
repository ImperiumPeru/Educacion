<?php
include_once ('../BEAN/Persona.php');


class PersonaModel  {

    protected $servername = "localhost";
    protected $username = "mylegacy_legacyV";
    protected $pass = "secretpasslegacy";
    protected $bd="mylegacy_homepage";
   
    public function getInfoPerson($idCode){
    
    $con=mysqli_connect($this->servername, $this->username, $this->pass,$this->bd);
  
    $sql = "SELECT * FROM `Person` WHERE idPerson='$idCode' or Dni='$idCode'"; 
    $result=mysqli_query($con,$sql);
    $cant=mysqli_num_rows($result);
    
    mysqli_close($con);
    
    $ListPersona=array();
        
        for ($i=0; $i < $cant; $i++) {
	
			
	        $array = array();
            $fila[$i] = mysqli_fetch_array($result);
            
            array_push($array,$fila[$i]['idPerson']);
            array_push($array,$fila[$i]['Name']);
            array_push($array,$fila[$i]['ApePat']);
            array_push($array,$fila[$i]['ApeMat']);
            array_push($array,$fila[$i]['Email']);
            array_push($array,$fila[$i]['Dni']);
            array_push($array,$fila[$i]['NumberPhone']);
            array_push($array,$fila[$i]['Sex']);
            array_push($array,$fila[$i]['FECHANAC']);
			array_push($array,$fila[$i]['Picture']);
			array_push($array,$fila[$i]['Birthday']);
			array_push($ListPersona,$array);
	        }
        
	    return $ListPersona;
	 
    }
    
    public function AddPerson($Name,$ApePat,$ApeMat,$Email,$Dni,$NumberPhone,$Sex,$fecha){
        
        $con=mysqli_connect($this->servername, $this->username, $this->pass,$this->bd);
        
        $sql="INSERT INTO `Person`(`Name`, `ApePat`, `ApeMat`, `Email`, `Dni`, `FECHANAC`, `NumberPhone`, `Sex`) VALUES ('$Name','$ApePat','$ApeMat','$Email','$Dni','$fecha','$NumberPhone','$Sex')";
        $result=mysqli_query($con,$sql);
        
        return $result;
        
    }
    
    public function getPersonForDni($Dni){
        
        $con=mysqli_connect($this->servername, $this->username, $this->pass,$this->bd);
        
        $sql="SELECT *from `Person` WHERE Dni='$Dni'";
        $result=mysqli_query($con,$sql);
        $cant=mysqli_num_rows($result);
    
        mysqli_close($con);
    
        $array = array();
        
        for ($i=0; $i < $cant; $i++) {
	
			
	        
            $fila[$i] = mysqli_fetch_array($result);
            
            array_push($array,$fila[$i]['idPerson']);

	        }
        
	    return $array;
    }
    
    public function updatePerson($name,$apepat,$apemat,$email,$Dni,$numberphone){
        
        $con=mysqli_connect($this->servername, $this->username, $this->pass,$this->bd);
        
        $sql="UPDATE `Person` SET `Name`='$name',`ApePat`='$apepat',`ApeMat`='$apemat',`Email`='$email',`Dni`='$Dni',`NumberPhone`='$numberphone' WHERE Dni='$Dni'";
        $result=mysqli_query($con,$sql);
        
        
        return $result;
    }
    
    public function getIdPersonaUser($user){
        echo "busqueda";
        
        $con=mysqli_connect($this->servername, $this->username, $this->pass,$this->bd);
        
        $sql = "SELECT * FROM `User` WHERE User='$user'";  
        $result=mysqli_query($con,$sql);
        mysqli_close($con);
        
        $ListUser=array();
        
        for ($i = 0; $i < $cant; $i++) {
	
			$array=array();

            $fila[$i] = mysqli_fetch_array($result);
            
            array_push($array,$fila[$i]['idPerson']);
            array_push($ListUser,$array);
	        }
	    return $ListUser;
    }
    
    public function updateProfilePicture($src,$Dni){
        
        $con=mysqli_connect($this->servername, $this->username, $this->pass,$this->bd);
        
        $sql="UPDATE `Person` SET `Picture`='$src' WHERE Dni='$Dni'";
        $result=mysqli_query($con,$sql);
        return $result;
    }
    
    public function updateStateViewCel($val,$Dni){
        
        $con=mysqli_connect($this->servername, $this->username, $this->pass,$this->bd);
        
        $sql="UPDATE `Person` SET `Birthday`='$val' WHERE Dni='$Dni'";
        $result=mysqli_query($con,$sql);
        return $result;
    }
}
?>