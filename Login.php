<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
	session_start() ;
	require('connect.inc.php') ;
	include("Header.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Page</title>
<script type="text/javascript" src="Validation.js"></script>
</head>
<style>
.class1
{
	text-align:center	;
	font-family:"Arial Black", Gadget, sans-serif ;
	font-style:!important ;
	font-size:30px ;	
}


</style>
<h1 class="class1">Login</h1>
<<form action="" method="post" style="margin-bottom:50px; border-bottom-color:#F00">
<table border="1" align="center" id="tab1" bgcolor="#CCCCCC" bordercolor="#FFFFFF" style="alignment-adjust:auto; border:medium; margin:auto;" style="margin-bottom:50px;" >
<tr><td> Email</td><td><input type="text" id="i1" name="n1" placeholder="Email" required="required"/> </td></tr>
<tr><td> Password </td><td><input type="password" id="i2" name="n2" required="required"/> </td></tr>
<tr><td><a href="Registration.php">Sign up</a></td><td><a href="ForgotPassword.php">Forgot Password?</a></td></tr>
<tr><td> <input type="submit" value="Sign In" id="i9" name="n9" />
</table>
</form>
<?php
	if(isset($_POST['n9']))
	{
	$Email = $_POST['n1'] ;
	$Password = $_POST['n2'] ;
	$query = "select * from registrations where Email='".$Email."' and Password = '".$Password."'" ;

	if($query_run = mysqli_query($mysqli,$query))
	{
		$rows = mysqli_fetch_row($query_run) ;
		if($rows == 0)
			echo 'Invalid Credentials' ;
		else
		{
			$query = "select * from registrations where Email = '".$Email."' and Password = '".$Password."'" ;		
			if($query_run = mysqli_query($mysqli,$query))
			{
				$rows = mysqli_fetch_row($query_run) ;
				$_SESSION['name'] = $rows[0].' '.$rows[1] ;
				$_SESSION['user'] = $rows[2];
				 
				header("Location:Home.php") ;
			}
			
		}
	}
	}
?>
<body style="border-color:#000; background:inherit;"  >
</body>
<?php
	include("Footer.php");
?>
</html>