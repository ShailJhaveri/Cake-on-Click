<?php
session_start();
$connection = mysqli_connect("localhost", "root");
mysqli_select_db($connection,"coc");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/jquery.bxslider.css" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
	

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/order/demo.css">
	
	<link rel="stylesheet" href="css/order/j-forms.css">
<link href='styles/google.css' rel='stylesheet' type='text/css'>
    
    
    <script type="text/javascript" src="js/modernizr.js"></script>

<title>Cake On Click</title>
</head>
<body>
<header>
<section class="top-header listing-header">


<div class="container">
<div class="col-sm-6 call-us pull-left text-left text-capitalize"><p>call us now :<a href="#">9925644657</a></p></div>
<div class="col-sm-6 get-in-touch pull-right text-right text-capitalize"><ul><li>get in touch:<a href="mailto:coc@yummycake.com">coc@yummycake.com</a></li>
<?php 
if(!isset($_SESSION['user_id']))
{
?>	
<li><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#loginModal">login</button></li>
<li><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">signup</button></li>
<?php
}
else
{
?>
<li>welcome,<a href="profile.php"><?php echo $_SESSION['username'];?></a></li>
<li><a href="destroy.php"><button type="button" class="btn btn-info btn-lg">sign out</button></a></li>
<?php
}
?>	

</ul>
</div>
</div>
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title">Login</h5>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
                <form id="loginForm" action="login.php" method="post"  onsubmit="return validateForm()" class="form-horizontal" >
                    <div class="form-group">
                        <label class="col-xs-3 control-label" >Username</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" name="username" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3 control-label" >Password</label>
                        <div class="col-xs-5">
                            <input type="password" class="form-control" name="password" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-5 col-xs-offset-3">
                            <button type="submit" class="btn btn-primary" name="submit">Login</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="Register" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title">Register</h5>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
                <form id="registerForm" action="login.php" method="post"  onsubmit="return validateForm()" class="form-horizontal" >
                    <div class="form-group">
                        <label class="col-xs-3 control-label" >Username</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" name="username" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3 control-label" >Password</label>
                        <div class="col-xs-5">
                            <input type="password" class="form-control" name="password" required/>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-xs-3 control-label" >Reenter Password</label>
                        <div class="col-xs-5">
                            <input type="password" class="form-control" name="repassword" required/>
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-xs-3 control-label" >Email id</label>
                        <div class="col-xs-5">
                            <input type="email" class="form-control" name="email" required/>
                        </div>
                    </div>
	                <div class="form-group">
                        <label class="col-xs-3 control-label">Mobile No</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" name="mob" maxlength="10" required/>
                        </div>
                    </div> 
                    <div class="form-group">
                        <div class="col-xs-5 col-xs-offset-3">
                            <button type="submit" class="btn btn-primary" name="btn-signup">Sign Up</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
$q2=mysqli_query($connection,"select * from cakeshop");
$q3=mysqli_query($connection,"SELECT DISTINCT category_name,category_code from category");
?>
<nav class="navbar">

  <div class="container">  
  <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="Cake On Click" title="Cake On Click" /></a>
    </div>
    
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Shops<span class="caret"></span></a>
        <ul class="dropdown-menu">
		<?php
		while($shop=mysqli_fetch_assoc($q2))
		{
			?>
          <li><a href="listing-page.php?shop_id=<?php echo $shop['shop_id']?>"><?php echo $shop['Name']?></a></li>
		<?php
		}
		?>
        </ul>
      </li>
      
    
      <li><a href="gmap.php">Nearby Shops</a></li>
      <li><a class="dropdown-toggle" data-toggle="dropdown" href="cakes.php">Shop by category<span class="caret"></span></a>
	  <ul class="dropdown-menu">
		<?php
		while($cat=mysqli_fetch_assoc($q3))
		{
			?>
          <li><a href="category.php?cat_id=<?php echo $cat['category_code']?>"><?php echo $cat['category_name']?></a></li>
		<?php
		}
		?>
        </ul>
      <li><a href="contactus.php">contact us</a><li>
    </ul>
  </div>
 
