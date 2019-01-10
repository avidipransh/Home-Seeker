<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 
	include("Header.php") ;
	require("connect.inc.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GetDetails</title>
</head>
<h1 align="center" style="font-size:50px ; font-style:inherit ; color:#999;">Property Details</h1>
<form style="margin-bottom:50px;">
<?php 

$id1 = $_GET['id'] ;
$query = "select * from property12 where P_ID = '".$id1."'";
if($query_run = mysqli_query($mysqli,$query))
{
	$rows=mysqli_fetch_row($query_run);
	$Owner = $rows[10] ;
	$q1 = "select * from Registrations where Username = '".$Owner."'";
	if($q1_run = mysqli_query($mysqli,$q1))
	{
		
			$rows1=mysqli_fetch_row($q1_run);
			
			?>
            

	<table border="1" align="center">
    	<tr><td> Name Of Owner </td><td><?php echo $rows1[0].' '.$rows1[1];?></td></tr>
        <tr><td> Email</td><td><?php echo $rows1[3]; ?></td></tr>
        <tr><td> Phone Number</td><td><?php echo $rows1[6] ;?></td></tr>
        <tr><td> Alternate Phone Number</td><td><?php echo $rows1[7] ;?></td></tr>    
    </table>



<?php            
	}	
?>


	
<?php
}?>


</form>
<?php 
	include("Footer.php") ;
?>
<body>
</body>
</html>