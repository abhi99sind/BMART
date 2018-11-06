<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">	
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
		$q="select * from login_tbl where uname='$s' ";
		$qry=$connect->query($q);
		echo "<table width='100%' padding='10%' height='30%' border='1'>";
		echo "<tr><th>Name</th><th>User Name</th><th>Password</th><th>Gender</th><th>Mobile</th><th>Address</th></tr>";
		while($r=$qry->fetch_array())
		{
		echo "<tr>";
		echo "<td align='center'>$r[1]<br><a href='#'>Change</a></td>";
		echo "<td align='center'>$r[2]<br><a href='#'>Change</a></td>";
		echo "<td align='center'>$r[3]<br><a href='#'>Change</a></td>";
		echo "<td align='center'>$r[4]<br><a href='#'>Change</a></td>";
		echo "<td align='center'>$r[5]<br><a href='#'>Change</a></td>";
		echo "<td align='center'>$r[6]<br><a href='#'>Change</a></td>";
		echo "</tr>";
		}
		echo "</table>";
	}
	 ?></center>
<br><br><br><br><br>
	<?php include("footer.php"); ?>
</body>
</html>