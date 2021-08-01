<?php

class TestomonyList  {

    protected $servername = "localhost";
    protected $username = "mylegacy_legacyV";
    protected $pass = "secretpasslegacy";
    protected $bd="mylegacy_homepage";
   
     public function geTestomonyList(){
    
        $con=mysqli_connect($this->servername, $this->username, $this->pass,$this->bd);
  
    
        $sql = "SELECT * FROM `Testimony`"; 
        $result=mysqli_query($con,$sql);
        $cant=mysqli_num_rows($result);
    
        mysqli_close($con);
    
        $ListTestimony=array();
        for ($i = 0; $i < $cant; $i++) {
	
			
	        $array=array();
            $fila[$i] = mysqli_fetch_array($result);
            
            array_push($array,$fila[$i]['idTestimony']);
            array_push($array,$fila[$i]['name']);
            array_push($array,$fila[$i]['ubicacion']);
            array_push($array,$fila[$i]['url']);
            array_push($array,$fila[$i]['link']);

            array_push($ListTestimony,$array);
            
	        }
        
	    return $ListTestimony;
	 
    }
}
?>