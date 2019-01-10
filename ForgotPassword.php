<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php
	
	session_start() ;
	require("connect.inc.php") ;
	include("Header.php");

?>
<form action="" method="post">
<style>
.First
{
	color:#03C ;
	font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif ;
	text-align:center;
	font-size:36px
}
</style>
</head>

<table border="0" align="center">
<h1 class="First">Forgot Password</h1>
<form action = "" method="post">
<tr><td>E-Mail</td><td><input type="text" name="EMail" required="required" placeholder="E-Mail" /></td></tr>
<tr><td>Security Question:</td><td>
<select name = "ques">
<option> --Select Question--</option>
<?php
$que = "select * from Question123" ;
if($run = mysqli_query($mysqli,$que))
{
	while($rows = mysqli_fetch_row($run))
	{ ?>
		 <option> <?php echo $rows[1]  ?></option>
     <?php 
	}
} ?>
</select>
<tr><td>Answer</td><td><input type="password" name="ans" /></td></tr>
<tr><td><input type="submit" name = "b1" value="Enter" /></td></tr>


</table>
</form>
<?php

if(isset($_POST["b1"]))
{
	
	$EMail = $_POST["EMail"] ;
	$quest = $_POST["ques"] ;
	$ans = $_POST["ans"] ;
	$query = "select * from registrations where Email = '".$EMail."' and Question = '".$quest."' and Answer = '".$ans."' " ;
	if($runQ = mysqli_query($mysqli,$query))
	{

		$rows = mysqli_fetch_row($runQ) ;
		if($rows != 0)
		{
			$_SESSION["EM"] = $EMail ;
			header("Location:ResetPAssword.php");
		}
		else
		{
			
			echo "Invalid credentials" ;
			
					
		}
	
	}
}
?>






<?php
	include("Footer.php");
?>

<body>
</body>
</html>