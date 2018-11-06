<?php
session_start();
if(isset($_SESSION["admin_ses"]))
{
include("connection.php");
$q2="select * from product";
$qry2=$con->query($q2);
echo "<table border='1' style='overflow-x:auto;'>";
echo "<tr><th> Id</th><th>Category</th><th>Product</th><th>Image</th><th>color</th><th>Price</th><th>Rent Price</th><th>Occassion</th><th>Delete</th><th>Edit</th></tr>";
while($r=$qry2->fetch_array())
{
echo "<tr>";
echo "<td>$r[0]</td>";
echo "<td>$r[1]</td>";
echo "<td>$r[2]</td>";
echo "<td>$r[3]</td>";
echo "<td>$r[4]</td>";
echo "<td>$r[5]</td>";
echo "<td>$r[6]</td>";
echo "<td>$r[7]</td>";
echo "<td><a href='del_pro.php?id=$r[0]'>Delete</a></td>";
echo "<td><a href='edit.php?id=$r[0]'>Edit</a></td>";
echo "</tr>";
}
echo "</table>";
}
else
{
header("location:index.php");
}?>
