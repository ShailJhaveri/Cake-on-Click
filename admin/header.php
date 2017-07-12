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
<link rel="stylesheet" href="../css/jquery.bxslider.css" />
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/order-style.css" />
<link rel="stylesheet" href="../css/style.css" />

<link rel="stylesheet" href="../css/admin-index-style.css" />



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

<script type="text/javascript">
alert("cannot acces this page without login");
</script>
<?php
//header("location:../index.php");
}
else
{
?>

<li>welcome,<?php echo $_SESSION['username'];?></li>
<li><a href="../destroy.php"><button type="button" class="btn btn-info btn-lg">sign out</button></a></li>
<?php
}
?>	

</ul>
</div>
</div>
<nav class="navbar">

  <div class="container">  
  <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><img src="../img/logo.png" alt="Cake On Click" title="Cake On Click" /></a>
    </div>
    
    <ul class="nav navbar-nav">
      <?php
	  
	  $a=basename($_SERVER['PHP_SELF']);
	  
	  if(strcmp($a,"index.php")==0)
	  {
		  ?>
	  <li class="active"><a href="index.php">orders</a></li>
 <?php
	  }
	  else
	  {
		  ?>
		  <li><a href="index.php">orders</a></li>
	  <?php
	  }
	  if(strcmp($a,"menu.php")==0)
	  {
		  ?>
	  <li class="active"><a href="menu.php">Menu</a></li>
    <?php
	  }
	  else
	  {
		?>
      <li><a href="menu.php">Menu</a></li>		
	  <?php
	  }
	  if(strcmp($a,"addcake.php")==0)
	  {
		  ?>
	  <li class="active"><a href="addcake.php">Add cake</a></li>
    <?php
	  }
	  else
	  {
		?>
    <li><a href="addcake.php">Add cake</a></li>		
	  <?php
	  }
	  if(strcmp($a,"editprofile.php")==0)
	  {
		  ?>
	  <li class="active"><a href="editprofile.php">Edit Profile</a></li>
    <?php
	  }
	  else
	  {
		?>
    <li><a href="editprofile.php">Edit Profile</a></li>		
	  <?php
	  }
	  if(strcmp($a,"contact.php")==0)
	  {
		  ?>
	  <li class="active"><a href="contactus.php">Contact Us</a></li>
    <?php
	  }
	  else
	  {
		?>
    <li><a href="contactus.php">Contact Us</a></li>		
	  <?php
	  }
    ?>
	</ul>
  </div>
 
</nav>
</section>
</header>