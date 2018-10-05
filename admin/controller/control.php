<?php
//error_reporting(0);
include("model/model.php");


$obj=new model();


//sign up admin ....


if(isset($_POST["sub"]))


{
	
	
	$uname=$_POST["uname"];
	
	$em=$_POST["em"];
	$p=base64_encode($_POST["pass"]);
	$cp=base64_encode($_POST["cpass"]);
	$m=$_POST["mob"];
	$g=$_POST["gender"];
	$h=implode(",",$_POST["chk"]);
    $cn=$_POST["country"];
	
	$data=array("username"=>$uname,"email"=>$em,"password"=>$p,"mobile"=>$m,"gender"=>$g,"hobby"=>$h,"cid"=>$cn);
	
	
	
	
	echo "<script>
	
	alert('User registered succefull')
	
	window.location='index.php';
	
	</script>";
	
	
	
	$obj->insalldata($c,'user',$data);
	
	
	
	
	
	
}


//login admin....


if(isset($_POST["log"]))


{
	
    $em=$_POST["em"];
	
	$pass=base64_encode($_POST["pass"]);
	
	$obj->logadmin($c,'user',$em,$pass);	
	
}



//fetch country...

$country=$obj->selectdata($c,'country');

//add category in category


if(isset($_POST["addcategory"]))

{

	date_default_timezone_set("asia/calcutta");

	  $catname=$_POST["catname"];
	  
	  $catdesc=$_POST["catdesc"];

	  $cdate=date("d/m/y");

	  $ctime=date("H:i:s a");

	  $data=array("catname"=>$catname,"description"=>$catdesc,"created_date"=>$cdate,"created_time"=>$ctime);




	  $obj-> insalldata($c,'category',$data);

	  if($obj)

	  {

	   echo "<script>
	   
	 alert('Category Added succefully')

	 window.location='showcategory.php';
	 
	   </script>";

	  }


	  else

	  {


		echo "<script>
	   
	 alert('Category Not added Try again')

	 window.location='addcategory.php';
	 
	   </script>";
	  }


}

//show all category from category tables...


$cat=$obj->selectdata($c,'category');




//delete category

if(isset($_REQUEST["did"]))

{

	$did=base64_decode($_REQUEST["did"]);
	
	$obj->delcat($c,'category',$did);

 if($obj)

	  {

	   echo "<script>
	   
	 alert('Category Deletedsuccefully')

	 window.location='showcategory.php';
	 
	   </script>";

	  }


	  else

	  {


		echo "<script>
	   
	 alert('Category Not Deleted Try again')

	 window.location='showcategory.php';
	 
	   </script>";
	  }


}


//edit category

if(isset($_REQUEST["eid"]))

{

	$eid=base64_decode($_REQUEST["eid"]);

	$ed=$obj->editcat($c,'category',$eid);


}

//update category..


if(isset($_REQUEST["upd"]))

{


	$eid=base64_decode($_REQUEST["eid"]);

	 $catname=$_POST["catname"];
	  
	  $catdesc=$_POST["catdesc"];


	  $obj->updcat($c,'category',$catname,$catdesc,$eid);  

	  if($obj)

	  {

	   echo "<script>
	   
	 alert('Category Updated succefully')

	 window.location='showcategory.php';
	 
	   </script>";

	  }


	  else

	  {


		echo "<script>
	   
	 alert('Category Not Updated Try again')

	 window.location='editcategory.php';
	 
	   </script>";
	  }


}


//fetch category in subcategory.....


  $cat=$obj->selectdata($c,'category');



 //add subcategory in subcategory table


if(isset($_POST["addsubcategory"]))

{

	date_default_timezone_set("asia/calcutta");
	  $catname=$_POST["catname"];
	  
	  $subcatname=$_POST["subcatname"];
	  
	  $subcatdesc=$_POST["subcatdesc"];

	  $cdate=date("d/m/y");

	  $ctime=date("H:i:s a");

	  $data=array("catid"=>$catname,"subcatname"=>$subcatname,"description"=>$subcatdesc,"created_date"=>$cdate,"created_time"=>$ctime);




	  $obj-> insalldata($c,'subcategory',$data);

	  if($obj)

	  {

	   echo "<script>
	   
	 alert('subCategory Added succefully')

	 window.location='showsubcat.php';
	 
	   </script>";

	  }


	  else

	  {


		echo "<script>
	   
	 alert('subCategory Not added Try again')

	 window.location='subcat.php';
	 
	   </script>";
	  }


}

//show subcategory

$subcat=$obj->salesubcat($c,'subcategory','category');
 

//add color in table create a logic..

if(isset($_POST["addcolor"]))


