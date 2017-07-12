<?php
session_start();
$connection = mysqli_connect("localhost", "root");
mysqli_select_db($connection,"coc");
if(isset($_GET['action'])) 
{
	if($_GET['action']=='buy')
	{
	
		$q1=mysqli_query($connection,"select * from cake where Cake_id=".$_GET['item_id']);
		$p1=mysqli_fetch_assoc($q1);
									
		if(isset($_SESSION['user_id']))
		{
			$user_id=$_SESSION['username']; 
		}
		else
		{
			$user_id='quickorder';
		}
		if(isset($_POST['show-photo']))
		{		
			$target_dir = "img/";
			$target_file = $target_dir . basename($_FILES["photo"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
				echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
			} 
			else {
				echo "Sorry, there was an error uploading your file.";
			}
			$path="img/".basename( $_FILES["photo"]["name"]);
		}
		else
		{
			$path="";
		}
		$cakeid=$p1['Cake_id'];
		$branchid=$p1['Cakeshop_id'];
		$shopid=$p1['shop_id'];
		$shopid=$p1['shop_id'];
		$cakeshopid=$p1['Cakeshop_id'];
		$cakename=$p1['Cakename'];
		if(isset($_POST['delivery'])){
			$deliverychoice=$_POST['delivery'];
		}
		else{
			$deliverychoice=0;
		}
	    if(isset($_POST['add']))
		{
		$deliveryadd=$_POST['add'];
		}
		else
		{
			$deliveryadd="pickup";
		}
		$paymentmath=$_POST['pay'];
		
		$quan=$_POST['cake_size'];
		$price=$p1['Price']*$_POST['cake_size'];
		$ddate=$_POST['ddate'];
		$inscript=$_POST['inscription'];
		if(isset($_POST['candles']))
		{
		$candles=$_POST['candles'];
		}
		else{	
		$candles="0";
		}
		//$pic=$_POST['show-photo'];
		
		//if($pic)
		//{
			//$price=$price+50;
		//}
		$ddate=date_create($ddate);
		$ddate=date_format($ddate, 'Y-m-d H:i:s');
		$q1=mysqli_query($connection,"INSERT INTO order_new (user_id,branch_id,cakeshop_id,home_delivery,shipping_address,payment_method,price,delivery_datetime,cake_id,quantity,inscription,photo,candles,shop_id) VALUES ('$user_id','$cakeshopid','$cakeshopid','$deliverychoice','$deliveryadd','$paymentmath','$price','$ddate','$cakeid','$quan','$inscript','$path','$candles','$shopid')");
		if($q1)
		{
			header("location:success.php");
		}		
 	   mysqli_close($connection);
	}
	if($_GET['action']=='profile')
	{
		$name=$_POST['fname'];
		$lname=$_POST['last-name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$add=$_POST['address'];
		$q3=mysqli_query($connection,"UPDATE user SET Firstname='$name',Lastname='$lname',Mobile='$phone',Email='$email',Address='$add' WHERE user_id=".$_SESSION['user_id']);
		if($q3)
		{
			header('location:index.php');
		}
	}
}
?>
