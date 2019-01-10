<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php

	require("connect.inc.php") ;
	include("Header.php");
	session_start() ;
	if($_SESSION['name'] == '')
		header("Location:Login.php") ;
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link rel="stylesheet" type="text/css" href="Decoration.css"/>
</head>
<h1 style="color:#00F"> <?php echo 'Welcome'.' '.$_SESSION['user'].'!' ;?> </h1>
<body style="border:thin;">
<form style="margin-bottom:50px;">
<table align="center">
<div style="margin:20p;">
<tr><td><a href="RegisterProperty.php?user=<?php echo $_SESSION['user']; ?>" style="font-size:36px;">Rent Your Property</a></td></tr>
</div>
<div>
<tr><td><a href="FindProperty.php?user=<?php echo $_SESSION['user']; ?>" style="font-size:36px">Find Properties</a></td></tr>
</div>

<div>
<tr><td><a href="ManageProperty.php?user=<?php echo $_SESSION['user']; ?>" style="font-size:36px">Manage Properties</a></td></tr>
</div>

</table>
</form>
</body>
<?php
include("Footer.php");
?>
</html>