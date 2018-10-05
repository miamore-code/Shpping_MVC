<?php
class connection 

{
	
     public function conn()
	 
	 
	 {
		 
		  session_start();
		  
		  $ser="localhost";
		  
		  $user="root";
		  
		  $pass="";
		  
		  $db="mvc_darshak";
		  
		  
		  $con=new mysqli($ser,$user,$pass,$db);
		  
		/*  if($con)
		  {
			  echo "success";
			  
		  }
		  
		  else
		  {
		
		
		 die(mysqli_error($con));  
			  
		  }
		  
		  
		 
		  
		
		  */
		  
		  
		   return $con;
		 
	 }
	 
	
	
	
	
}




?>