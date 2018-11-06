<?php
$myid=$_GET["id"];
include("connection.php");
$q="delete from product where id='$myid'";
$qry=$con->query($q);
if($qry==TRUE)
{
header("location:view_pro.php");
}
else
{
echo "error";
}
?>