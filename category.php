<?php
include('header.php');
?>
<section class="banner">
<h1 class="text-center text-capitalize">you can't buy <strong class="text-uppercase">happiness</strong><br />but you can buy <strong class="text-uppercase">cake</strong><br />& that's kind of the same thing </h1>
</section>
<!--banner section end-->
<!--listing section start -->
<section class="list col-sm-12">
<div class="container">
<div class="row">
<div class="col-sm-12">
 <ul class="breadcrumb">
    
	<li><a href="index.php">Home</a></li>
    <li><a href="#">category</a></li>
<?php
if(isset($_GET['cat_id']))
{
	$q1=mysqli_query($connection,"select * from category where category_code=".$_GET['cat_id']);
    $cat=mysqli_fetch_assoc($q1);
?>
    <li><a href="#"><?php echo $cat['category_name']?></a></li>
	
<?php
}
?>        
  </ul>
  
</div>
</div>
<div class="row">
<div class="col-sm-3">

</div>
<div class="col-sm-9">
<div class="row">
<div class="col-sm-3 pull-left">
<!--<i class="fa fa-th-large"></i>
<i class="fa fa-bars"></i>-->
</div>
<div class="col-sm-9 pull-right text-right">
<div class="list-pager">
<nav class="pagination">
  <ul class="pagination">
    <?php
	$count=1;
	if(isset($_GET['page']))
	{
		$page=$_GET['page'];
	}
	else
	{
		$page=1;
	}
	if($page==1)
	{
		
 ?>
	<li class="page-item disabled">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
	<?php
	}
	else
	{
		?>
	<li class="page-item">
      <?php
	  if(!isset($_GET['cat_id']))
	  {
		  ?>
	  <a class="page-link" href="category.php?page=<?php echo($page-1);?>" aria-label="Previous">
        <?php
	  }
	  if(isset($_GET['cat_id']))
	  {
	?>
	  <a class="page-link" href="category.php?cat_id=<?php echo($_GET['cat_id']);?>&page=<?php echo($page-1);?>" aria-label="Previous">
	<?php
	  }
	?>
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>	
	<?php
	}
	?>
	
	<?php
	if(isset($_GET['cat_id']))
	{
		$q1=mysqli_query($connection,"select * from cake where category_no=".$_GET['cat_id']);
	}
	$cs=mysqli_num_rows($q1);
	if($cs%5==0)
	{	
	$cs=$cs/5;
	}
	else
	{
		$cs=$cs/5+1;
	}
	while($count<=$cs)
	{
    if($count==$page)
	{		
	?>    
     <li class="page-item active">
      <a class="page-link" href="category.php?cat_id=<?php echo $_GET['cat_id']?>&page=<?php echo $count?>"><?php echo $count?><span class="sr-only">(current)</span></a>
    </li>
    <?php 
	}
	else
	{
		?>
    <li class="page-item"><a class="page-link" href="category.php?cat_id=<?php echo $_GET['cat_id']?>&page=<?php echo $count?>"><?php echo $count?></a></li>
	<?php
	}
	$count++;
	}
	if($page==$count-1)
	{
	?>	
	
	<li class="page-item disabled">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
	<?php
	}
	else
	{
	?>	
  <li class="page-item">
      <a class="page-link" href="category.php?cat_id=<?php echo($_GET['cat_id']);?>&page<?php echo($page+1);?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
	<?php
	}
	?>
  </ul>
</nav>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-3">
<div class="left-title">
<h3 class="text-capitalize">Categories</h3>
<hr/>
</div>
<div class="well">
        <div>
            <ul class="nav nav-list">
                <li><label class="tree-toggle nav-header">Categories</label>
                    <ul class="nav nav-list tree">
						<li><a href="category.php?cat_id=<?php echo('1')?>">Choclate Cakes</a></li>
                        <li><a href="category.php?cat_id=<?php echo('2')?>">Non Choclate Cakes</a></li>
                        <li><a href="category.php?cat_id=<?php echo('3')?>">Cup Cakes</a></li>
						
                    </ul>
                </li>
           </ul>
        </div>
        </div>
</div>
<div class="col-sm-9">
<div class="left-title">
<h3 class="text-capitalize">All</h3>
<hr/>
</div>
<!--1st image block start -->
<?php

$per_page=5;
if(isset($_GET['page']))
      {
		  $page=$_GET['page'];
	  }
else
	  {
		  $page=1;
	  }
	  $start_from = ($page-1) * $per_page;

if(isset($_GET['cat_id']))
{
$q2 = mysqli_query($connection,"select * from cake where category_no=".$_GET['cat_id']."  LIMIT $start_from,$per_page");	
	
}	
	 while ($top =  mysqli_fetch_assoc($q2))
	{
 
	 ?>		

<div class="col-sm-4 cake-type list-cake">
<div class="wedding-cake img-thumbnail">
<div class="product-icon"><img src="img/cupcake-icon1.png" /></div>
<a href="product.php?item_id=<?php echo($top['Cake_id']);?>"><div class="image-section"><?php echo '<img src="'.$top['path'].'" alt="header img">'?>
<div class="hover-div"></div></div></a>
<h4><?php echo $top['Cakename']?></h4>
<p><?php echo $top['Details']?></p>
<div class="btn-block">
<a href="#" class="price pull-left text-center"><?php echo ('Rs. '.$top['Price'])?></a>
<button><a href="order.php?item_id=<?php echo($top['Cake_id']);?>" class="order pull-right text-center">Order it now</a></button>
</div>
</div>
</div>
<?php
 }
 
?>	
<!--1st image block end-->
</div>
</div>
</div>
</section>
<!--listing section end-->
<!--choose us start-->
<footer>
<div class="for-border">
<div class="container">
<div class="col-sm-12 text-center social-media">
<p class="social-links"><a href="#"><img src="img/facebook.png" alt="facebook" title="Facebook" /></a><a href="#"><img src="img/twitter.png" alt="twitter" title="Twitter"/></a><a href="#"><img src="img/blog.png" alt="Blog" title="Blog"/></a><a href="#"><img src="img/you-tube.png" alt="you-tube" title="You Tube"/></a></p>
<p class="copy-right text-capitalize">&copy; <span><a href="#">Cake On Click</a></span> .all rights reserved. </p>
</div>
</div>
</div>
</footer>

<!--footer end-->
<a href="#0" class="cd-top"></a>

</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.bxslider.js"></script>
<script>$('.tree-toggle').click(function () {
	$(this).parent().children('ul.tree').toggle(200);
});
$(function(){
$('.tree-toggle').parent().children('ul.tree').toggle(200);
})</script>
<script src="js/custom.js"></script>
</html>
