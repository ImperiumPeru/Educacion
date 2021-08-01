<?php
include ('../BEAN/Home.php');


class ListHome  {

    protected $servername = "localhost";
    protected $username = "mylegacy_legacyV";
    protected $pass = "secretpasslegacy";
    protected $bd="mylegacy_homepage";
   
     public function getHomeList(){
    
        $con=mysqli_connect($this->servername, $this->username, $this->pass,$this->bd);
  
    
        $sql = "SELECT *from `Home`"; 
        $result=mysqli_query($con,$sql);
        $cant=mysqli_num_rows($result);
    
        mysqli_close($con);
    
        $ListHome=array();
        for ($i = 0; $i < $cant; $i++) {
	
			
	        $array=array();
            $fila[$i] = mysqli_fetch_array($result);
            
            array_push($array,$fila[$i]['idHome']);
            array_push($array,$fila[$i]['Path']);
            array_push($array,$fila[$i]['Name']);

            array_push($ListHome,$array);
            
	        }
        
	    return $ListHome;
	 
    }
}
?>