<?php 
include("connection.php");
if(isset($_POST["login"]))
{
$uname=$_POST["username"];
$pass=$_POST["pass"];
$q="select * from login_tbl where uname='$uname' and pass='$pass'";
$qry=$connect->query($q);
if($qry==TRUE)
{
session_start();
$_SESSION["user_ses"]=$uname;
header("location:index.php");
}
else
{
echo "Error in Username or Password!";
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<style type="text/css">
body {	background-attachment:scroll;
	background-position:top center;
	background-size:cover; }
.table,th,td{
text-align:center;
padding:4px;
}
p{ text-align:center;}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body bgcolor="#CEEOF1">
<?php include("header.php");?>
<table width="50%" class="table" align="center">
<tr><th colspan="2">Login here!</th></tr>
<form method="POST">
<tr><td>Username:</td><td><input type="text" name="username"></td></tr>
<tr><td>Password:</td><td><input type="password" name="pass"></td></tr>
<tr><td colspan="2"><button name="login">Login</button></td></tr>
</form>
</table>
<p><a href="signup.php">Not Registered?Sign up</a></p>
</body>
</html>
<?php include("footer.php");?>