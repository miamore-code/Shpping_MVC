<?php
include("controller/control.php");


?>
<!DOCTYPE HTML>
<html>
<head>
<title>Shoppy an Admin Panel | Signup</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet">
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--//charts-->
</head>
<body>	
<!--inner block start here-->
<div class="signup-page-main">
     <div class="signup-main">  	
    	 <div class="signup-head">
				<h1>Sign Up</h1>
			</div>
			<div class="signup-block">
				<form method="post">
					<input type="text" name="uname" placeholder="Username" required>
					<input type="text" name="em" placeholder="Email" required>
					<input type="password" name="pass" class="lock" placeholder="Password">
                    
                    	<input type="password" name="cpass" class="lock" placeholder="Re-Password">
                        
                        
                        	<input type="text" name="mob" class="lock" placeholder="Mobile">
                            
                            
                        	<input type="radio" name="gender" value="male" class="lock">Male:
                            
                        	<input type="radio" name="gender" value="female" class="lock">FeMale:<br>
                            
                            
                            
                            
                            
                        	<input type="checkbox" name="chk[]" value="reading" class="lock">Reading:
                            
                            
                        	<input type="checkbox" name="chk[]" value="writing" class="lock">Writing:
                            
                            
                        	<input type="checkbox" name="chk[]" value="palying" class="lock">Playing:<br><br>
                            
                            
                      <select name="country" class="lock">
                      
                      <option value="">-select country-</option>
                      
                      <?php
					  
					  foreach($country as $cn1)
					  
					  {
					  
					  ?>
                      
                      
                      <option value="<?php echo $cn1["cid"];?>"><?php echo $cn1["cname"];?></option>
                      
                      
                      
                      <?php
					  }
					  ?>
                      </select>      
                            
                            
					<div class="forgot-top-grids">
						<div class="forgot-grid">
							<ul>
								<li>
									<input type="checkbox" id="brand1" value="">
									<label for="brand1"><span></span>I agree to the terms</label>
								</li>
							</ul>
						</div>
						
						<div class="clearfix"> </div>
					</div>
					<input type="submit" name="sub" value="Sign up">														
				</form>
				<div class="sign-down">
				<h4>Already have an account? <a href="index.php"> Login here.</a></h4>
				  <h5><a href="index.php">Go Back to Home</a></h5>
				</div>
			</div>
    </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<?php
include("include/footer.php");

?>
<!--COPY rights end here-->
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
