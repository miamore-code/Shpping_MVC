<?php
include("controller/control.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>New Era shopping Center shopp you desire here!</title>

<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />

<link rel="stylesheet" href="css/font-awesome.min.css" />

<link rel="stylesheet" href="css/style.css" type="text/css" />

<link rel="icon" href="images/of1.png" type="text/css" />


<script src="js/jquery.min.js" type="text/javascript"></script>

<script src="js/cycle.min.js" type="text/javascript"></script>

<script type="text/javascript">

$(document).ready(function(e) {
    
	
	$("#slide").cycle("fade");
});

</script>

<script src="js/bootstrap.min.js" type="text/javascript"></script>

<script src="js/npm.js" type="text/javascript"></script>


<meta charset="utf-8" content="Choose from a Range of Products by Famous Brands. Hassle-Free Returns. Buy Now! Huge Selection. Free Shipping* Easy Returns. 100% Purchase Protection. Pay On Delivery. Types: Computer & Accessories, Shoes & Handbags, Jewellery, Kindle, Luggage, Pet Supplies." />
</head>

<body>

<!--header start here--->

<?php

include("header.php");


?>





<!--header closed here--->


<!--menu start here--->


<?php

include("menu.php");


?>

<!--,menu closed here--->



<!--slider start here--->





<!--slider closed here--->



<!--content start here--->


<div class="content">

<h1 align="center" style="color:#FF6215; letter-spacing:3p-x">Special Offers</h1>


<hr style="border:solid 2px #009900; width:10%; position:absolute; margin-left:35%; " />


<span class="fa fa-star" style="color:#FF8040; font-size:40px; position:absolute; margin-left:46%;"></span>



<hr style="border:solid 2px #009900; width:10%; position:absolute; float:right ; margin-left:50%; margin-top:2%;">



<div class="col-md-4 col-xs-12">

<img src="images/50.jpg" class="img-responsive" style="width:100%; height:250px;" />

</div>

<div class="col-md-4 col-xs-12">

<img src="images/501.jpg" class="img-responsive" style="width:100%; height:250px;" />

</div>

<div class="col-md-4 col-xs-12">

<img src="images/511.png" class="img-responsive" style="width:100%; height:250px;" />

</div>


<!---product category sidebar-->


<div class="col-md-4 col-xs-12">
<div class="list-group">
<div class="list-group-item active" style="background-color:#D56A00"><h2 align="center" style="color:#FFF">Select Category</h2></div>
<div class="list-group-item">


<ul>
<li><a href="#">Select All Product</a></li>

<li><a href="#">Select All Product</a></li>
<li><a href="#">Select Home applinces</a></li>
<li><a href="#">Electronics Items</a></li>
<li><a href="#">Formal Shoes</a></li>
<li><a href="#">Baby & Boys</a></li>
<li><a href="#">Mens & Womens</a></li>
<li><a href="#">Clothes & Watch</a></li>
<li><a href="#">Kitchen Items</a></li>



</ul>


</div>
</div>



<div class="list-group">
<div class="list-group-item active" style="background-color:#D56A00"><h2 align="center" style="color:#FFF">Updated News</h2></div>
<div class="list-group-item">
<h3 align="center">50% off Products</h3>

<div class="thumbnail">
<img src="images/of4.png" style="width:100%; height:200px;" class="img-responsive" />

<center>
<section>
<b>Product name:Lays</b><br />

<b>Price:Rs. 25-/</b><br />

<b><button type="button" class="btn btn-block btn-danger">AddToCart</button></b><br />


</section>
</center>
</div>



<div class="thumbnail">
<img src="images/of14.png" style="width:100%; height:200px;" class="img-responsive" />

<center>
<section>
<b>Product name:Lays</b><br />

<b>Price:Rs. 25-/</b><br />

<b><button type="button" class="btn btn-block btn-danger">AddToCart</button></b><br />


</section>
</center>
</div>



<div class="thumbnail">
<img src="images/of16.png" style="width:100%; height:200px;" class="img-responsive" />

<center>
<section>
<b>Product name:Lays</b><br />

<b>Price:Rs. 25-/</b><br />

<b><button type="button" class="btn btn-block btn-danger">AddToCart</button></b><br />


</section>
</center>
</div>




</div>
</div>

</div>



<div class="col-md-8 col-xs-12">

<h1 align="center" style="color:#E17100; left:3px">Manage Your Profile</h1>

<?php
foreach($pro as $pro1)
{

?>

<form method="post" enctype="multipart/form-data">



<div class="form-group">
<center>
<label><img src="<?php echo $pro1["photo"];?>" style="width:250px; height:150px;" /></label>
<input type="file" name="img"  class="form-control" />
</center>
</div>



<div class="form-group">
<label>Enter Email:</label>
<input type="text" name="em" value="<?php echo $pro1["email"];?>" placeholder="enter email" required="required" class="form-control" />
</div>




<div class="form-group">
<label>Enter Mobile:</label>
<input type="number" name="mob" value="<?php echo $pro1["mobile"];?>" placeholder="Enter Mobile" required="required" class="form-control" />
</div>



<div class="form-group">
<label>Select country:</label>
<select name="country"  class="form-control">
<option value="">-select country-</option>

<?php
foreach($cnn as $cn1)

{
	
	if($cn1["cid"]==$pro1["cid"])
	{
?>

<option value="<?php echo $pro1["cid"];?>" selected="selected"><?php echo $pro1["cname"];?></option>

<?php

	}
	else
	{
	
	?>
    
    
<option value="<?php echo $cn1["cid"];?>"><?php echo $cn1["cname"];?></option>

<?php
}

}
?>

</select>
</div>


<div class="form-group">

<input type="submit" name="upd" value="Update" class="btn btn-lg btn-success"/>




</div>






</form>


<?php
}
?>






</div>





</div>
</div>
</div>


<div class="clearfix"></div>

<div class="clearfix"></div>
<br /><br />



 <div class="col-md-12 col-xs-12"> 
   	

<div class="recent">

<h2 align="center"  style="text-decoration:underline; color:#F27900">New Product Launch</h2>


<div id="myProduct" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myProduct" data-slide-to="0" class="active"></li>
    <li data-target="#myProduct" data-slide-to="1"></li>
    <li data-target="#myProduct" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
 
 
 
   
  <div class="carousel-inner">
 

 <div class="item active"> 
 
  
<div class="col-md-4 col-xs-12">
<div class="thumbnail">
<img src="images/of14.png" style="width:100%; height:200px;" class="img-responsive" />

<center>
<section>
<b>Product name:Lays</b><br />

<b>Price:Rs. 25-/</b><br />

<b><button type="button" class="btn btn-block btn-danger">AddToCart</button></b><br />


</section>
</center>
</div>
</div>

<div class="col-md-4 col-xs-12">
<div class="thumbnail">
<img src="images/of14.png" style="width:100%; height:200px;" class="img-responsive" />

<center>
<section>
<b>Product name:Lays</b><br />

<b>Price:Rs. 25-/</b><br />

<b><button type="button" class="btn btn-block btn-danger">AddToCart</button></b><br />


</section>
</center>
</div>
</div>




    <div class="col-md-4 col-xs-12">
<div class="thumbnail">
<img src="images/of14.png" style="width:100%; height:200px;" class="img-responsive" />

<center>
<section>
<b>Product name:Lays</b><br />

<b>Price:Rs. 25-/</b><br />

<b><button type="button" class="btn btn-block btn-danger">AddToCart</button></b><br />


</section>
</center>
</div>
</div>



</div>



  <div class="item">

    <div class="col-md-4 col-xs-12">
<div class="thumbnail">
<img src="images/of14.png" style="width:100%; height:200px;" class="img-responsive" />

<center>
<section>
<b>Product name:Lays</b><br />

<b>Price:Rs. 25-/</b><br />

<b><button type="button" class="btn btn-block btn-danger">AddToCart</button></b><br />


</section>
</center>
</div>

</div>



<div class="col-md-4 col-xs-12">
<div class="thumbnail">
<img src="images/of22.png" style="width:100%; height:200px;" class="img-responsive" />

<center>
<section>
<b>Product name:Lays</b><br />

<b>Price:Rs. 25-/</b><br />

<b><button type="button" class="btn btn-block btn-danger">AddToCart</button></b><br />


</section>
</center>
</div>
</div>

<div class="col-md-4 col-xs-12">
<div class="thumbnail">
<img src="images/of19.png" style="width:100%; height:200px;" class="img-responsive" />

<center>
<section>
<b>Product name:Lays</b><br />

<b>Price:Rs. 25-/</b><br />

<b><button type="button" class="btn btn-block btn-danger">AddToCart</button></b><br />


</section>
</center>
</div>
</div>

</div>




 <div class="item">

    <div class="col-md-4 col-xs-12">
<div class="thumbnail">
<img src="images/of14.png" style="width:100%; height:200px;" class="img-responsive" />

<center>
<section>
<b>Product name:Lays</b><br />

<b>Price:Rs. 25-/</b><br />

<b><button type="button" class="btn btn-block btn-danger">AddToCart</button></b><br />


</section>
</center>
</div>

</div>



<div class="col-md-4 col-xs-12">
<div class="thumbnail">
<img src="images/of22.png" style="width:100%; height:200px;" class="img-responsive" />

<center>
<section>
<b>Product name:Lays</b><br />

<b>Price:Rs. 25-/</b><br />

<b><button type="button" class="btn btn-block btn-danger">AddToCart</button></b><br />


</section>
</center>
</div>
</div>

<div class="col-md-4 col-xs-12">
<div class="thumbnail">
<img src="images/of19.png" style="width:100%; height:200px;" class="img-responsive" />

<center>
<section>
<b>Product name:Lays</b><br />

<b>Price:Rs. 25-/</b><br />

<b><button type="button" class="btn btn-block btn-danger">AddToCart</button></b><br />


</section>
</center>
</div>
</div>

</div>



 <div class="item">

    <div class="col-md-4 col-xs-12">
<div class="thumbnail">
<img src="images/of14.png" style="width:100%; height:200px;" class="img-responsive" />

<center>
<section>
<b>Product name:Lays</b><br />

<b>Price:Rs. 25-/</b><br />

<b><button type="button" class="btn btn-block btn-danger">AddToCart</button></b><br />


</section>
</center>
</div>

</div>



<div class="col-md-4 col-xs-12">
<div class="thumbnail">
<img src="images/of22.png" style="width:100%; height:200px;" class="img-responsive" />

<center>
<section>
<b>Product name:Lays</b><br />

<b>Price:Rs. 25-/</b><br />

<b><button type="button" class="btn btn-block btn-danger">AddToCart</button></b><br />


</section>
</center>
</div>
</div>

<div class="col-md-4 col-xs-12">
<div class="thumbnail">
<img src="images/of19.png" style="width:100%; height:200px;" class="img-responsive" />

<center>
<section>
<b>Product name:Lays</b><br />

<b>Price:Rs. 25-/</b><br />

<b><button type="button" class="btn btn-block btn-danger">AddToCart</button></b><br />


</section>
</center>
</div>
</div>

</div>



  </div>
  
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myProduct" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" style="color:#F00 !important"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myProduct" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" style="color:#F00 !important"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<div class="clearfix"></div>

<div class="clearfix"></div>


</div>


<!--content closed here--->



<!--footer start here--->


<?php

include("footer.php");


?>
<!--footer closed here--->
<!---login form modal start here--->





s

<!---Register form modal start here--->



<!---Register form modal start here--->







</body>
</html>
