
<div class="menu">
<div class="container-fluid">
<div class="row">
<div class="col-md-12 col-xs-12">

<nav class="navbar">

<div class="navbar-header">
<button type="button" class="navbar-toggle btn btn-lg btn-info" style="background-color:#B73C00" data-toggle="collapse" data-target="#mynavbar">

<span class="icon-bar" style="background-color:#FFF"></span>
<span class="icon-bar" style="background-color:#FFF"></span>
<span class="icon-bar" style="background-color:#FFF"></span>

</button>

</div>


<div class="collapse navbar-collapse" id="mynavbar">
<ul>
<?php
if(!isset($_SESSION["rid"]))

{


?>


<li><a href="#">Home</a></li>

<li><a href="#">About</a></li>

    
<li class="dropdown"><a class="dropdown" data-toggle="dropdown" href="#" onmouseup="dropdown" onmouseout="dropdown">  
    
   Home applinces <span class="caret"></span></a>


<ul class="dropdown-menu dropdown-content">

<img src="images/of8.png" style="float:right; width:100px; height:100px; position:absolute; margin-left:55%; border:solid 2px red; padding:15px"  />

<?php

foreach($subcat as $subcat1)
{

   
?>

<li><a href="index.php?subcatid=<?php echo $subcat1["subcatid"];?>"><?php echo $subcat1["subcatname"];?></a></li>

<?php
}

?>
</ul>

</li>

<li class="dropdown"><a class="dropdown" data-toggle="dropdown" href="#" onmouseup="dropdown" onmouseout="dropdown">Electronics<span class="caret"></span></a>

<ul class="dropdown-menu dropdown-content">

<img src="images/of8.png" style="float:right; width:100px; height:100px; position:absolute; margin-left:55%; border:solid 2px red; padding:15px"  />
<li><a href="#">Kadahi</a></li>

<li><a href="#">Pressure cokker</a></li>

<li><a href="#">Gas sylendar</a></li>

<li><a href="#">knife & Cissor</a></li>



</ul>

</li>

<li class="dropdown"><a class="dropdown" data-toggle="dropdown" href="#" onmouseup="dropdown" onmouseout="dropdown">Mens & Womens Clothes<span class="caret"></span></a>

<ul class="dropdown-menu dropdown-content">

<img src="images/of8.png" style="float:right; width:100px; height:100px; position:absolute; margin-left:55%; border:solid 2px red; padding:15px"  />
<li><a href="#">Kadahi</a></li>

<li><a href="#">Pressure cokker</a></li>

<li><a href="#">Gas sylendar</a></li>

<li><a href="#">knife & Cissor</a></li>



</ul>

</li>

<li class="dropdown"><a class="dropdown" data-toggle="dropdown" href="#" onmouseup="dropdown" onmouseout="dropdown">Footwear<span class="caret"></span></a>

<ul class="dropdown-menu dropdown-content">

<img src="images/of8.png" style="float:right; width:100px; height:100px; position:absolute; margin-left:55%; border:solid 2px red; padding:15px"  />

<li><a href="#">Kadahi</a></li>
<li><a href="#">Pressure cokker</a></li>
<li><a href="#">Gas sylendar</a></li>
<li><a href="#">knife & Cissor</a></li>

</ul>

</li>

<li class="dropdown"><a class="dropdown" data-toggle="dropdown" href="#" onmouseup="dropdown" onmouseout="dropdown">medicines<span class="caret"></span></a>

<ul class="dropdown-menu dropdown-content">

<img src="images/of8.png" style="float:right; width:100px; height:100px; position:absolute; margin-left:55%; border:solid 2px red; padding:15px"  />
<li><a href="#">Kadahi</a></li>

<li><a href="#">Pressure cokker</a></li>

<li><a href="#">Gas sylendar</a></li>

<li><a href="#">knife & Cissor</a></li>



</ul>

</li>



<?php

}

else
{


?>

<li><a href="profile.php">profile</a></li>

<li class="dropdown"><a class="dropdown" data-toggle="dropdown" href="#" onmouseup="dropdown" onmouseout="dropdown">Kitchen<span class="caret"></span></a>

<ul class="dropdown-menu dropdown-content">

<img src="images/of8.png" style="float:right; width:100px; height:100px; position:absolute; margin-left:55%; border:solid 2px red; padding:15px"  />
<li><a href="#">Kadahi</a></li>

<li><a href="#">Pressure cokker</a></li>

<li><a href="#">Gas sylendar</a></li>

<li><a href="#">knife & Cissor</a></li>



</ul>

</li>

<li class="dropdown"><a class="dropdown" data-toggle="dropdown" href="#" onmouseup="dropdown" onmouseout="dropdown">Baby& Boys<span class="caret"></span></a>

<ul class="dropdown-menu dropdown-content">

<img src="images/of8.png" style="float:right; width:100px; height:100px; position:absolute; margin-left:55%; border:solid 2px red; padding:15px"  />
<li><a href="#">Kadahi</a></li>

<li><a href="#">Pressure cokker</a></li>

<li><a href="#">Gas sylendar</a></li>

<li><a href="#">knife & Cissor</a></li>



</ul>

</li>

<li class="dropdown"><a class="dropdown" data-toggle="dropdown" href="#" onmouseup="dropdown" onmouseout="dropdown">Mens& Womens<span class="caret"></span></a>

<ul class="dropdown-menu dropdown-content">

<img src="images/of8.png" style="float:right; width:100px; height:100px; position:absolute; margin-left:55%; border:solid 2px red; padding:15px"  />
<li><a href="#">Kadahi</a></li>

<li><a href="#">Pressure cokker</a></li>

<li><a href="#">Gas sylendar</a></li>

<li><a href="#">knife & Cissor</a></li>



</ul>

</li>

<li class="dropdown"><a class="dropdown" data-toggle="dropdown" href="#" onmouseup="dropdown" onmouseout="dropdown">Electronics<span class="caret"></span></a>

<ul class="dropdown-menu dropdown-content">

<img src="images/of8.png" style="float:right; width:100px; height:100px; position:absolute; margin-left:55%; border:solid 2px red; padding:15px"  />

<li><a href="#">Kadahi</a></li>
<li><a href="#">Pressure cokker</a></li>
<li><a href="#">Gas sylendar</a></li>
<li><a href="#">knife & Cissor</a></li>

</ul>

</li>

<li class="dropdown"><a class="dropdown" data-toggle="dropdown" href="#" onmouseup="dropdown" onmouseout="dropdown">Clothes& Watch<span class="caret"></span></a>

<ul class="dropdown-menu dropdown-content">

<img src="images/of8.png" style="float:right; width:100px; height:100px; position:absolute; margin-left:55%; border:solid 2px red; padding:15px"  />
<li><a href="#">Kadahi</a></li>

<li><a href="#">Pressure cokker</a></li>

<li><a href="#">Gas sylendar</a></li>

<li><a href="#">knife & Cissor</a></li>



</ul>

</li>



<li><a href="#">Feedback</a></li>



<li><a href="#">Contact Us</a></li>


<li class="dropdown"><a class="dropdown" data-toggle="dropdown" href="#" onmouseup="dropdown" onmouseout="dropdown"><span style="color:red">Welcome To :<?php echo $_SESSION["em"];?> <span class="caret"></span></span></a>

<ul class="dropdown-menu dropdown-content"  style="width:100px">
<li><a href="#">Profile</a></li>

<li><a href="#">Logout</a></li>



</ul>

</li>



<?php

}

?>
</ul>


</div>

</nav>




</div>
</div>
</div>
</div>

<div class="clearfix"></div>

<div class="clearfix"></div>
