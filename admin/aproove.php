<?php
$connection = mysqli_connect("localhost", "root");
mysqli_select_db($connection,"coc");

if($_GET['action']=="aproove")
{
	$q1=mysqli_query($connection,"UPDATE order_new SET status=1 WHERE order_id=".$_GET['orderid']);
	if($q1)
	{
		header('location:index.php');
	}
}
elseif($_GET['action']=="disaproove")
{
	$q2=mysqli_query($connection,"DELETE FROM order_new WHERE order_id=".$_GET['orderid']);
	if($q2)
	{
		header('location:index.php');
	}
	
}
else
{
	$q3=mysqli_query($connection,"UPDATE order_new SET status=2 WHERE order_id=".$_GET['orderid']);
	if($q3)
	{
		header('location:index.php');
	}
}

?>