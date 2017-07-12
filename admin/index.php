<?php
include('header.php');
mysqli_select_db($connection,"coc");
$q1=mysqli_query($connection,"select * from cakeshop where shop_id=".$_SESSION['user_id']);
$shop=mysqli_fetch_assoc($q1);
?> 


<center>
<div>
<?php echo '<img src="../'.$shop['path'].'" alt="header img" height="200px" width="200px">'?>
</div>
</center>

    <hr />
       
            <!-- Tab panes -->
 <div class="container">
	<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container">           <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
              <div class="list-group">
                <a href="#" class="list-group-item active text-center">
                  New Orders
                </a>
                <a href="#" class="list-group-item text-center">
                  Approved Orders
                </a>
                <a href="#" class="list-group-item text-center">
                  Delivered Orders
                </a>
                
              </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                <!-- flight section -->
                <div class="bhoechie-tab-content active">
                  <center>
							<table class="table table-striped">
							<th>Order_id</th>
							<th>Cake Name</th>
							<th>Photo Cake</th>
							<th>Payment Type</th>
							<th>Price</th>
							<th>QUantity</th>
							<th>Home Delivery</th>
							<th>Inscription</th>
							<th>Candles</th>
							<th colspan='2'>action</th>
<?php
$q3=mysqli_query($connection,"select * from order_new where status=0 AND shop_id=".$_SESSION['user_id']);
while($order=mysqli_fetch_assoc($q3))
{
?>	
<a href="#"><tr>
   <td><?php echo($order['order_id'])?></td>
	<?php 
	$q=mysqli_query($connection,"select Cakename from cake where Cake_id=".$order['cake_id']);
	$cake=mysqli_fetch_assoc($q);
	?>
	<td><?php echo($cake['Cakename']);?></td>
<td><?php if(!$order['photo']==""){echo('<a href="../'.$order['photo'].'">View</a>');}else{echo("");}?></td>
<td><?php if($order['payment_method']==0){echo("Advance Payment");}else{echo("Cash");}?></td>
<td><?php echo($order['price'])?></td>
<td><?php echo($order['quantity'])?></td>
<td><?php if($order['home_delivery']==0){echo("No");}else{echo("Yes");}?></td>
<td><?php echo($order['inscription'])?></td>
<td><?php if($order['candles']==0){echo("No");}else{echo("Yes");}?></td>
<td><a href="aproove.php?action=aproove&orderid=<?php echo($order['order_id'])?>">aproove</a></td>
<td><a href="aproove.php?action=disaproove&orderid=<?php echo($order['order_id'])?>">Disaproove</a></td>
	
	</tr></a>
	
<?php
}
?>							
							</table>
                            </center>
							
                </div>
                <!-- train section -->
                <div class="bhoechie-tab-content">
                
                   <center>
							<table class="table table-striped">
							<th>Order_id</th>
							<th>Cake Name</th>
							<th>Photo Cake</th>
							<th>Payment Type</th>
							<th>Price</th>
							<th>QUantity</th>
							<th>Home Delivery</th>
							<th>Inscription</th>
							<th>Candles</th>
							<th>Action</th>
<?php
$q3=mysqli_query($connection,"select * from order_new where status=1 AND shop_id=".$_SESSION['user_id']);
while($order=mysqli_fetch_assoc($q3))
{
?>	
<a href="#"><tr>
   <td><?php echo($order['order_id'])?></td>
	<?php 
	$q=mysqli_query($connection,"select Cakename from cake where Cake_id=".$order['cake_id']);
	$cake=mysqli_fetch_assoc($q);
	?>
	<td><?php echo($cake['Cakename']);?></td>
	<td><?php if(!$order['photo']==""){echo('<a href="../img/"'.$order['photo'].' download="image.jpg">Download Image</a>');}?></td>
<td><?php if($order['payment_method']==0){echo("Advance Payment");}else{echo("Cash");}?></td>
<td><?php echo($order['price'])?></td>
<td><?php echo($order['quantity'])?></td>
<td><?php if($order['home_delivery']==0){echo("No");}else{echo("Yes");}?></td>
<td><?php echo($order['inscription'])?></td>
<td><?php if($order['candles']==0){echo("No");}else{echo("Yes");}?></td>
<td><a href="aproove.php?action=delivered">Delivered</a></td>

	</tr></a>
<?php
}
?>							
							</table>
                            </center>
					
                </div>
    
                <!-- hotel search -->
                <div class="bhoechie-tab-content">
                  <center>
							<table class="table table-striped">
							<th>Order_id</th>
							<th>Cake Name</th>
							<th>Photo Cake</th>
							<th>Payment Type</th>
							<th>Price</th>
							<th>QUantity</th>
							<th>Home Delivery</th>
							<th>Inscription</th>
							<th>Candles</th>
							<th>Action</th>
<?php
$q3=mysqli_query($connection,"select * from order_new where status=2 AND shop_id=".$_SESSION['user_id']);
while($order=mysqli_fetch_assoc($q3))
{
?>	
<a href="#"><tr>
   <td><?php echo($order['order_id'])?></td>
	<?php 
	$q=mysqli_query($connection,"select Cakename from cake where Cake_id=".$order['cake_id']);
	$cake=mysqli_fetch_assoc($q);
	?>
	<td><?php echo($cake['Cakename']);?></td>
<td><?php if(!$order['photo']==""){echo("yes");}else{echo("no");}?></td>
<td><?php if($order['payment_method']==0){echo("Advance Payment");}else{echo("Cash");}?></td>
<td><?php echo($order['price'])?></td>
<td><?php echo($order['quantity'])?></td>
<td><?php if($order['home_delivery']==0){echo("No");}else{echo("Yes");}?></td>
<td><?php echo($order['inscription'])?></td>
<td><?php if($order['candles']==0){echo("No");}else{echo("Yes");}?></td>
<td><a href="aproove.php?action=disaproove">Remove</a></td>

	</tr></a>
<?php
}
?>							
							</table>
                            </center>
					
                </div>
                            
     </div>
  </div>
</div>
</div>        
	</body>	
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.bxslider.js"></script>
<script>
$(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});
</script>





</html>
