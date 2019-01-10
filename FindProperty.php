<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
	include("Header.php") ;
	require("connect.inc.php");
	session_start() ;
	if($_SESSION['name'] == '')
		header("Location:Login.php") ;
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Find Property</title>
</head>
<h1 align="center"> Avalaible Properties </h1>
<form style="margin-bottom:50px;">
<table align="center" border="1" style="font-size:16px; border-color:#F00; border-bottom-width:thick">
<tr><td>Address</td><td>City</td><td>State</td><td>Image</td></tr>
<?php
	$query = "select * from Property12 where Status = 'Avalaible' and Username != '".$_GET['user']."' ";
	if($query_run = mysqli_query($mysqli,$query))
	{
		while($rows = mysqli_fetch_row($query_run))
		{ 	
			$propID = $rows[11];
	?>
            
		<div style="width:100%;">
        	<tr><td><?php echo $rows[0].'<br>'.$rows[1].'<br>'.$rows[2].'<br>'.$rows[3].'<br>'.$rows[4].'<br>'.$rows[5].'<br>'.$rows[6].'<br>'; ?></td><td><?php echo $rows[3] ?></td><td><?php echo $rows[4]?></td><td><img src="<?php echo $rows[8]; ?>"  height="300px" width="300px" /><td><?php echo $rows[7] ?></td><td><a href="GetDetails.php?id=<?php echo $propID; ?>">Rent This Property</a></td></tr>
         </div>
		
	<?php	}
		
    }
    

?>

</table>
</form>
<body>
</body>
<?php
	include("Footer.php") ;
?>
</html>

