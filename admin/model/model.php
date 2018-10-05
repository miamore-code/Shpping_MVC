<?php
error_reporting(0);
include("config.php");

$obj=new connection();

$c=$obj->conn();


class model

{
	
	
	//create a member function of insert all data of admin admin....
	
	public function insalldata($c,$table,$data)
	
	
	{
		
		$k=array_keys($data);
		
		$kk=implode(",",$k);
		
		
		$v=array_values($data);
		
		$vv=implode("','",$v);
		
		
	$ins="insert into $table($kk) values('$vv')";
		

		$ex=$c->query($ins);
		
		
		
	}
	
	
	//create a member function of admin login
	
	public function logadmin($c,$table,$em,$pass)
	
	{
		
	    $sel="select * from $table where email='$em' and password='$pass'";
		
		$ex=$c->query($sel);
		
		$fet=$ex->fetch_array();
		
		$no=$ex->num_rows;
		
		if($no==1)
		
		{
		 $_SESSION["uid"]=$fet["uid"];
		 
		 $_SESSION["em"]=$fet["email"];
		 
		 
		 echo "<script>
		 
		 alert('User Loged In! succefully')
		 
		 window.location='dashboard.php';
		 
		 </script>";
		 
		 	
			
			
			
			
		}
		
		else
		{
			echo "<script>
		 
		 alert('Email and Passsword are Incorect Try Again')
		 
		 window.location='index.php';
		 
		 </script>";
			
		}
		
		
		
	}
	
	
	
	//fetch all data from table...
	
	
	public function selectdata($c,$tab)
	{
		
	  $sel="select * from $tab";
	  
	  
	 $ex=$c->query($sel);
	  
	  while($fet=$ex->fetch_array())
	  {
		  
		$arr[]=$fet;  
	  }
	  
	  return $arr;
		
		
	}

	//create a member function for delete category


	public function delcat($c,$table,$did)


	{

	 $del="delete from $table where catid='$did'";
	 
	  

	  $ex=$c->query($del);


	}


	//edit category create a member function


	public function editcat($c,$table,$eid)
	
	  {
$sel="select * from $table where catid='$eid'";

$ex=$c->query($sel);

$fet=$ex->fetch_array();

$arr[]=$fet;

return $arr;

	  }
	
	
	//update category from table create a member function


	public function updcat($c,$table,$catname,$catdesc,$eid)

	


	{

$up="update $table set catname='$catname',description='$catdesc' where catid='$eid'"; 
	  
		  $ex=$c->query($up);

	}


	//show subcategory and join category and subcategory...
	
	
	public function salesubcat($c,$tab,$tab1)
	{
		
	  $sel="select $tab.*,catname from $tab join $tab1 on $tab.catid=$tab1.catid";
	  
	  
	 $ex=$c->query($sel);
	  
	  while($fet=$ex->fetch_array())
	  {
		  
		$arr[]=$fet;  
	  }
	  
	  return $arr;
		
		
	}


	//delete color from table create a member function

public function delcol($c,$table,$did)

{

 $del="delete from $table where colid='$did'"; 	
	  

	  $ex=$c->query($del);


}


//edit color create member function  


public function editcolor($c,$table,$edcol)

{
  

	$sel="select * from $table where colid='$edcol'";

	$ex=$c->query($sel);

	$fet=$ex->fetch_array();

	$arr[]=$fet;

	return $arr;


}

//update color

  public function updcolor($c,$table,$colnm,$coldesc,$edcol)

  {

	 $upd="update $table set colname='$colnm', description='$coldesc' where colid='$edcol'";
	 
	 $ex=$c->query($upd);


  }

  //show all product data..


  public function shwproduct($c,$tab,$tab1,$tab2,$tab3)

  {
  

	$sel="select $tab.*,catname,subcatname,colname from $tab join $tab1 on $tab.catid=$tab1.catid join $tab2 on $tab.subcatid=$tab2.subcatid join $tab3 on $tab.colid=$tab3.colid";



	$ex=$c->query($sel);


	while($fet=$ex->fetch_array())

	{


		$arr[]=$fet;
	}


	return $arr;

  }


	//logout admin here
	
	
	public function logout()
	
	{
		
	   unset($_SESSION["uid"]);
	   
	   unset($_SESSION["em"]);
	   
	   session_destroy();
	   
	   
	   		echo "<script>
		 
		 alert('Admin Logout Succefully')
		 
		 window.location='index.php';
		 
		 </script>";
			
		
		
		
	}
	
	
	
	
}







?>