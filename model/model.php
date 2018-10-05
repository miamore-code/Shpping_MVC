<?php
include("config.php");
$obj=new connection();

$c=$obj->conn();

class model

{
//create a member function of register user...

  public function insalldata($c,$table,$data)
  
  {
	  
	  $k=array_keys($data);
	  $kk=implode(",",$k);
	  
	  $v=array_values($data);
	  $vv=implode("','",$v);
	  
	  $ins="insert into $table($kk) values('$vv')";
	  
	  $ex=$c->query($ins);
	  
	  
	  
	  }
  
  
  //fetch all data...
  
  
  public function seldata($c,$table)
  
  {
	  
	$sel="select * from $table";
	
	$ex=$c->query($sel);
	
	while($fet=$ex->fetch_array())
	
	{
		
		$arr[]=$fet;
		
		
		
	}
	
	return $arr;
		
	  
	  
  }
  
  
  
  //create a member function of Loginr user...

  public function loginuser($c,$table,$em,$pwd)
  
  
  {
	  
	  
	  $sel="select * from $table where email='$em' and password='$pwd'";
	  
	  
	  $ex=$c->query($sel);
	  
	  
	  $fet=$ex->fetch_array();
	  
	  $no=$ex->num_rows;
	  
	  if($no==1)
	  
	  {
		   
		   $_SESSION["rid"]=$fet["rid"];
		   
		   $_SESSION["em"]=$fet["email"];
		   
		   
		   echo "<script>
		   alert('You are Logged In Succefully')
		   
		   window.location='Profile.php';
		   
		   
		   </script>";
		   
		   
		    
			}
			
			else
			
			{
				
			   echo "<script>
		   alert('EmailId and Password are Incorect')
		   
		   window.location='index.php';
		   
		   
		   </script>";	
				
				
			}
	  
	  
	  
	  
	  
	  
  }
  
  
  //create a member function of show profile of user ...
  
  
  public function shwprofile($c,$table,$table1,$rid)
  
  {
	  
	  
	  $sel="select $table.*, cname from $table join $table1 on $table.cid=$table1.cid where rid='$rid'";
	  
	  
	  $ex=$c->query($sel);
	  
	  
	  $fet=$ex->fetch_array();
	  
	  $arr[]=$fet;
	  
	  return $arr;
	  
	  
	  
	  
	  
  }


  //show subcategory and join category and subcategory...
	
	
	public function salesubcat($c,$tab,$tab1)
	{
		
	  $sel="select $tab.*,catname from $tab join $tab1 on $tab.catid=$tab1.catid where subcategory.catid=1";
	  
	  
	 $ex=$c->query($sel);
	  
	  while($fet=$ex->fetch_array())
	  {
		  
		$arr[]=$fet;  
	  }
	  
	  return $arr;
		
		
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

	//craeate a member function for show product of particular category...

	public function selproductcat($c,$tab,$tab1,$catid)

	{
	 
		$sel="select $tab.*,catname from $tab join $tab1 on $tab.catid=$tab1.catid where $tab.catid='$catid'";

		$ex=$c->query($sel);

		while($fet=$ex->fetch_array())

		{
		$arr[]=$fet;
		}

		return $arr;


	}


	//for create a member function of product details...


	
	public function selectdetail($c,$tab,$tab1,$pid)
	{
		
		$sel="select $tab.*,colname from $tab join $tab1 on $tab.colid=$tab1.colid where pid='$pid'";

	  
	 $ex=$c->query($sel);
	  
	  while($fet=$ex->fetch_array())
	  {
		  
		$arr[]=$fet;  
	  }
	  
	  return $arr;
		
		
	}





	
	//for create a member function of product details...


	
	public function viewcart($c,$tab,$tab1)
	{
		
		 $sel="select $tab.*,pimage, pname, price from $tab join $tab1 on $tab.pid=$tab1.pid";

	  
	 $ex=$c->query($sel);
	  
	  while($fet=$ex->fetch_array())
	  {
		  
		$arr[]=$fet;  
	  }
	  
	  return $arr;
		
		
	}



	//delete cart

	public function delcart($c,$tab,$crtid)

	{

 $del="delete from $tab where cartid='$crtid'";
	$ex=$c->query($del);



	}
	
	
	
	
}



?>