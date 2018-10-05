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
<div class=""><h2 align="center">Vrify you Mobile Number</h2></div>


<div class="">

<form method="post" enctype="multipart/form-data">


<div class="form-group">
<label>Enter Your OTP:</label>
<input type="text" name="otp" placeholder="enter Otp" required="required" class="form-control" />
</div>



<div class="form-group">

<input type="submit" name="addotp" value="Verify" class="btn btn-lg btn-success"/>



</div>






</form>
</div>
</div>




<?php

include("footer.php");


?>