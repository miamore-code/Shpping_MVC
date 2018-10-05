<script>

function login()

{

alert('Please Login First For checkout Products')

window.location='index.php';

}






</script>
<div id="Mycart" class="modal fade" role="dialog">


    <div class="modal-dialog" style="width: 80%; height:auto;">
    
    <div class="modal-content">
   
  
            <div class="modal-header">View Cart
                    <button class="btn btn-primary btn-sm pull-right" data-dismiss="modal"><span data-dismiss="modal">&times;</span></button>
                 
                 
                     </div>    

                    
            <div class="modal-body">
            
       <table align="center" width="100%" border="1" class="table-responsive table-hover table-bordered" cellpadding="8" cellspacing="8">
        
        <tr>
            <th>Cartid</th>
            
            <th>Product Image</th>
            
            <th>Pname</th>

            
            <th>Price</th>
            
            <th>Qty</th>

            <th>subtotal</th>

            
            <th>Action</th>
        </tr>

<?php
foreach($crt as $crt1)

{



?>
        <tr>
            <td><?php echo $crt1["cartid"];?></td>
            
            <td> <img height="100px" width="100px" src="<?php echo $crt1['pimage'];?>"></td>
            
            <td><?php echo $crt1["pname"];?></td>
            
            <td><?php echo $crt1["price"];?></td>
            
            <td><?php echo $crt1["qty"];?></td>
            
            <td><?php echo $crt1["subtotal"];?></td>

            <td><a  href="index.php?cartdid=<?php echo $crt1['cartid'];?>" onclick="return confirm('Are you sure to Delete cart')"><span class="fa fa-close" style="font-size:30px; color:red"></span></td>
        
        
        </tr>

       
<?php


    }
    ?>




 <tr>
        
        <td align="right" colspan="7"><h2 style="color:red">Subtotal of products :Rs. 
        
        <?php

    $sel="select sum(subtotal) as total from cart";

    $ex=$c->query($sel);

   $fet=$ex->fetch_array();

   $total=$fet["total"];

    echo $total;


     ?>
        
        
        
        </td>

        </tr>


        <tr>
     <td colspan="7"> <a href="index.php"><button type="button" class="btn btn-success btn-lg">Continue Shopping</button></a>

 
  <button type="button" class="btn btn-danger btn-lg pull-right" onclick="login()">Checkout</button>
 </td> 
 
 
     </tr>


       </table>







        </div>





    </div>



    </div>





</div>