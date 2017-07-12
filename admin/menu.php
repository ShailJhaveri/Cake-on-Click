<?php
include('header.php');
$q1=mysqli_query($connection,"select * from cakeshop where shop_id=".$_SESSION['user_id']);
$shop=mysqli_fetch_assoc($q1);

?> 

</div>

<center>
<div>
<?php echo '<img src="../'.$shop['path'].'" alt="header img hieght="200px" width="200px">'?>
</div>
</center>
<div>
</div>


<section class="services">
<div class="for-border">
<div class="container">
<div class="title-block">
<h3>Menu</h3>
<img src="../img/bg-divider-dark-section-header.png"/>

<p class="sub-title">The cakes Your shop is currently offering.</p>
</div>

<div class="image-container">
<?php
$connection = mysqli_connect("localhost", "root");
		  mysqli_select_db($connection,"coc");
$q2 = mysqli_query($connection,"select * from cake where shop_id=1");
	 while ($top =  mysqli_fetch_assoc($q2))
	{
		?>
<div class="col-sm-3 cake-type">
		<div class="wedding-cake img-thumbnail">
<div class="product-icon"><img src="../img/cupcake-icon1.png" /></div>
<a href="product.php??item_id=<?php echo $top['Cake_id']; ?>"><div class="image-section"><?php echo '<img src="../'.$top['path'].'" alt="header img">'?>
<div class="hover-div"></div></div></a>
<h4><?php echo $top['Cakename']?></h4>
<p><?php echo $top['Details']?></p>
<div class="btn-block">
<a href="#" class="price pull-left text-center"><?php echo 'Rs '.$top['Price']?></a>
<button onclick="window.location.href='edit.php?cake_id=<?php echo $top['Cake_id'];?>'"><a href="#" class="order pull-right text-center">Edit</a></button>
<button onclick="window.location.href='action.php?action=remove&item_id=<?php echo $top['Cake_id'];?>'"><a href="#" class="order pull-right text-center">Remove</a></button>
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

<div style="height:100px;">
</div>


<?php 
include('footer.php');
?>