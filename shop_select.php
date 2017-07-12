<?php
session_start();
$connection=mysqli_connect("localhost","root");
mysqli_select_db($connection,"coc");
$q1=mysqli_query($connection,"select * from cakeshop where shop_id=".$_GET['shop_id']);
$shop=mysqli_fetch_assoc($q1);
include('header.php');
?> 

<section class="main-slider">
<div class="container-fluid">
<div class="slider1">
  <div class="slide"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $shop['pic'] ).'"/>';?>
  <div class="captions">
              <h2 class="animated-h2-1 text-capitalize">We are here withour great cakes</h2>
              <p class="animated-p-1">We offer convinience of E-Commerce merged with the trustworthiness of cakeshops</p>
            </div><!--end of captions-->
  </div><!--end of slide -->
</div>
	</section>
<section class="services">
<div class="for-border">
<div class="container">
<div class="title-block">
<h3>Menu</h3>
<img src="img/bg-divider-dark-section-header.png"/>

<p class="sub-title">The cakes our shop is currently offering.</p>
</div>

<div class="image-container">
<?php

$q2 = mysqli_query($connection,"select * from cake where shop_id=".$_GET['shop_id']);
	 while ($top =  mysqli_fetch_assoc($q2))
	{
		?>
<div class="col-sm-3 cake-type">
		<div class="wedding-cake img-thumbnail">
<div class="product-icon"><img src="img/cupcake-icon1.png" /></div>
<a href="product.php??item_id=<?php echo $top['Cake_id']; ?>"><div class="image-section"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $top['picture'] ).'"/>';?>
<div class="hover-div"></div></div></a
<h4><?php echo $top['Cakename']?></h4>
<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
<div class="btn-block">
<a href="#" class="price pull-left text-center"><?php echo 'Rs '.$top['Price']?></a>
<button><a href="order.php??item_id=<?php echo $top['Cake_id']; ?>" class="order pull-right text-center">Remove</a></button>
</div>
</div>
</div>
	<?php 
}?>


</div>
<div class="more-product col-sm-12 text-center">
<div class="view-more"><a href="#">view all cakes</a></div>
</div>
</div>
</div>
</section>



<?php 
include('footer.php');
?>