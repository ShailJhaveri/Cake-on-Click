<?php
include('header.php');

?>
<section class="services">
<div class="for-border">
<div class="container">
<div class="title-block">
<h3>Select design for your cake</h3>
<img src="img/bg-divider-dark-section-header.png"/>

<p class="sub-title">Following designs are provided by the cake shop</p>
</div>
<div class="image-container">

<?php

$q1=mysqli_query($connection,"select * from designs where shop_id=".$_GET['shop_id']);

	 while ($designs=mysqli_fetch_assoc($q1))
	{
		?>
<div class="col-sm-3 cake-type">
		<div class="wedding-cake img-thumbnail">
<div class="product-icon"><img src="img/cupcake-icon1.png" /></div>
<?php echo '<img src="'.$designs['path'].'" alt="header img">'?>
<div class="hover-div"></div></div>
<h4><?php echo $designs['name']?></h4>
<p><?php echo $designs['details']?></p>
<div class="btn-block">
<a href="#" class="price pull-left text-center"><?php echo 'Rs '.$designs['price']?></a>
<button onclick="window.location.href='order.php?item_id=<?php echo $['design_id'];?>'"><a href="#" class="order pull-right text-center">select this</a></button>

</div>
</div>
</div>
	<?php 
	if($count==4)
	{break;}}?>


</div>
<div class="more-product col-sm-12 text-center">
<div class="view-more"><a href="cakes.php">view all cakes</a></div>
</div>
</div>
</div>
</section>





<?php
include('footer.php');
?>