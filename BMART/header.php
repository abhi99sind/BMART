<!DOCTYPE html>
<html>
<head>
<style>
a:visited,active,link{color: black;
	text-decoration:none;
	}
a:hover {color: white;
	text-decoration:underline;
	}
.td{text-align:right;
width:50%;
font-family:Lucida Handwriting;
font-size:60px;}

</style>
</head>
<body><table bgcolor="#F351A2" width="100%" align="center">
	<tr><td class="td"><a href="index.php">BMART</td><th align="left"><img src="img/logo.gif" width="10%"></a></th></tr>
</table>
<table bgcolor="#F351A2" width="100%">
<?php


include("connection.php");
$q="select * from category";
$qry=$connect->query($q);
echo "<tr>";
while($r=$qry->fetch_array())
{
echo "<th><a href='view.php?id=$r[1]'>$r[1]</a></th>";
}
echo "<tr>";
?>
</table>
<?php 
session_start();
if(isset($_SESSION["user_ses"]))
{

echo "<table width='100%' bgcolor='#A52A2A'>";
echo "<tr align='center'>";
echo "<td><a href='myaccount.php'>My Account</a></td>";
echo "<td><a href='myorders.php'>My Orders</a></td>";
echo "<td><a href='logout.php'>LOGOUT</a></td></tr></table>";
}
?>
</body>
</html>