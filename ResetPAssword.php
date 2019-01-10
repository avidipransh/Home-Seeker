<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="Validation.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php
	session_start() ;
	include("Header.php");
	require("connect.inc.php") ;
	if($_SESSION["EMail"] = '')
		header("Location:Login.php") ;
?>
</head>
<form action="" method="post">
<table align="center" border="1">
<tr><td>Enter New Password<input type="password" name="rpt" id = "password" /></td></tr>
<tr><td>Retype Password<input type="password" name="rpt1" id = "password1" onchange="checkPassword()" /></td></tr>
<tr><td> <input type="submit" value="Generate" name = "b1" />
</table>
</form>
<?php
	if(isset($_POST["b1"]))
	{
		$USN = $_SESSION["EM"] ;
		$pswd = $_POST["rpt"] ;
		$query = "update registrations set Password = '".$pswd."' where Email = '".$USN."'" ;
		if($qu = mysqli_query($mysqli,$query))
		{
			echo "Password  Reset Successful!" ;
		}
	}
?>
<body>
</body>
</html>