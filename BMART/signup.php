<?php
$print=" ";
session_start();
if(isset($_SESSION["user_ses"]))
{
	header("location:index.php");
}
else
{
	if(isset($_POST["submit"]))
	{
	$name=$_POST["fname"];
	$email=$_POST["email"];
	$pass1=$_POST["pass1"];
	$pass2=$_POST["pass2"];
	$gen=$_POST["gender"];
	$mob=$_POST["mobile"];
	$add=$_POST["add"];
	include ("connection.php");
	if($pass1==$pass2)
	{
		$q1="insert into login_tbl values('','$name','$email','$pass1','$gen','$mob','$add')";
		if($qry1=$connect->query($q1))
		{
		$print="Successfully submitted";
		}
		else
		{ $print="ERROR!";
		}
	}
	else
	{
	$print="Passwords did not Matched!";
	}
}}
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
	<tr class="tr"><td>PASSWORD:</td><td><input type="password" name="pass1"></td></tr>
	<tr class="tr"><td>CONFIRM PASSWORD:</td><td><input type="password" name="pass2"></td></tr>
	<tr class="tr"><td>GENDER:</td><td>Male<input type="radio" name="gender"> Female<input type="radio" name="gender"></td></tr>
	<tr class="tr"><td>MOBILE NO.:</td><td><input type="text" name="mobile"></td></tr>
	<tr class="tr"><td>ADDRESS:</td><td><textarea name="add"></textarea></td></tr>
	<tr class="tr"><td colspan='2' align="center"><input type="submit" name="submit" value="submit"></td></tr>
	</table>
	</form>
	<table width="80%">
	<tr><td align="center"><?php echo $print; ?></td></tr>
	</table>
	<p><a href="login.php">Already Registered?Login</a></p>
	<?php include("footer.php");?>
	</body>
</html>