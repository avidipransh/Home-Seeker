<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="Validation.js"></script>
<?php
	include("Header.php") ;
	require('connect.inc.php') ;
	session_start() ;
	if($_SESSION["name"] == '')
		header("Locaation:Login.php") ;
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
	font-size:30px ;	
}


</style>
<h1 class="class1"> Property Registration</h1>
<<form action="" method="post" enctype="multipart/form-data" style="margin-bottom:40px;">
<table border="1" align="center" id="tab1" bgcolor="#CCCCCC" bordercolor="#FFFFFF" >
<tr><td> Flat Number</td><td><input type="text" id="i1" name="n1" required="required"/> </td></tr>
<tr><td> Street </td><td><input type="text" id="i2" name="n2"/> </td></tr>
<tr><td> Locality </td><td><input type="text" id="i3" name="n3" required="required"/> </td></tr>
<tr><td> City </td><td><input type="text" id="i4" name="n4" required="required" /> </td></tr>
<tr><td> State</td><td><input type="text" id="i5" name="n5" required="required" /> </td></tr>
<tr><td> Country</td><td> <input type="text" id="i6" name="n6"/> </td></tr>	
<tr><td> Pincode</td><td> <input type="text"  onchange="checkPincode();" id="i7" name="n7"/> </td></tr>
<tr><td> Upload Image Here </td><td><input type="file" id="i8" name="imageupload1" required="required"/> </td></tr>
<tr><td> Rent</td><td><input type="text" name="n10" /> </td></tr>
<tr><td> <input type="submit" value="Register Property" id="i9" name="n9" />
</table>
</form>
<?php

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

  ?>

<?php

	$random1 = generateRandomString() ;
	$user = $_GET['user'] ;	
	if(isset($_POST['n9']))
	{	
	$FlatNumber = $_POST['n1'] ;
	$Street = $_POST['n2'] ;
	$Locality = $_POST['n3'] ;
	$City = $_POST['n4'] ;
	$State = $_POST['n5'] ;
	$Country = $_POST['n6'] ;
	$Pincode = $_POST['n7'] ;
	$targetdir = "Property/" ;
	$status = "Avalaible" ;
	$rent = $_POST['n10'];
	$targetfile = $targetdir.basename($_FILES["imageupload1"]["name"]);
	move_uploaded_file($_FILES["imageupload1"]["tmp_name"],$targetfile) ;
	
	$query = "insert into property12 values('".$FlatNumber."' , '".$Street."' , '".$Locality."' , '".$City."' , '".$State."' , '".$Country."' , '".$Pincode."' , '".$rent."' , '".$targetfile."' , '".$status."' , '".$user."' , '".$random1."')" ;
	if($query_run = mysqli_query($mysqli,$query))
	{
		echo  'Property Registred Successfully' ;
		header("Location:Home.php	");
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