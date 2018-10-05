<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>



<form method="post">
<center>
<h2 align="center">Select country</h2>
Select country :<select name="country">
<option value="">-select country-</option>
<?php


$url="http://country.io/names.json";
//$url="jsonformate.json";

$country=file_get_contents($url);

$json=json_decode($country, true);

foreach($json as $cn)
{

?>


<option value="<?php echo $cn;?>"><?php echo $cn;?></option>
 <?php
 
}

 ?>
</select>

<br>



Select country :<select name="country">
<option value="">-select country-</option>
<?php


$url="state.json";
//$url="jsonformate.json";

$state=file_get_contents($url);

$json=json_decode($state, true);

foreach($json as $sn)
{

?>


<option value="<?php echo $sn;?>"><?php echo $sn;?></option>
 <?php
 
}

 ?>

 </select>

</center>

</body>
</html>