<?php
include("controller/control.php");

if(!isset($_SESSION["uid"]))


{
	
echo "<script>

window.location='index.php';

</script>";	
	
	
}


?>

<!DOCTYPE HTML>
<html>
<head>
<title>Shoppy For all assecories Admin panel</title>
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
<!--static chart-->
<script src="js/Chart.min.js"></script>
<!--//charts-->
<!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
    <script src="js/chartinator.js" ></script>
    <script type="text/javascript">
        jQuery(function ($) {

            var chart3 = $('#geoChart').chartinator({
                tableSel: '.geoChart',

                columns: [{role: 'tooltip', type: 'string'}],
         
                colIndexes: [2],
             
                rows: [
                    ['China - 2015'],
                    ['Colombia - 2015'],
                    ['France - 2015'],
                    ['Italy - 2015'],
                    ['Japan - 2015'],
                    ['Kazakhstan - 2015'],
                    ['Mexico - 2015'],
                    ['Poland - 2015'],
                    ['Russia - 2015'],
                    ['Spain - 2015'],
                    ['Tanzania - 2015'],
                    ['Turkey - 2015']],
              
                ignoreCol: [2],
              
                chartType: 'GeoChart',
              
                chartAspectRatio: 1.5,
             
                chartZoom: 1.75,
             
                chartOffset: [-12,0],
             
                chartOptions: {
                  
                    width: null,
                 
                    backgroundColor: '#fff',
                 
                    datalessRegionColor: '#F5F5F5',
               
                    region: 'world',
                  
                    resolution: 'countries',
                 
                    legend: 'none',

                    colorAxis: {
                       
                        colors: ['#679CCA', '#337AB7']
                    },
                    tooltip: {
                     
                        trigger: 'focus',

                        isHtml: true
                    }
                }

               
            });                       
        });
    </script>
<!--geo chart-->

<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				
             
   <?php
   include("include/header.php");
   ?>
          
                    
                 
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
<!--market updates updates-->
	 <div class="market-updates">
    
     
				
			</div>
            


            <div class="col-md-9 col-xs-12">

             <h1 align="center">Show All color</h1>
             <br>


             <div class="form-group">

     <table align="center" class="table table-responsive table-bordered table-striped">

      <tr>
    
        <th>Colid</th>
     <th>colname</th>
     <th>description</th>
    <th>Created Date</th>
     <th>Created time</th>



     <th>Action</th>


      </tr>

       <?php

 foreach($col as $col1)

   {

       ?>
      <tr>

     <td><?php echo $col1["colid"];?></td>
<td>
    <?php echo $col1["colname"];?>
</td>
<td>
    <?php echo $col1["description"];?>
</td>
<td>
    <?php echo $col1["created_date"];?>
</td>
<td>
    <?php echo $col1["created_time"];?>
</td>
<td>
<a href="showcolor.php?delcol=<?php echo base64_encode($col1["colid"]);?>" onclick="return confirm('Are you sure to dalete')"><span class="fa fa-close" style="color:red; font-size: 40px" title="Please click to delete color"></span></a>
 




<a href="editcolor.php?edcol=<?php echo base64_encode($col1["colid"]);?>" onclick="return confirm('Are you sure to edit')">
    <span class="fa fa-edit" style="color:green; font-size: 40px" title="Please click to edit color"></span>
</a>

</td>

      </tr>
    
          <?php
    }
    ?>

     </table>




                 </div>






		   <div class="clearfix"> </div>
		</div>
<!--market updates end here-->
<!--mainpage chit-chating-->
				
	
<!--climate start here-->

				      <br><br>   <br><br>  <br><br>  <br><br>  <br><br> 
			  <div class="clearfix"> </div>
			</div>
			
				<div class="col-md-6 popular-follo-right">
					
				</div>
                
                </div>
</div>
			  <div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="clearfix"> </div>
</div>
<!--climate end here-->
</div>
<!--inner block end here-->
<!--copy rights start here-->

</div>
</div>
   <?php
   include("include/footer.php");
   ?>
   




<!--COPY rights end here-->

<!--slider menu-->
   
   
   
   <?php
   include("include/sidebar.php");
   ?>
   
   


<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>                     