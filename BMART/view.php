<!DOCTYPE html>
<html>
<head>
</head>
<body bgcolor="#CEEOF1">
<?php include("header.php");
?>
<table border="1" width="80%" align="center">
<tr>	<?php
	$i=0;
	$id=$_GET["id"];
	include("connection.php");
	$p="select * from product where category='$id'";
	$p1=$connect->query($p);
	while($r=$p1->fetch_array())
	{
	if(($i%3==0)==TRUE)
	{
	echo "</tr><tr>";
	}
	echo "<td><table width='100%'>";
	echo "<tr><td><img src='admin-pannel/img/$r[3]' width='50%'></td></tr>";
	echo "<tr><td>$r[2]</td></tr>";
	echo "<tr><td>Color: $r[4]</td></tr>";
	echo "<tr><td>Rs $r[5]</td></tr>";
	$i++;
	if(isset($_SESSION["user_ses"]))
	{
	echo "<tr><td><button><a href=buy.php?bid=$r[0]>Buy Now</a></button></td></tr>";
	}
	echo "</table></td>";
	}
	?>
</tr>
</table>
</body>
</html>

<?php include("footer.php");?>