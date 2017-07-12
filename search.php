<?php
include('header.php');
?>
<section class="services">
<div class="for-border">
<div class="container">
<div class="title-block">
<h3>Search Result</h3>
<img src="img/bg-divider-dark-section-header.png"/>

<p class="sub-title"></p>
</div>

<div class="col-sm-9">
<?php
if(!$_POST['field']=="")
{
$q2 = mysqli_query($connection,"select * from cake where Cakename LIKE '%".$_POST['field']."%'");
	 
	 while ($top =  mysqli_fetch_assoc($q2))
	
	{
		?>
		<div class="col-sm-4 cake-type list-cake">
<div class="wedding-cake img-thumbnail">
<div class="product-icon"><img src="img/cupcake-icon1.png" /></div>
<a href="product.php?item_id=<?php echo $top['Cake_id'];?>"><div class="image-section"><?php echo '<img src="'.$top['path'].'" alt="header img">'?>
<div class="hover-div"></div></div></a>
<h4><?php echo $top['Cakename']?></h4>
<p><?php echo $top['Details']?></p>
<div class="btn-block">
<a href="#" class="price pull-left text-center"><?php echo ('Rs. '$top['Price'])?></a>
<button onclick="window.location.href='order.php?item_id=<?php echo $top['Cake_id'];?>'"><a href="#" class="order pull-right text-center">Order it now</a></button>
</div>
</div>
</div>

	
	<?php 
}}
	?>



<div class="more-product col-sm-12 text-center">
<div class="view-more"><a href="cakes.php">view all cakes</a></div>
</div>
</div>
</div>
</div>
</section>

<section class="services shop-by-category">

<div class="container">
<div class="title-block">
<h3>Shop by categories</h3>
<img src="img/black-divider.png"/>

<p class="sub-title">We provide cakes in multiple categories.Shopping by categories may help you to find the cae you want
easily and fast.Designer and photo cakes are avaiable for all cakes.</p>
</div>
<div class="image-container">
<div class="slider3">
  <?php
     $q3 = mysqli_query($connection,"select * from cake");
	 $counti=1;
	 while ($top =  mysqli_fetch_assoc($q3))
	{
		if($top['category_no']==$counti)
		{
		$counti=$counti+1;
		?>
  <div class="slide cake-type">
<div class="wedding-cake img-thumbnail">
<div class="product-icon"><img src="img/cupcake-icon1.png" /></div>
<a href="#"><div class="image-section"><?php echo '<img src="'.$top['path'].'" alt="header img">'?>
<div class="hover-div"></div></div></a>
<h4><?php echo $top['category'];?></h4>
<p><?php echo $top['Details'];?></p>
<div class="btn-block">
<a href="#" class="price pull-left text-center"><?php echo 'Rs. '.$top['Price'];?></a>
<button onclick="window.location.href='order.php?item_id=<?php echo $top['Cake_id'];?>'"><a href="#" class="order pull-right text-center">Order it now</a></button>
</div>
</div>
</div>
<?php
		}
	}		
   
?>
 
</div>
</div>
<div class="more-product col-sm-12 text-center">
<div class="view-more"><a href="cakes.php">view all categories</a></div>
</div>
</div>

/section>




<?php
include('footer.php');
?>