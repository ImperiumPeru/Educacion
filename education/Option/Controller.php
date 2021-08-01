<?php
session_start();
include ("../DAO/StatusModel.php");

class Controller
{
	public function Selector($userSession,$id,$option)
	{

	    $objStatus=new StatusModel;
	    $resp=$objStatus->setStatusItem($userSession,$option,$id);
	    
	    return $resp;
	    
	}
	
}


?>