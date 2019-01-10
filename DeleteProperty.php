<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Delete Property</title>
<?php
	include("Header.php") ; 
	require("connect.inc.php");
	session_start() ;
	if($_SESSION['user1'] == '')
	{
		header("Location:Login.php") ;
	}
?>
</head>
<form action="" method="POST" style="margin:50px">
<table border="1" align="center">
<tr><td>Enter Your Password</td><td><input type="password" name='n1' /></td></tr>
<tr><td><input type="submit" value="Delete Propery" name="b1" /></td></tr>
</table>
<?php

	if(isset($_POST['b1']))	
	{
		$Pass = $_POST['n1'] ;
		$query1 = "select * from Registrations where Username = '".$_SESSION['user1']."' and Password = '".$Pass."'" ;
		$query = "delete from Property12 where P_ID = '".$_GET['ID123']."'" ;
		if($query1_run = mysqli_query($mysqli , $query1))
		{
				if($rows1 = mysqli_fetch_row($query1_run) != 0)
				{
					if($query_run = mysqli_query($mysqli,$query))
					{
						echo 'Property Deleted'; 
						header("Location:Home.php") ;
					}	
					
				}
				
				else
				{
					echo 'Please Retype Your Password' ;	
				}		
		}	
	}
?>
<body>
</body>
</form>
<?php
include("Footer.php");
?>
</html>