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


<script type="text/javascript">

  function subt()

  {

var p=document.getElementById("p").value;

var q=document.getElementById("q").value;


var tot=p*q;

document.getElementById("t").innerHTML=tot;

  }
</script>


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

<!---product category sidebar-->


<div class="col-md-4 col-xs-12">
<div class="list-group">
<div class="list-group-item active" style="background-color:#D56A00"><h2 align="center" style="color:#FFF">Select Category</h2></div>
<div class="list-group-item">


<ul>
<li><a href="#">Select All Product</a></li>

<?php

foreach($cat as $cat1)
{



?>


<li><a href="index.php?catid=<?php echo $cat1["catid"];?>"><?php echo $cat1["catname"];?></a></li>

<?php
}
?>

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

<h1 align="center" style="color:#E17100; left:3px"> Product Descriptions</h1>

<div class="col-md-6 col-xs-12" style="height:450px;">
<?php

foreach($prod as $prod1)
{


?>

<form method="post">
<div class="thumbnail">
<img src="admin/<?php echo $prod1["pimage"];?>" style="width:100%; height:250px;" class="img-responsive" />
</div>

</div>


<div class="col-md-6 col-xs-12" style="height:450px;">

<section style="font-size: 20px">

  
<b><input type="text" name="pid" value="<?php echo $prod1["pid"];?>" readonly style="width: 60px; border:none; display:none"></b><br />

    
<b>Product Name:<input type="text" name="pname" value="<?php echo $prod1["pname"];?>" readonly style="width: 60px; border:none"></b><br />

<b>Product Price:<input type="text" name="price" id="p" value="<?php echo $prod1["price"];?>"  readonly style="background-color:none; border:none; width:45px"></b><br />

<b>Select Color:<input type="text" name="colname" value="<?php echo $prod1["colname"];?>"  readonly style="background-color:none; border:none; width:45px"></b><br />



<b>Select Qty:<select name="qty" id="q" onchange="return subt(this.value)">
    <option value="">-select Qty-</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
</select></b><br />

<b>Subtotal Price:<label  name="subtot" id="t"></label></b><br />


<b>Descriptions:</b>
<p align="justify" style="font-size: 15px"><?php echo $prod1["description"];?></p>







<summary>
    
<details>Product More descriptions :


        <p align="justify" style="font-size: 15px"><?php echo $prod1["description"];?></p>

</details>

</summary>
</section>


<div class="clearfix"></div>

<div class="clearfix"></div>

</div>
</div>
<br><br><br><br>


<b><a href="index.php"><button type="button" class="btn btn-lg btn-success">Continue Shoping</button></a></b>




<b><button type="submit" name="addtocart" style="float:right" class="btn btn-lg btn-danger">AddToCart</button></a></b>



<?php
}

?>

</form>


</div>
</div>

<div class="clearfix"></div>



<h1 align="center" style="color:#E64A00; letter-spacing:4px">Contact Us</h1>

<div class="container-fluid">
<div class="row">

<div class="contact">

<div class="col-md-12 col-xs-12">

<div class="col-md-6 col-xs-12">
<h2 align="center"  style="color:#E64A00; letter-spacing:2px">Contact us</h2>

<form method="post">
<div class="form-group">
<input type="text" name="uname" placeholder="Name *" required="required" class="form-control" />
</div>


<div class="form-group">
<input type="number" name="mob" placeholder="Mobile *" required="required" class="form-control" />
</div>


<div class="form-group">
<input type="email" name="em" placeholder="Email *" required="required" class="form-control" />
</div>


<div class="form-group">
<textarea name="msg" placeholder="Message *" required="required" class="form-control"></textarea>
</div>



<div class="form-group">
<input type="submit" name="sub" class="btn btn-block btn-info" style="background-color:red; border:none" />
</div>

</form>


</div>


<div class="col-md-6 col-xs-12">

<h2 align="center"  style="color:#E64A00; letter-spacing:0px">Local Address</h2>

<address style="color:#FFF; font-size:20px">
<b><span class="fa fa-globe"></span>Company name:Tops Technology Pvt Ltd.</b><br />

<b><span class="fa fa-map-marker"></span>Address:Tops Technology Pvt Ltd.<br />
Naptune tower 4th floor,Kalawad main Road.<br />
Near Jalaram petrol pump,Rajkot-360002.

</b><br />


</address>

</div>
</div>




<h1 align="center" style="color:#FFF; letter-spacing:4px">Get In Toch</h1>
<center>
<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d118143.00957230387!2d70.72621785380856!3d22.27916224270839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1stops+technology+rajkot!5e0!3m2!1sen!2sin!4v1533212672282" width="80%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</center>


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





<?php

include("login.php");


?>



<!---Register form modal start here--->



<?php

include("register.php");


?>
<!---Register form modal start here--->







</body>
</html>
