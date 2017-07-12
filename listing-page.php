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
<?php
$q1=mysqli_query($connection,"select * from cakeshop where shop_id=".$_GET['shop_id']);
$shop=mysqli_fetch_assoc($q1);
if(isset($_GET['shop_id']))
{
?>    
	<li><a href="index.php">Home</a></li>
    <li><a href="#">shops</a></li>
    <li class="active"><a href="#"><?php echo $shop['Name']?></a></li>
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
	  <a class="page-link" href="listing-page.php?shop_id=<?php echo($_GET['shop_id']);?>&page=<?php echo($page-1);?>" aria-label="Previous">
        <?php
	  }
	  if(isset($_GET['cat_id']))
	  {
	?>
	  <a class="page-link" href="listing-page.php?shop_id=<?php echo($_GET['shop_id']);?>&cat_id=<?php echo($_GET['cat_id']);?>&page=<?php echo($page-1);?>" aria-label="Previous">
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
	$q1=mysqli_query($connection,"select * from cake where shop_id=".$_GET['shop_id']);
	if(isset($_GET['cat']))
	{
		$q1=mysqli_query($connection,"select * from cake where shop_id=".$_GET['shop_id']."  and category_no=".$_GET['cat']);
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
      <a class="page-link" href="listing-page.php?shop_id=<?php echo $_GET['shop_id']?>&page=<?php echo $count?>"><?php echo $count?><span class="sr-only">(current)</span></a>
    </li>
    <?php 
	}
	else
	{
		?>
    <li class="page-item"><a class="page-link" href="listing-page.php?shop_id=<?php echo $_GET['shop_id']?>&page=<?php echo $count?>"><?php echo $count?></a></li>
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
      <?php
	  if(!isset($_GET['cat_id']))
	  {
		  ?>
	  <a class="page-link" href="listing-page.php?shop_id=<?php echo($_GET['shop_id']);?>&page=<?php echo($page+1);?>" aria-label="Next">
        <?php
	  }
	  if(isset($_GET['cat_id']))
	  {
		  ?>
	  <a class="page-link" href="listing-page.php?shop_id=<?php echo($_GET['shop_id']);?>&cat_id=<?php echo($_GET['cat_id']);?>&page=<?php echo($page+1);?>" aria-label="Next">
	<?php
	  }
	?>
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
						<li><a href="listing-page.php?<?php echo('shop_id='.$_GET['shop_id'].'&cat=1')?>">Choclate Cakes</a></li>
                        <li><a href="listing-page.php?<?php echo('shop_id='.$_GET['shop_id'].'&cat=2')?>">Non Choclate Cakes</a></li>
                        <li><a href="listing-page.php?<?php echo('shop_id='.$_GET['shop_id'].'&cat=3')?>">Cup Cakes</a></li>
						
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
$q2 = mysqli_query($connection,"select * from cake where shop_id=".$_GET['shop_id']."  LIMIT $start_from,$per_page");	
// echo "<pre>";print_r($q2);exit; 
if(isset($_GET['cat']))
{
$q2 = mysqli_query($connection,"select * from cake where shop_id=".$_GET['shop_id']."  and category_no=".$_GET['cat']."  LIMIT $start_from,$per_page");	
	
}	
	 while ($top =  mysqli_fetch_assoc($q2))
	{
 
	 ?>		

<div class="col-sm-4 cake-type list-cake">
<div class="wedding-cake img-thumbnail">
<div class="product-icon"><img src="img/cupcake-icon1.png" /></div>
<a href="product.php?php echo $top['Cake_id'];?>"><div class="image-section"><?php echo '<img src="'.$top['path'].'" alt="header img">'?>
<div class="hover-div"></div></div></a>
<h4><?php echo $top['Cakename']?></h4>
<p><?php echo $top['Details']?></p>
<div class="btn-block">
<a href="#" class="price pull-left text-center"><?php echo ("Rs ".$top['Price'])?></a>
<button onclick="window.location.href='order.php?item_id=<?php echo $top['Cake_id'];?>'"><a href="#" class="order pull-right text-center">Order it now</a></button>
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
<section class="choose-us">

<div class="container">
<div class="title-block">
<h3>why you choose us !</h3>
<img src="img/bg-divider-dark-section-header.png"/>

<p class="sub-title">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.
There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain.Neque porro.</p>
</div>
<div class="features">
<div class="col-md-3 text-center">
<div class="feature-detail">
<div class="icon-container">
<div class="icon-div">
</div>
</div>
<div class="desc">
<h3>free delivery</h3>
<p>Hi but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the </p>
</div>

</div>
</div>
<!--1st feature end-->
<div class="col-md-3 text-center">
<div class="feature-detail">
<div class="icon-container">
<div class="icon-div">
</div>
</div>
<div class="desc">
<h3>free delivery</h3>
<p>Hi but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the </p>
</div>

</div>
</div>
<!--2nd feature end-->
<div class="col-md-3 text-center">
<div class="feature-detail">
<div class="icon-container">
<div class="icon-div">
</div>
</div>
<div class="desc">
<h3>free delivery</h3>
<p>Hi but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the </p>
</div>

</div>
</div>
<!--3rd feature end-->
<div class="col-md-3 text-center">
<div class="feature-detail">
<div class="icon-container">
<div class="icon-div">
</div>
</div>
<div class="desc">
<h3>free delivery</h3>
<p>Hi but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the </p>
</div>

</div>
</div>


<!--4th feature end-->

</div>

</section>
<!--choose-us scection end-->
<!--contact-us start-->
<section class="contact-us">
<div class="container">
<div class="title-block">
<h3>we wanna here from you!</h3>
<img src="img/black-divider.png"/>

<p class="sub-title">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.
There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain.Neque porro.</p>
</div>

<div class="contact-detail">
<div class="col-sm-8">
<form name="contact-form" id="contact-us-form">
<div class="col-sm-6">
<input type="text" placeholder="Your Name"/>
</div>
<div class="col-sm-6">
<input type="email" placeholder="Your Email" />
</div>
<div class="col-sm-12">
<textarea placeholder="Your Message">
</textarea>
</div>
<div class="col-sm-12">
<input type="submit" value="send your message"/>
</div>
</form>
</div>
<div class="col-sm-4 contact-info">
<div class="col-sm-12 info">
<h3 class="text-capitalize">contact information:</h3>

</div>
<div class="col-sm-12 hrs">
<h3 class="text-capitalize">business hours:</h3>

</div>
</div>
</div>
</div>
</section>
<!--contact-us section end-->
<!--google map start-->
<section class="google-map">
<img src="img/map.png" />
</section>
<!--google map end-->
<!--footer start -->
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
