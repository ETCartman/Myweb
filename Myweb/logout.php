<?php
session_start();
if(!isset($_SESSION['username']))
{
	echo "Where are u come from???";
	exit;
}
unset($_SESSION['username']);
unset($_SESSION['svipstat']);
echo "<script>alert('logout')</script>";
header("LOCATION:home.php");
?>