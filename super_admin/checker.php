<?php
session_start();
if(isset($_POST["addshop"]))
{
$shopname=$_POST['shopname'];
$cakeshopid=$_POST['cakeshop_id'];
$password=$_POST['password'];

$target_dir = "../img/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
 if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
$path="img/".basename( $_FILES["photo"]["name"]);
// Check if image file is a actual image or fake image
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root");
// To prostect MySQL injection for Security purpose

mysqli_select_db($connection,"coc");
// SQL query to insert information into table to  register user
$query = mysqli_query($connection,"insert into cakeshop (Cakeshop_id,Name,Branch_id,Password,path) VALUES ('$cakeshopid','$shopname','$cakeshopid','$password','$path')");
 // Redirecting To Other Pag
 if($query)
 {
 header("location:success.php");
 }
 else
 {
	 echo("there was an error");
 }
 mysqli_close($connection); 	
}