<?php
$print=" ";
session_start();
if(isset($_SESSION["admin_ses"]))
{
	if(isset($_POST["submit"]))
	{
		$catname=$_POST["catname"];
		$des=$_POST["des"];
		include("connection.php");
		$q1="insert into category values('','$catname','$des')";
		$qry1=$con->query($q1);
		if($qry1==TRUE)
		{
			$print="Records Inserted Successfully";
		}
		else
		{
			$print="Error";
		}
	}
}
else
{
	header("location:index.php");
}?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body bgcolor="#CEEOF1">
	<?php include("header.php");?>
	<table class="adjust">
		<tr class="left">
			<td><?php include("left.php"); ?></td>
			<td rowspan="9" >
			<form method="POST">
				<table>
				<tr><td>Category Name</td><td><input type="text" name="catname"></td></tr>
				<tr><td>Description</td><td><textarea name="des"></textarea></td></tr>
				<tr><td colspan="2"><input type="submit" name="submit" value="submit"></td></tr>
				</table>
			</form> </td></tr>
			</table>
		<p><?php echo $print;?></p>
</body>
</html>