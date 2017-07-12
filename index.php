<?php
 include ('header.php');
?>

	 <!--slider start -->
<section class="main-slider">
<div class="container-fluid">
<div class="slider1">
  <?php	$q1 = mysqli_query($connection,"select * from slider");
	 while ($pro =  mysqli_fetch_assoc($q1))
	{
  ?>
		
  <div class="slide"><?php echo '<img src="'.$pro['path'].'" alt="header img">'?>
  <div class="captions">
              <h2 class="animated-h2-1 text-capitalize"><?php echo $pro['text']?></h2>
              <p class="animated-p-1">We offer convinience of E-Commerce merged with the trustworthiness of cakeshops</p>
            </div><!--end of captions-->
  </div><!--end of slide -->
  
  
	<?php }?>
</div>
	</section>
<section class="services">
<div class="for-border">
<div class="container">
<div class="title-block">
<h3>Top cakes of the week</h3>
<img src="img/bg-divider-dark-section-header.png"/>

<p class="sub-title">Top Cakes are decided based on the original data and review and rating by the customers.</p>
</div>
<div class="image-container">

<?php
$q2 = mysqli_query($connection,"select * from cake order by Rating DESC");
	 $count=0;
	 while ($top =  mysqli_fetch_assoc($q2))
	{
		$count=$count+1;
		?>
<div class="col-sm-3 cake-type slideanim">
		<div class="wedding-cake img-thumbnail">
<div class="product-icon"><img src="img/cupcake-icon1.png" /></div>
<a href="product.php?item_id=<?php echo $top['Cake_id']; ?>"><div class="image-section"><?php echo '<img src="'.$top['path'].'" alt="header img">'?>
<div class="hover-div"></div></div></a>
<h4><?php echo $top['Cakename']?></h4>
<p><?php echo $top['Details']?></p>
<div class="btn-block">
<a href="#" class="price pull-left text-center"><?php echo 'Rs '.$top['Price']?></a>
<button onclick="window.location.href='order.php?item_id=<?php echo $top['Cake_id'];?>'"><a href="#" class="order pull-right text-center">Order it now</a></button>

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
<!--services top-cakes end -->
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
<a href="product.php?item_id=<?php echo $top['Cake_id'];?>"><div class="image-section"><?php echo '<img src="'.$top['path'].'" alt="header img">'?>
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

</section>
<!--shop by category end-->
<section class="services shop-by-cake-shop">
<div class="for-border">
<div class="container">
<div class="title-block">
<h3>shop by cake-shops </h3>
<img src="img/bg-divider-dark-section-header.png"/>

<p class="sub-title">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.
There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain.Neque porro.</p>
</div>
<div class="image-container">
<!--slider start-->
<div class="slider4">
<?php
$q10=mysqli_query($connection,"select * from cakeshop");
while($shop=mysqli_fetch_assoc($q10))
{
?>
  <div class="slide"><a href="listing-page.php?shop_id=<?php echo($shop['shop_id']);?>"> <img src="<?php echo($shop['path']);?>" alt="<?php echo($shop['Name']);?>" title="<?php echo $shop['Name']?>" /></a></div>
<?php
}
?>
  
</div><!--slider end-->




<div class="more-product col-sm-12 text-center">
<div class="view-more"><a href="#">view all cake-shops</a></div>


<!--1st image block end-->

</div>
</section>
<!--shop by cake shops-->
<!--testimonial start-->
<section class="testimonial">
<div class="container">
<div class="title-block">
<h3>our happy customers testimonials</h3>
<img src="img/black-divider.png"/>

<p class="sub-title">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.
There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain.Neque porro.</p>
</div>
<div class="testimonial-container">
<div class="col-sm-4 text-center">
<div class="quote slideanim">
<blockquote>"eque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.
There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain.Neque porro."</blockquote>
<div class="person-name">Utsavi Shah</div>
<div class="read-more">
<a href="#">Read More</a>
</div>
</div>
</div>
<!--1st quote end-->
<div class="col-sm-4 text-center">
<div class="quote slideanim">
<blockquote>"eque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.
There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain.Neque porro."</blockquote>
<div class="person-name">Utsavi Shah</div>
<div class="read-more">
<a href="#">Read More</a>
</div>
</div>
</div><!--2nd quote end-->
<div class="col-sm-4 text-center">
<div class="quote slideanim">
<blockquote>"eque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.
There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain.Neque porro."</blockquote>
<div class="person-name">Utsavi Shah</div>
<div class="read-more">
<a href="#">Read More</a>
</div>
</div>
</div>
<!--3rd quote end-->
<div class="more-product col-sm-12 text-center">
<div class="view-more"><a href="#">view all testimonials</a></div>

</div>
</div>

</div>

</div>

</section>
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
<div class="feature-detail slideanim">
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
<div class="feature-detail slideanim">
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
<div class="feature-detail slideanim">
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
<div class="feature-detail slideanim">
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
<div class="col-sm-8 slideanim">
<form name="contact-form" id="contact-us-form" slideanim>
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

<!--google map end-->
<!--footer start -->
<?php
// include('footer.php');
 ?>
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

</body>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>!-->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.bxslider.js"></script>

<script>
$(document).ready(function(){
	$('.slider1').bxSlider({
    mode: 'fade',
    minSlides: 1,
    maxSlides: 1,
	auto:true,
	pause: 6000,
	captions:true,
    slideMargin: 0,
    easing: 'ease-in-out',
    speed: 2000,
	pager:false ,
	slideMargin:0
	
	 
    
  });
  $('.slider4').bxSlider({
    slideWidth:200,
    minSlides: 6,
    maxSlides: 6,
    moveSlides: 1,
	pager:false,
	auto:true,
    slideMargin: 20
  });
   $('.slider3').bxSlider({
    slideWidth:220,
    minSlides: 2,
    maxSlides: 4,
    moveSlides: 1,
	pager:false,
	auto:true,
    slideMargin: 20
	
	
  });
});
</script>
<script>
$(document).ready(function() {
    $('#loginForm').formValidation({
        framework: 'bootstrap',
        excluded: ':disabled',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            username: {
                validators: {
                    notEmpty: {
                        message: 'The username is required'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    }
                }
            }
        }
    });
});
</script>
<script>
$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("anim");
    }
  });
});
</script>
<script src="js/custom.js"></script>

</html>