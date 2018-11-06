<?php 
session_start();
unset($_SESSION["user_ses"]);
header("location:index.php");
?>