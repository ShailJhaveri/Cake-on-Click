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
<link rel="stylesheet" href="css/font-awesome.min.css"/>
<link rel="stylesheet" href="css/bootstrapValidator.min.css" />
<link rel="stylesheet" href="css/order-style.css" />
<link rel="stylesheet" href="css/style.css" />
<title>Cake On Click</title>
</head>

<body>
<header>
<section class="top-header listing-header">


<div class="container">
<div class="col-sm-6 call-us pull-left text-left text-capitalize"><ul><li>call us now :<a href="#">9925644657</a></li><li>get in touch:<a href="mailto:coc@yummycake.com">coc@yummycake.com</a></li></ul></div>
<div class="col-sm-6 get-in-touch pull-right text-right text-capitalize"><ul>
<li class="search"><form action="search.php" method="post" name="search"><input type="text" placeholder="Search Cakes" id="search-box" name="field" required></input><button type="submit">Search</button></form></li>
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

  <div class="container-fluid">  
  <div class="navbar-header">
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="Cake On Click" title="Cake On Click" /></a>
    </div>
     <div class="collapse navbar-collapse" id="myNavbar">
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
  </div>
 
</nav>
</section>
</header>
<!-- header end-->
