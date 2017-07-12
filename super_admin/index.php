<?php
 include ('header.php');
 $connection = mysqli_connect("localhost", "root");
 mysqli_select_db($connection,"coc");
?>



<section class="services">
<div class="for-border">
<div class="container">
<div class="title-block">
<h3>Shops</h3>
<img src="../img/bg-divider-dark-section-header.png"/>

<p class="sub-title">The Shops currently affiliated.</p>
</div>

<div class="image-container">
<?php
$q2 = mysqli_query($connection,"select * from cakeshop");
while ($shop =  mysqli_fetch_assoc($q2))
	{
		?>
<div class="col-sm-3 cake-type">
		<div class="wedding-cake img-thumbnail">
<div class="product-icon"><img src="../img/cupcake-icon1.png" /></div>
<a href="product.php??item_id=<?php echo $shop['shop_id']; ?>"><div class="image-section"><?php echo '<img src="../'.$shop['path'].'" alt="header img">'?>
<div class="hover-div"></div></div></a
<h4><?php echo $shop['Name']?></h4>
<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
<div class="btn-block">
<button><a href="order.php??item_id=<?php echo $shop['shop_id']; ?>" class="order pull-right text-center">Edit</a></button>
<button><a href="order.php??item_id=<?php echo $shop['shop_id']; ?>" class="order pull-right text-center">Remove</a></button>
</div>
</div>
</div>
<?php 
}
?>


</div>
</div>
</div>
</section>

<?php
 include('../admin/footer.php');
?>