</nav>
</section>
</header>




<?php 
  $connection = mysqli_connect("localhost", "root");
									mysqli_select_db($connection,"coc");
									$q1 = mysqli_query($connection,"select * from cake where Cake_id=".$_GET['item_id']);
									$p1=mysqli_fetch_assoc($q1);
									?>
	<div class="wrapper wrapper-640">

		<form  method="post" name="j-forms" class="j-forms" enctype="multipart/form-data" id="j-forms" action="action.php?action=buy&item_id=<?php echo $p1['Cake_id']?>">

			<div class="header">
				<i class="fa fa-birthday-cake"></i>
				<p>cake order form</p>
			</div>
			<!-- end /.header-->

			<div class="content">

				<!-- start token -->
				<div class="token">
					<input type="hidden" name="token_order" value="0a5dea3c87b8554ae59ca09909a87685df08905d059fca8c7d2b078e426d3ac4">		
					
					</div>
				  
				  
					<div style="width=400px;">Cake name:<?php echo $p1['Cakename'];?><?php echo '<img src="'.$p1['path'].'" alt="header img">'?></div>
                    <div>Shop Name:<?php echo $p1['Cakeshop_id'];?>					
				<!-- end token -->

				<div class="divider-text gap-top-20 gap-bottom-45">
					<span>Make your cake!</span>
				</div>

				<!-- start size of the cake -->
				<div class="unit check cake-size">
					<label class="label">Size of the Cake</label>
					<div class="j-row">
						<div class="span6">
							<label class="radio">
								<input type="radio" name="cake_size" value="1/2" data-price="<?php echo ($p1['Price']/2);?>">
								<i></i>
								500 gm
							</label>
							<label class="radio">
								<input type="radio" name="cake_size" value="1" data-price="<?php echo ($p1['Price']);?>">
								<i></i>
								1 kg
							</label>
						</div>
						<div class="span6">
							<label class="radio">
								<input type="radio" name="cake_size" value="2" data-price="<?php echo ($p1['Price']*2);?>">
								<i></i>
								2 kg
							</label>
							<label class="radio">
								<input type="radio" name="cake_size" value="4" data-price="<?php echo ($p1['Price']*4);?>">
								<i></i>
								4 kg
							</label>
						</div>
					</div>
				</div>
				<!-- end size of the cake -->
               
				<div class="divider gap-bottom-25"></div>

				<!-- start filling of e cake -->
				
				<!-- end filling of the cake -->

				<div class="divider gap-bottom-25"></div>

				<!-- start additional things for the cake -->
				<div class="unit lovely-things">
					<label class="label">Lovely Things</label>
					<label class="checkbox">
						<input type="checkbox" name="candles" value="1" data-price="5">
						<i></i>
						Include candles + Rs 5.00
					</label>
					
 <label class="checkbox">
						<input type="checkbox" name="show-photo" value="1" data-price="50" id="show-photo">
						<i></i>
						photo cake + Rs 50.00
					</label>
					<div class="input" id="photo">
						<input type="file"  name="photo"/>
					</div>
						
			<label class="checkbox">
						<input type="checkbox" name="show-inscription" value="inscription-20$"  id="show-inscription">
						<i></i>
						Include inscription 
					</label>
					<div class="input hidden" id="inscription">
						<input type="text" placeholder="enter inscription" name="inscription">
					</div>
				</div>
				<!-- end additional things for the cake -->
            	</div>
				<div class="divider gap-bottom-25"></div>

				<!-- start Pick Up or Delivery -->
				<div class="unit delivery" id="delivery">
					<label class="label">Pick Up or Delivery</label>
					<label class="input select">
						<select autocomplete="off" name="delivery">
							<option value="0" data-price="0">Pick Up</option>
							<option value="1" data-price="5">Delivery </option>
						</select>
						<i></i>
					</label>
				</div>
				<div class="unit delivery" id="delivery">
					<label class="label">Payment method</label>
					<label class="input select">
						<select autocomplete="off" name="pay">
							<option value="0" data-price="0">Advace payment</option>
						<?php if((isset($_SESSION['user_id']))){?>	<option value="1" data-price="0">Cash on delivery/pickup </option>
						<?php }?>
						</select>
						<i></i>
					</label>
				</div>
				<!-- end Pick Up or Delivery -->
        <div>
		Expected Delivery Date<a href="javascript:NewCal('demo3','ddmmmyyyy',true,24)"><img src="img/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a><input id="demo3" type="text" size="20" name="ddate">
        </div>
				<!-- start total price of the cake -->
				<div id="total-cake-price" class="unit hidden">
					<div class="form-details total-price">
						<p>Total Cake Price: </p><span></span>
					</div>
				</div>
				<!-- end total price of the cake-->
				
				<div class="divider-text gap-top-45 gap-bottom-45">
					<span>Contact Details</span>
				</div>
				

				<!-- start name -->
				<?php 
				   if(isset($_SESSION['user_id']))
				   {
					$q3 = mysqli_query($connection,"select * from user where user_id=".$_SESSION['user_id']);
					$p3=mysqli_fetch_assoc($q3);   
				   ?>
			   
				<div class="unit">
					<div class="input">
						<label class="icon-right" for="name">
							<i class="fa fa-user"></i>
						</label>
						<input type="text" id="name" placeholder="Name" name="name" value="<?php echo $p3['Firstname']?>">
					</div>
				</div>
				<!-- end name -->

				<!-- start email phone -->
				<div class="j-row">
					<div class="span6 unit">
						<div class="input">
							<label class="icon-right" for="email">
								<i class="fa fa-envelope-o"></i>
							</label>
							<input type="email" id="email" placeholder="Email" name="email" value="<?php echo $p3['Email']?>">
						</div>
					</div>
					<div class="span6 unit">
						<div class="input">
							<label class="icon-right" for="phone">
								<i class="fa fa-phone"></i>
							</label>
							<input type="text" id="phone" placeholder="Phone" name="phone" value="<?php echo $p3['Mobile']?>">
						</div>
					</div>
				</div>
				<!-- end email phone -->
				   <?php }?>
				   <?php if(!isset($_SESSION['user_id']))
				   {?>					   
				<div class="unit">
					<div class="input">
						<label class="icon-right" for="name">
							<i class="fa fa-user"></i>
						</label>
						<input type="text" id="name" placeholder="Name" name="name">
					</div>
				</div>
				<!-- end name -->

				<!-- start email phone -->
				<div class="j-row">
					<div class="span6 unit">
						<div class="input">
							<label class="icon-right" for="email">
								<i class="fa fa-envelope-o"></i>
							</label>
							<input type="email" id="email" placeholder="Email" name="email" >
						</div>
					</div>
					<div class="span6 unit">
						<div class="input">
							<label class="icon-right" for="phone">
								<i class="fa fa-phone"></i>
							</label>
							<input type="text" id="phone" placeholder="Phone" name="phone">
						</div>
					</div>
				</div>
				<!-- end email phone -->
				   <?php }?>
				<!-- start address -->
				<div class="unit hidden" id="delivery-address">
					<div class="input">
						<label class="icon-right" for="address">
							<i class="fa fa-building-o"></i>
						</label>
						<input type="text" id="address" placeholder="Address" name="add">
					</div>
				</div>
				<!-- end address -->

				<!-- start response from server -->
				<div id="response"></div>
				<!-- end response from server -->

			</div>
			<!-- end /.content -->

			<div class="footer">
				<button type="submit" class="primary-btn" value="">I want this cake</button>
			</div>
			   
			<!-- end /.footer -->

		</form>
	</div>
	<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.bxslider.js"></script>
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
	<!-- Scripts -->
	<script src="js/order/f1.js"></script>
	<script src="js/order/f2.js"></script>
	<script src="js/order/f3.js"></script>
	<script src="js/order/f4.js"></script>
	<script src="js/order/f5.js"></script>
	<script src="js/datetimepicker.js"></script>
	
<script src="js/custom.js"></script>


	<!--[if lt IE 10]>
			<script src="j-folder/js/jquery.placeholder.min.js"></script>
		<![endif]-->

</body>
</html>