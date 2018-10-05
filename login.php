
<!---login form modal start here--->

<div id="MyLogin" class="modal fade" role="dialog">

<div class="modal-dialog">
<div class="modal-content" style="background-color:#D2FFFF">

<button type="button" class="close" data-dismiss="modal"   style="color:#F00;"> <h2 style="font-size:45px; padding:10px"> &times; </h2></button>


<div class="modal-header"><h2 align="center">My Login Form</h2></div>


<div class="modal-body">

<form method="post">


<div class="form-group">
<label>Enter Email:</label>
<input type="text" name="em" placeholder="enter email" required="required" class="form-control" />
</div>



<div class="form-group">
<label>Enter Password:</label>
<input type="password" name="pass" placeholder="Enter Password" required="required" class="form-control" />
</div>



<div class="form-group">

<input type="submit" name="log" value="Login" class="btn btn-lg btn-success"/>


<a href="#">Forget Password</a>
</div>

<div class="form-group">

<a href="#MyRegister" data-toggle="modal" data-target="#MyRegister" data-dismiss="modal">New Users?</a>

</div>






</form>
</div>
</div>
</div>
</div>


<?php

include("register.php");

?>