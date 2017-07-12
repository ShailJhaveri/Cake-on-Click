<?php
include('header.php');
$pinco=$_POST['pin'];
?>
<div class="image-container">
<?php
$q1=mysqli_query($connection,"select * from branch where pin BETWEEN $pinco-5 AND $pinco+5");
while($branch=mysqli_fetch_assoc($q1))
{
 $q2=mysqli_query($connection,"select * from cakeshop where Branch_id=$branch['Branch_id']");
 $shop=mysqli_fetch_assoc($q2);
?>

 <div class="col-sm-3 cake-type">
		<div class="wedding-cake img-thumbnail">
<div class="product-icon"><img src="img/cupcake-icon1.png" /></div>
<a href="listing-page.php??shop_id=<?php echo $shop['shop_id']; ?>"><div class="image-section"><?php echo '<img src="'.$shop['path'].'" alt="header img">'?>
<div class="hover-div"></div></div></a>
<h4><?php echo $shop['Name']?></h4>
<p><?php echo $branch['Address']?></p>
<div class="btn-block">
<button><a href="listing-page.php??shop_id=<?php echo $shop['shop_id']; ?>" class="order pull-right text-center">Shop now</a></button>
</div>
</div>
</div>
<?php
}
?>
</div>

<?php
include('footer.php');
?>