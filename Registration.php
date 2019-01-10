<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
	require('connect.inc.php') ;
	session_start() ;
	include("Header.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registrations</title>
<script type="text/javascript" src="Validation.js"></script>
</head>
<style>
.class1
{
	text-align:center	;
	font-family:"Arial Black", Gadget, sans-serif ;
	font-style:!important ;
	font-size:35px ;
	color:#669	
}


</style>
<h1 class="class1"> Registration Page </h1>
<<form action="" method="post">
<table border="1" align="center" id="tab1" bgcolor="#CCCCCC" bordercolor="#FFFFFF" style="margin-bottom:50px" >
<tr><td> First Name(Include Middle Name Here)</td><td><input type="text" id="i1" name="n1" required="required"/> </td></tr>
<tr><td> Last Name </td><td><input type="text" id="i2" name="n2" required="required"/> </td></tr>
<tr><td> Email </td><td><input type="text" id="i3" name="n3" required="required"/> </td></tr>
<tr><td> Username </td><td><input type="text" id="i31" name="n12" required="required"/> </td></tr>
<tr><td> Password </td><td><input type="password" id="i4" name="n4" required="required" /> </td></tr>
<tr><td> Retype Password</td><td><input type="Password" id="i5" name="n5" required="required" onchange = "checkPassword();"/> </td></tr>
<tr><td> Date Of Birth<span>(YYYY-MM-DD)</span></td><td> <input type="date" id="i6" name="n6"/> </td></tr>	
<tr><td> Mobile Number</td><td> <input type="text"  onchange="checkPno();" id="i7" name="n7"/> </td></tr>
<tr><td> Alternate Mobile Number </td><td><input type="text" id="i8" name="n8" onchange="checkPno();" onchange="verify();" required="required"/> </td></tr>
<tr><td>Security Question:</td><td>
<select name = "n10">
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
<tr><td>Answer</td><td><input type="text" name="n11" /></td></tr>
<tr><td> <input type="submit" value="Sign Up" id="i9" name="n9" />
</table>
</form>
<?php
	if(isset($_POST['n9']))
	{
	$FirstName = $_POST['n1'] ;
	$UserName  = $_POST['n12'];
	$LastName = $_POST['n2'] ;
	$Email = $_POST['n3'] ;
	$Password = $_POST['n4'] ;
	$Dob = $_POST['n6'] ;
	$Pno = $_POST['n7'] ;
	$Pno1 = $_POST['n8'] ;
	$quest = $_POST['n10'] ;
	$answ = $_POST['n11'] ;
	$query = "insert into registrations values('".$FirstName."' , '".$LastName."' , '".$UserName."' ,'".$Email."' , '".$Password."' , '".$Dob."' ,'".$Pno."' , '".$Pno1."' , '".$quest."' , '".$answ."') " ;
	
	if($query_run = mysqli_query($mysqli,$query))
	{
		echo  'User Registred Successfully' ;
	}
	else
		echo 'Please FIll The Form Correctly' ;
	}
?>
<body>
</body>
<?php
	include("Footer.php");
?>

</html>