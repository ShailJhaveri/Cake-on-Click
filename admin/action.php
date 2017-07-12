<?php
session_start();
$connection = mysqli_connect("localhost", "root");
mysqli_select_db($connection,"coc");
if(isset($_GET['action'])) 
{
	echo("inside first if");
	if($_GET['action']=='remove')
	{
		$q1=mysqli_query($connection,"delete from cake where cake_id=".$_GET['item_id']);
		if($q1)
		{
			header("location:menu.php");
		}		
 	}
}
?>
