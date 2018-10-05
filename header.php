
<div class="header">
<div class="container-fluid">
<div class="row">

<div class="col-md-12 col-xs-12">

<div id="logo">
<h1 align="center"><span style="color:#FB5200; font-size:35px">Ne</span>w <span style="color:#FB5200; font-size:35px">Er</span>a <span style="color:#FB5200; font-size:35px">sh</span>opping <span style="color:#FB5200; font-size:35px">Ce</span>nter</h1>
<p align="center">The Best Shoping  Supermarket</p>
</div>

<div id="wishlist">

<center>
<span class="fa fa-heart"> Wishlist </span> 

<?php
if(!isset($_SESSION["rid"]))
{

?>

<span class="fa fa-user"><a href="#Login"  data-target="#MyLogin" data-toggle="modal"> Login </a></span> 
<span class="fa fa-arrow-left"><a href="#Register" data-toggle="modal" data-target="#MyRegister"> Register </a></span>

<?php
}
?>
<span class="glyphicon glyphicon-edit"> Order Histroy </span>


<span class="fa fa-user">Shopping </span>



<a href="#Mycart" data-toggle="modal" data-target="#Mycart"><span class="fa fa-shopping-cart" style="font-size:25px; color:orange; float:right"> Cart <div class="badge badge-info" style="font-size:38px">
<?php
$sel="select count(cartid) as total from cart";

$ex=$c->query($sel);
$fet=$ex->fetch_array();
echo "<b style='color:red;'>".$fet["total"]."</b>";



?>


</div></span></a>
</center>
</div>


</div>
</div>
</div>
</div>

<div class="clearfix"></div>



<?php

include("viewcart.php");


?>