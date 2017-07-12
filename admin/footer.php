<footer>
<div class="for-border">
<div class="container">
<div class="col-sm-12 text-center social-media">
<p class="social-links"><a href="#"><img src="../img/facebook.png" alt="facebook" title="Facebook" /></a><a href="#"><img src="../img/twitter.png" alt="twitter" title="Twitter"/></a><a href="#"><img src="../img/blog.png" alt="Blog" title="Blog"/></a><a href="#"><img src="../img/you-tube.png" alt="you-tube" title="You Tube"/></a></p>
<p class="copy-right text-capitalize">&copy; <span><a href="#">Cake On Click</a></span> .all rights reserved. </p>
</div>
</div>
</div>
</footer>
<!--footer end-->


</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.bxslider.js"></script>

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

</html>