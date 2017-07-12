<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root");
// To prostect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($connection,$username);
$password = mysqli_real_escape_string($connection,$password);
// Selecting Database
mysqli_select_db($connection,"coc");
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($connection,"select * from user where Password='$password' AND Username='$username'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['username']=$username; 
$q1=mysqli_fetch_assoc($query);
$_SESSION['user_id']=$q1['user_id'];// Initializing Session
if($q1['Type']==2)
{
	header("location:index.php");
}
else
{
header("location:super_admin/index.php"); // Redirecting To Other Page
}
} 
else {
$query = mysqli_query($connection,"select * from cakeshop where Password='$password' AND Cakeshop_id='$username'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['username']=$username; 
$q1=mysqli_fetch_assoc($query);
$_SESSION['user_id']=$q1['shop_id'];
// Initializing Session
header("location:admin/index.php"); // Redirecting To Other Page
}
else{
$error = "Username or Password is invalid";
	header('location:index.php');
	?>
	<script>
	alert("username or password invalid");
    windows.location="index.php"; 
	</script>
<?php
}}
mysqli_close($connection); // Closing Connection
}

?>

<script>
function checkPass()
{
	 
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('Password');
    var pass2 = document.getElementById('RepeatPassword');
    //Store the Confimation Message Object ...
    
   
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
       
      return true;    
    }
	else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        
       alert("passwords dont match");
		document.form1.Password.focus();
		return false;
    }
}  
   
   function ValidateEmail(inputText)  
    {  
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
    if(inputText.value.match(mailformat))  
    {  
    
    return true;  
    }  
    else  
    {  
    alert("You have entered an invalid email address!");  
    document.getElementById("email").focus();  
     return false;
    }  
    }  
function check(inputtext)
{
	 var pass1 = document.getElementById('Password');
    var pass2 = document.getElementById('RepeatPassword');
    //Store the Confimation Message Object ...
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
       
       
    }
	else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        
       alert("passwords dont match");
		document.form1.Password.focus();
		return false;
    }
	var inputtext = document.getElementById('email');
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
    if(inputtext.value.match(mailformat))  
    {  
     
    }  
    else  
    {  
    alert("You have entered an invalid email address!");  
    document.getElementById("email").focus();  
     return false;
    }
	return true;
}


    
<?php
if(isset($_POST['btn-signup']))
{

$username=$_POST['username'];
$password=$_POST['password'];
$mob=$_POST['mob'];
$email=$_POST['email'];
$repass=$_POST['repassword'];


// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root");
// To prostect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$repass=stripslashes($repass);
if($password != $repass)
{
	$error="password do not mathch";

 exit;
 }
$username = mysqli_real_escape_string($connection,$username);
$password = mysqli_real_escape_string($connection,$password);
// Selecting Database
mysqli_select_db($connection,"coc");
// SQL query to insert information into table to  register user
$query = mysqli_query($connection,"insert into user (Username,Mobile,Email,Password,Type,Status) VALUES ('$username','$mob','$email','$password',2,1)");
if($query)
{
	$q1=mysqli_query($connection,"select * from user where Password='$password' AND Username='$username'");
	$rows = mysqli_num_rows($q1);
         if ($rows == 1) {
                          $q2=mysqli_fetch_assoc($q1);
						  $_SESSION['username']=$q2['Username']; 
                          $_SESSION['user_id']=$q2['user_id'];
                          }
header("location: index.php"); // Redirecting To Other Pag
}
else
{
?><script>
 alert("cannot register you.try again");
 </script>
<?php
}
mysqli_close($connection); 	
}
?>    
