
<div id="MyRegister" class="modal fade" role="dialog">

<div class="modal-dialog">
<div class="modal-content" style="background-color:#D2FFFF">

<button type="button" class="close" data-dismiss="modal"   style="color:#F00;"> <h2 style="font-size:45px; padding:10px"> &times; </h2></button>


<div class="modal-header"><h2 align="center">My Register Form</h2></div>


<div class="modal-body">

<form method="post" enctype="multipart/form-data">


<div class="form-group">
<label>Enter Email:</label>
<input type="text" name="em" placeholder="enter email" required="required" class="form-control" />
</div>



<div class="form-group">
<label>Enter Password:</label>
<input type="password" name="pass" placeholder="Enter Password" required="required" class="form-control" />
</div>




<div class="form-group">
<label>Enter Re-Password:</label>
<input type="password" name="cpass" placeholder="Enter Password" required="required" class="form-control" />
</div>


<div class="form-group">
<label>Upload Image:</label>
<input type="file" name="img"  class="form-control" />
</div>


<div class="form-group">
<label>Enter Mobile:</label>
<input type="number" name="mob" placeholder="Enter Mobile" required="required" class="form-control" />
</div>



<div class="form-group">
<label>Select country:</label>
<select name="country"  class="form-control">
<option value="">-select country-</option>

<?php
foreach($cnn as $cn1)

{
?>

<option value="<?php echo $cn1["cid"];?>"><?php echo $cn1["cname"];?></option>


<?php
}
?>

</select>
</div>


<div class="form-group">

<input type="submit" name="sub" value="Register" class="btn btn-lg btn-success"/>


<input type="reset" name="clear" value="Reset" class="btn btn-lg btn-danger"/>


</div>






</form>
</div>
</div>

</div>
</div>
