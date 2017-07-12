<?php
session_start();
if(isset($_POST['addcake']))
{
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
$cakename=$_POST['cakename'];
$price=$_POST['price'];
$detail=$_POST['details'];
if(isset($_POST['photo']))
{
$pic=$_POST['photo'];
}
$category_no=$_POST['category'];
$rating=$_POST['rating'];
$shopid=$_SESSION['user_id'];
$cakeshopid=$_SESSION['username'];
if($category_no==1)
{
	$category="Chocolate Cake";
}
elseif($category_no==2)
{
	$category="Non Chocolate Cake";
}
elseif($category_no==3)
{
	$category="Cup Cake";
}
if(isset($_POST['photo']))
{
$target_dir = "../img/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
 if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {       echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
$path="img/".basename( $_FILES["photo"]["name"]);
}
// Check if image file is a actual image or fake image
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root");
// To prostect MySQL injection for Security purpose

mysqli_select_db($connection,"coc");
// SQL query to insert information into table to  register user
if($_GET['action']=='edit')
{
	if(isset($_POST['photo']))
	{
$query = mysqli_query($connection,"update cake set shop_id='$shopid',Cakeshop_id='$cakeshopid',Cakename='$cakename',Price='$price',Rating='$rating',Details='$details',path='$path',category_no='$category_no',category='$category' where cake_id=".$_GET['cake_id']);
	}
	else
	{
$query = mysqli_query($connection,"update cake set shop_id='$shopid',Cakeshop_id='$cakeshopid',Cakename='$cakename',Price='$price',Rating='$rating',Details='$details',category_no='$category_no',category='$category' where cake_id=".$_GET['cake_id']);
		
	}
}
else
{
		$query = mysqli_query($connection,"insert into cake (shop_id,Cakeshop_id,Cakename,Price,Rating,Details,path,category_no,category) VALUES ('$shopid','$cakeshopid','$cakename','$price','$rating','$details','$path','$category_no','$category')");
	
}	
 // Redirecting To Other Pag
 header("location:success.php");
mysqli_close($connection); 	
}
if(isset([$_GET['action']))
{
	$connection = mysqli_connect("localhost", "root");
// To prostect MySQL injection for Security purpose

mysqli_select_db($connection,"coc");

	if($_GET['action']=='profile')
	{
		$name=$_POST['fname'];
		if(isset($_POST['photo'])
		{
			$target_dir = "../img/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
 if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {       echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
$path="img/".basename( $_FILES["photo"]["name"]);
$q3=mysqli_query($connection,"UPDATE cakeshop SET Name='$name',path='$path' WHERE user_id=".$_SESSION['user_id']);
		}
		else
		{
			$q3=mysqli_query($connection,"UPDATE user SET Name='$name' WHERE user_id=".$_SESSION['user_id']);

		}
		
		if($q3)
		{
			header('location:index.php');
		}
	}
}