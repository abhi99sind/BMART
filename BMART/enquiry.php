<?php
$print=" ";
if(isset($_POST["submit"]))
{
$name=$_POST["fname"];
$email=$_POST["email"];
$enquiry=$_POST["enquiry"];
include ("connection.php");
$q="insert into table querry  values('','$name','$email','$enquiry')";
$qry=$connect->query($q);
if($qry==TRUE)
{
	$print="Query Submitted successfully!";
}
}
?>
<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		.table{ background-color:#e2e2e2;}
		.tr:hover {background-color: #f5f5f5;}
		p{ text-align:center;}
	</style>
	</head>
	<body bgcolor="#CEEOF1">
	<?php include("header.php");?>
	<form method="POST">
	<table align="center" width="80%" class="table">
	<caption>Sign Up here!</caption>
	<tr class="tr"><td>FULL NAME:</td><td><input type="text" name="fname"></td></tr>
	<tr class="tr"><td>EMAIL:</td><td><input type="text" name="email"></td></tr>
	<tr class="tr"><td>ENQUIRY:</td><td><textarea name="enquiry"></textarea></td></tr>
	<tr class="tr"><td colspan='2' align="center"><input type="submit" name="submit" value="submit"></td></tr>
	</table>
	</form>
	<table width="80%">
	<tr><td align="center"><?php echo $print; ?></td></tr>
	</table>
	<?php include("footer.php");?>
	</body>
</html>