{

	date_default_timezone_set("Asia/Calcutta");

	$colnm=$_POST["colname"];
	
    $coldesc=$_POST["coldesc"];

	$cdate=date("d/m/y");
	
	$ctime=date("H:i:s a");

	$data=array("colname"=>$colnm,"description"=>$coldesc,"created_date"=>$cdate,"created_time"=>$ctime);

  
	$obj->insalldata($c,'color',$data);
  

	 if($obj)

	 {

	echo "<script>
	alert('Color Added succefulyy')


	window.location='showcolor.php';
	
	
	</script>";

	  
}


else

{

echo "<script>
	alert('Sorry Color Not Added succefulyy')


	window.location='addcolor.php';
	
	
	</script>";

}


}


//show color


$col=$obj->selectdata($c,'color');


//delete a color...

if(isset($_REQUEST["delcol"]))

{

	$did=base64_decode($_REQUEST["delcol"]);


	$obj->delcol($c,'color',$did);


	 if($obj)

	 {

	echo "<script>
	alert('Color Deletd succefulyy')


	window.location='showcolor.php';
	
	
	</script>";

	  
}


else

{

	 
	echo "<script>
	alert('Color Not Added succefuly try again')


	window.location='showcolor.php';
	
	
	</script>";

	  

}




}

//edit color here..


  if(isset($_REQUEST["edcol"]))

  {



	$edcol=base64_decode($_REQUEST["edcol"]);


	$edd=$obj->editcolor($c,'color',$edcol);


  }

  //update color...


	if(isset($_REQUEST["updcolor"]))
	

	{

	  $edcol=base64_decode($_REQUEST["edcol"]);
	  
      $colnm=$_POST["colname"];
	
      $coldesc=$_POST["coldesc"];


	  $obj->updcolor($c,'color',$colnm,$coldesc,$edcol);
	  
	  
	  if($obj)



	  {

		echo "<script>
	alert('Color Updated succefuly')


	window.location='showcolor.php';
	
	
	</script>";


	  }

	  else
	  {
echo "<script>
	alert('Color Not Updated succefuly try again')


	window.location='showcolor.php';
	
	
	</script>";

	  }


	}

	//fecth subcategor in  product..


	$subcatt=$obj->selectdata($c,'subcategory');


	//insert product in product table..


	if(isset($_POST["addproduct"]))

	{


		date_default_timezone_set("Asia/Calcutta");

		$catnm=$_POST["catname"];
		
		$subcatnm=$_POST["subcatname"];
	 
		$pnm=$_POST["pname"];
		
		//upload images1
		
		$tmp1=$_FILES["img"]["tmp_name"];
		$type=$_FILES["img"]["type"];
		$size=$_FILES["img"]["size"]/1024;
		$path1="product/".$_FILES["img"]["name"];
		move_uploaded_file($tmp1,$path1);


		//upload images2
		
		$tmp2=$_FILES["img1"]["tmp_name"];
		$type=$_FILES["img1"]["type"];
		$size=$_FILES["img1"]["size"]/1024;
		$path2="product/".$_FILES["img1"]["name"];
		move_uploaded_file($tmp2,$path2);


		//upload images3
		
		$tmp3=$_FILES["img2"]["tmp_name"];
		$type=$_FILES["img2"]["type"];
		$size=$_FILES["img2"]["size"]/1024;
		$path3="product/".$_FILES["img2"]["name"];
		move_uploaded_file($tmp3,$path3);


		$price=$_POST["price"];

		
		$qty=$_POST["qty"];

		
		$colnm=$_POST["colname"]; 
		
	

		$str=addcslashes($pdesc);

		$pdesc=$_POST["pdesc"];

		
		$cdate=date("d/m/y");
		
		
		$ctime=date("H:i:s a");



		$data=array("catid"=>$catnm,"subcatid"=>$subcatnm,"pname"=>$pnm,"pimage"=>$path1,"pimage1"=>$path2,"pimage2"=>$path3,"price"=>$price,"qty"=>$qty,"colid"=>$colnm,"description"=>$pdesc,"created_date"=>$cdate,"created_time"=>$ctime);


		//print_r($data);

		$obj->insalldata($c,'product',$data);

		if($obj)

		{

	   echo "<script>
	alert('Product Added succefuly')


	window.location='showproduct.php';
	
	
	</script>";

			

		}

		else
		{


			echo "<script>
	alert('Product Not Added succefuly try again')


	window.location='addproduct.php';
	
	
	</script>";


		}







	}



	//show all product...


	$prod=$obj->shwproduct($c,'product','category','subcategory','color');

	
//logout admin here

if(isset($_REQUEST["lg"]))

{
  
  $aid=$_SESSION["aid"];
  
  $obj->logout();
  	
	
	
}



?>