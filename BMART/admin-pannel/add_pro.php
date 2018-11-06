<?php
$print=" ";
session_start();
if(isset($_SESSION["admin_ses"]))
{
if(isset($_POST["submit"]))
{
$catname=$_POST["catname"];
$proname=$_POST["proname"];
$img=$_FILES["img"]["name"];
$color=$_POST["color"];
$price=$_POST["price"];
$rprice=$_POST["rprice"];
$ocassiontype=$_POST["ocassiontype"];
include("connection.php");
move_uploaded_file($_FILES["img"]["tmp_name"],'img/'.$img);
$q1="insert into product values('','$catname','$proname','$img','$color','$price','$rprice','$ocassiontype')";
$qry1=$con->query($q1);
if($qry1==TRUE)
{
$print="Records Inserted Successfully";
}
else
{
$print="Error".mysqli_error($con);
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
<tr class="left"><td><?php include("left.php"); ?></td>
<td rowspan="9" >
<form method="POST" enctype="multipart/form-data">
<table>
<tr><td>Category Name</td><td><select name="catname">
<?php
include("connection.php");
$q="select * from category";
$qry=$con->query($q);
while($r=$qry->fetch_array())
{
echo "<option>$r[1]</option>";
}?>
</select></td></tr>
<tr><td>Product Name</td><td><input type="text" name="proname"></td></tr>
<tr><td>Image</td><td align="center"><input type="file" name="img"></td></tr>
<tr><td>Color</td><td><input type="text" name="color"></td></tr>
<tr><td>Price</td><td><input type="text" name="price"></td></tr>
<tr><td>Rent Price</td><td><input type="text" name="rprice"></td></tr>
<tr><td>Ocassion</td><td><select name="ocassiontype">
<option>Select</option>
<option>Party Wear</option>
<option>Bridal</option>
<option>Wedding</option>
<option>Fancy</option>
<option>Work Wear</option>
</select>
</td></tr>
<tr><td colspan="2"><input type="submit" name="submit" value="submit"></td></tr>
</table>
</form> </td></tr>
</table>
<p><?php echo $print;?></p>
</body>
</html>