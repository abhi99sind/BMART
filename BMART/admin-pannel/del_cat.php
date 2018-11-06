<?php
$myid=$_GET["id"];
include("connection.php");
$q="delete from category where id='$myid'";
$qry=$con->query($q);
if($qry==TRUE)
{
header("location:view_cat.php");
}
else
{
echo "error";
}
?>