<?php
session_start();
if(!isset($_SESSION['user_id']))
{
	header("location:../index.php");
}
else
{
 $connection = mysqli_connect("localhost", "root");
 mysqli_select_db($connection,"coc");
 $q1=mysqli_query($connection,"select * from user where user_id=".$_SESSION['user_id']);
 $rows = mysqli_num_rows($q1);
 if($rows==0)
 {
	 header("location:../admin/index.php");
 }
 else
 {
 $q2=mysqli_fetch_assoc($q1);
 if($q2['Type']==2)
 {
	 header("location:../index.php");
 }
 }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/jquery.bxslider.css" />
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/style.css" />

<title>Cake On Click</title>
</head>

<body>
<header>
<section class="top-header listing-header">


<div class="container">
<div class="col-sm-6 call-us pull-left text-left text-capitalize"><p>call us now :<a href="#">9925644657</a></p></div>
<div class="col-sm-6 get-in-touch pull-right text-right text-capitalize"><ul><li>get in touch:<a href="mailto:coc@yummycake.com">coc@yummycake.com</a></li>
<li>welcome,<?php echo $_SESSION['username'];?></li>
<li><a href="../destroy.php"><button type="button" class="btn btn-info btn-lg">sign out</button></a></li>
</ul>
</div>
</div>

<nav class="navbar">

  <div class="container">  
  <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="../img/logo.png" alt="Cake On Click" title="Cake On Click" /></a>
    </div>
    
    <ul class="nav navbar-nav">
      <li><a href="index.php">Shops</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Stats<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="shop_select.php?shop_id=1">users</a></li>
          <li><a href="shop_select.php?shop_id=2">shops</a></li>
        </ul>
      </li>
      <li><a href="addshop.php">Add a shop</a></li>
    
      
    </ul>
  </div>
 
</nav>
</section>
</header>
<!-- header end-->
