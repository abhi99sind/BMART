<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<link rel="stylesheet" type="text/css" href="css/css1.css">
		<title>BMART- An Online Shopping store for Beautiful girls....</title>
	</head>
	<body link="Black" bgcolor="#CEEOF1">
	<?php 
	include("header.php");?>
	<center>
<br>
<br><br><br><br><?php
	if(isset($_SESSION["user_ses"]))
	{
		$s=$_SESSION["user_ses"];
		include("connection.php");
		$q="select * from orders where uname='$s' ";
		$qry=$connect->query($q);
		echo "<table width='100%' padding='10%' height='30%'>";
		echo "<tr><th>Name</th><th>Products</th><th>Price</th><th>Delivery Date<th>Booking Date</th></th><th>Address</th></tr>";
		while($r=$qry->fetch_array())
		{
		echo "<tr>";
		echo "<td align='center'>$r[2]</td>";
		echo "<td align='center'>$r[3]</td>";
		echo "<td align='center'>$r[6]</td>";
		echo "<td align='center'>$r[4]</td>";
		echo "<td align='center'>$r[5]</td>";
		echo "<td align='center'>$r[7]</td>";
		echo "</tr>";
		}
		echo "</table>";
	}
	 ?></center>
<br><br><br><br><br>
	<?php include("footer.php"); ?>
</body>
</html>