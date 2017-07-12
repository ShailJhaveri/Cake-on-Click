<?php
include('header.php');
$q1=mysqli_query($connection,"select * from cake where Cake_id=".$_GET['item_id']);
$product=mysqli_fetch_assoc($q1);
?>
<!--header end-->
<!--breadcrumb -->
<section class="banner">
<h1 class="text-center text-capitalize">you can't buy <strong class="text-uppercase">happiness</strong><br />but you can buy <strong class="text-uppercase">cake</strong><br />& that's kind of the same thing </h1>
</section>

<section class="detail-page">
<div class="col-sm-12">
 <ul class="breadcrumb">
    <li><a href="index.php">Home</a></li>
    <li><a href="#">Product Detail</a></li>        
  </ul>
</div>
</section>

<!--breadcrumb end-->
	<div class="container">
		<div class="col-sm-6">
			<div class="product-image">
		<img src="<?php echo($product['path']);?>"/>
			</div>
		</div>
        <div class="col-sm-6">
			<div class="product-description">
                <div class="left-title">
                    <h3 class="text-capitalize"><?php echo($product['Cakename']);?></h3>			<div class="ratings">
                </div>
                <div class="price">
                <span>Rs.<?php echo($product['Price']);?></span>
                </div>
                    <hr/>
                </div>
                <!--<div class="available">
                <h4>Availability : <span class="in-stock">In stock</span> <span class="out-stock">Out Of Stock</span></h4>
                </div>!-->
                <div class="detail">
                	<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.
There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain.Neque porro.
Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.
There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain.Neque porro.</p>
                </div>
                <!--<div class="weight">
                <input type="radio" name="weight" value="500gms" /><span>500 gms</span>
                <input type="radio" name="weight" value="500gms" /><span>1 kg</span>
               
                </div>!-->
                <div class="btn-block">
<div class="col-md-6"><a href="order.php?item_id=<?php echo($product['Cake_id']);?>" class="price pull-left text-center">BUY NOW</a>
</div>
<div class="col-md-6">
<button><a href="designs.php?shop_id=<?php echo($product['Cakeshop_id']);?>" class="order pull-right text-center">Customize</a></button>
</div>
</div>
                
			</div>
		</div>
	</div>
<!--middle part end-->
<!--related cakes slider start -->
</section>
<div class="container">
<div class="pd-more-info"> <ul id="description_reviews_tabs" class="nav nav-tabs" role="tablist"> <li role="presentation" class="active"> <a href="#description" aria-controls="more_info" role="tab" data-toggle="tab" aria-expanded="true">Description</a></li><li role="presentation" class=""> <a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab" aria-expanded="false">Reviews </a></li></ul><div id="description_reviews_tabs_contents" class="tab-content"> <div role="tabpanel" class="tab-pane active" id="description"> <div itemprop="description" class="oe_structure mt16" id="product_full_description"><p>Lorem ipsum dolor sit amet, ne per minim iuvaret, hinc aliquando ut qui. Per ipsum eirmod denique an. Meis nonumes ea nec, cum corpora instructior in. In vim eirmod epicurei pertinax, pri et erant vivendum, eam no viris qualisque.</p><p>Eam id volumus adolescens, te vel reque vocibus. Mel minim prodesset ex, iriure epicurei no vix, te eam dolore commune complectitur. Duo in quas equidem, sale veniam mel cu. An habemus fastidii assueverit quo, postulant rationibus vim te. His in utamur omittam, in forensibus appellantur eum.</p><p>Te alia viris pro, ei posse soluta voluptatibus sed. Ea eum equidem pericula, vis quod ridens disputando an. Elit illud periculis ne his. Tempor expetenda ut pri, sed ei graeco eruditi. Ne autem dicta definitiones duo. Eum nulla soleat mollis te, duis ferri laoreet sed te, est te feugiat definiebas. Te admodum voluptua hendrerit vix.</p><p>Eruditi adversarium an pri. Ne dolor tritani usu, justo ponderum no mea. Ius ei ludus pericula, dicat evertitur argumentum sea cu. Laudem intellegam eos id, in vivendum splendide mel. Suas hinc aliquando no cum, cu vis possit numquam invenire. Nam ei mazim lobortis erroribus, sed et admodum alienum gubergren.</p><p>Duo an exerci option. Tation detraxit vix cu, legimus splendide sea ea, nec eros consul alterum cu. Ei deserunt complectitur mea. Meis nonumes copiosae cu eos, brute ubique intellegam per ea.</p></div><div class="oe_structure"></div></div><div role="tabpanel" class="tab-pane" id="reviews"> <section class="container"> <div class="row col-md-10 col-md-offset-1"> <div class="text-muted"> <h3 class="fa fa-comment-o"> <a id="comments"> 0 comment</a></h3></div> <section id="discussion" class="hidden-print oe_website_portal o_website_mail_thread"> <section class="mb32 hidden-print"> <h3>Leave a comment</h3><p>You must be <a href="/web/login?redirect=http%3A%2F%2Ftheme-kingfisher-pro-fashion.biztechconsultancy.com%2Fshop%2Fproduct%2Fblue-blazer-3%23discussion">logged in</a> to post a comment.</p></section><div class="clearfix"></div><ul class="media-list o_website_comments">  </ul></section></div></section></div></div></div>
</div>
<!--services top-cakes end -->
<section class="services shop-by-category">

<div class="container">
<div class="title-block">
<h3>Related Products</h3>
<img src="img/black-divider.png"/>

<p class="sub-title">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.
There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain.Neque porro.</p>
</div>

<div class="image-container">
<div class="slider3">
  <?php
$q2=mysqli_query($connection,"select * from cake where category_no=".$product['category_no']);
while($pro=mysqli_fetch_assoc($q2))
{
?>
  <div class="slide cake-type">
<div class="wedding-cake img-thumbnail">
<div class="product-icon"><img src="img/cupcake-icon1.png" /></div>
<a href="#"><div class="image-section"><img src="<?php echo($pro['path']);?>"/>
<div class="hover-div"></div></div></a>
<h4><?php echo($pro['Cakename']);?></h4>
<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
<div class="btn-block">
<a href="#" class="price pull-left text-center"><?php echo('Rs. '.$pro['Price']);?></a>
<button><a href="" class="order pull-right text-center">Order it now</a></button>
</div>
</div>
</div>
<?php
}
?>
<div class="more-product col-sm-12 text-center">
<div class="view-more"><a href="#">view all categories</a></div>
</div>
</div>

</section>
<?php
include('footer.php');
?>