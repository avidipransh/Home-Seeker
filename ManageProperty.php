<html xmlns="http://www.w3.org/1999/xhtml">
<head>

</head>

<?php
	require("connect.inc.php");
	session_start() ;
	$_SESSION['user1'] = $_GET['user'];
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Manage Property</title>
</head>
<style>
.n1
{
	font:"Arial Black", Gadget, sans-serif;
	color:#00000;
	alignment-adjust:central ;
	font-size:40px;
	font-style:normal;	
}
</style>
<?php 

	$query = "select * from Property12 where Username = '".$_GET['user']."' ";
	if($query_run = mysqli_query($mysqli,$query))		//if 1
	{
		$rows = mysqli_fetch_row($query_run);
		if($rows == 0)//if2
		{
			?>
            	<img style="background-repeat:no-repeat;background-size:cover;" src="graphic-3515620_960_720.png" />
            	<strong style="font-size:24px; margin-bottom:50px">You Do Not Have Any Registred Properties</strong>	
  <?php } //end of if 2	
	
		else
		{
			?>
    	   	<h1 class="n1" align="center"><strong>Your Properties</strong></h1>
	
	<?php	
			if($query_run1 = mysqli_query($mysqli,$query)) //if 3
			{	
			while(($rows1 = mysqli_fetch_row($query_run1)))
			{
			?>
    				<table border="1" align="center">
    	            <tr><td><?php echo $rows1[0].'<br>'.$rows1[1].'<br>'.$rows1[2].'<br>'.$rows1[3].'<br>'.$rows1[4].'<br>'.$rows1[5].'<br>'.$rows1[6].'<br>'; ?></td><td><?php echo $rows1[3] ?></td><td><?php echo $rows1[4]?></td><td><img src="<?php echo $rows1[8]; ?>"  height="300px" 	width="300px" /></td><td><?php echo $rows1[7] ?></td><td><a href="DeleteProperty.php?ID123=<?php echo $rows1[11]; ?>">Delete Property</a></td></tr>
                
                
                
                
                </table>        	
			
		
<?php	}	//end of while
		
	
	}
}//end of else
	
	
}//end of if 1



?>


<body>
</body>
</html>