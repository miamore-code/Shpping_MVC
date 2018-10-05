<?php
//error_reporting(0);
include("model/model.php");
//create an object of model class..

$obj=new model();

//insert data in table...


if(isset($_POST["sub"]))

{
	
	include("textlocal.class.php");
    
	include('credential.php');
   
   
    $em=$_POST["em"];
	
    $pwd=$_POST["pass"];	
	
    $cpwd=$_POST["cpass"];
	
	$tmp=$_FILES["img"]["tmp_name"];
	
	$path="upload/".$_FILES["img"]["name"];
	
	move_uploaded_file($tmp,$path);
	
	$mob=$_POST["mob"];
	
    $cn=$_POST["country"];
	
	if($pwd==$cpwd)
	{
	
	$data=array("email"=>$em,"password"=>$pwd,"photo"=>$path,"mobile"=>$mob,"cid"=>$cn);
	
	
	$obj->insalldata($c,'register',$data);
	
	
	
	
	
$textlocal = new Textlocal(false, false, API_KEY);

$numbers = array(MOBILE);
$sender = 'TXTLCL';


$otp=mt_rand(10000, 99999);

$message = "Hello :".$_POST["em"]."Your OTP is :".$otp;



try 

{
	
	
    $result = $textlocal->sendSms($numbers, $message, $sender);
	
	
     setcookie("otp",$otp);
	 
	 
	 echo "OTP Send succefully in Your Mobile";
	
	
	 
      }


 catch (Exception $e) 
 
 
 {
    die('Error: ' . $e->getMessage());



 }



	if($obj)
	{
	
	
	
	
	 echo "<script>
	
	
	alert('Thanks for Register with Us Please verify your OTP')
	
	window.location='otp.php';
	
	</script>";	
	
	
	}
	
	
	else
	
	{
		
		
	echo "<script>
	
	
	alert('Sorry OTP is not matched Try again')
	
	window.location='index.php';
	
	</script>";	
		
		
	}
	
	
	
}


else
  {
	  
	echo "<script>
		alert('Password does not matched.')

		window.location='index.php';

		</script>";  
	  
  }
  
  
}



//verify your otp on login authentication...

if(isset($_POST["addotp"]))


{
	
   $otp=$_POST["otp"];
   
   if($_COOKIE["otp"]==$otp)
   
   {
	   
	 echo "<script>
	 alert('Congratulation your Mobile Number is Verified')
	 
	 
	 window.location='index.php';
	 
	 
	 
	 </script>";   
	   
	   
   }
   
   
   else
   {
	   
	 echo "<script>
	 alert('Sorry You have Enter wrong OTP try again')
	 
	 
	 window.location='otp.php';
	 
	 
	 
	 </script>";   
	   
	      
	   
	   
   }
	
	
	
}




//fetch country from country table in register from..

$cnn=$obj->seldata($c,'country');



//user login here...


if(isset($_POST["log"]))

{
 
 
  $em=$_POST["em"];
  
  $pwd=$_POST["pass"];
  
  $obj->loginuser($c,'register',$em,$pwd);	
	
	
	
}

//show profile here


if(isset($_SESSION["rid"]))

{
	
	
	$rid=$_SESSION["rid"];


   $pro=$obj->shwprofile($c,'register','country',$rid);



}



//fetch subcategory in category



//show subcategory

   

   $subcat=$obj->salesubcat($c,'subcategory','category');


 //select category...
 
 
 $cat=$obj->selectdata($c,'category');


 //select all product


 $prod=$obj->selectdata($c,'product');

//craeate a member function for show product of particular category...


if(isset($_REQUEST["catid"]))

{
   

	$catid=$_REQUEST["catid"];

	$prod=$obj->selproductcat($c,'product','category',$catid);

   

}

//product details....

if(isset($_REQUEST["pid"]))

{

	$pid=$_REQUEST["pid"];

	$prod=$obj->selectdetail($c,'product','color',$pid);
}

//insert product in cart..


if(isset($_POST["addtocart"]))


{

	
date_default_timezone_set("Asia/Calcutta");
$pid=$_POST["pid"];

$price=$_POST["price"];
$qty=$_POST["qty"];
$subtot=$price*$qty;
$cdate=date("d/m/y");
$ctime=date("H:i:s a");

$data=array("pid"=>$pid,"qty"=>$qty,"subtotal"=>$subtot,"created_date"=>$cdate,"created_time"=>$ctime);

$obj->insalldata($c,'cart',$data);

if($obj)
{
	echo "<script>
	 alert('Product Added successfully in Cart')
	 
	 
	 window.location='index.php';
	 
	 
	 
	 </script>";   
	   
}

else
{

	echo "<script>
	 alert('Try again')
	 
	 
	 window.location='productdetails.php';
	 
	 
	 
	 </script>";   
	   
}





}


//view cart..

$crt=$obj->viewcart($c,'cart','product');


//delete cart.....


if(isset($_REQUEST["cartdid"]))

{
	  
	$crtid=$_REQUEST["cartdid"];

	$obj->delcart($c,'cart',$crtid);


if($obj)
{
	echo "<script>
	 alert('Cart Deleted successfully')
	 
	 
	 window.location='index.php';
	 
	 
	 
	 </script>";   
	   
}


else


{

	echo "<script>
	alert('Error for Cart Deleted Try Again')
	
	
	window.location='index.php';
	
	
	
	</script>"; 

}



}

?>