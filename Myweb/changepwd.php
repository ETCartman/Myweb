<?php
$opwd = $_POST['opwd'];
$npwd = $_POST['npwd'];
$rnpwd = $_POST['rnpwd'];
session_start();
if(!$_SESSION['username'])
{
	echo "Please login first!";
	exit;
}
$username = $_SESSION['username'];

echo $opwd."<br />";
if(!$opwd || !$npwd || !$rnpwd)
{
	echo "PLEASE ENTER THE DETAILS!!";
	exit;
} 
if(strcmp($npwd, $rnpwd) != 0)
{
	echo "PASSWORD DIFFERENT!";
	exit;
}
$host = "LOCALHOST";
$user = "root";
$pwd = "a";
@$db = mysql_connect($host,$user,$pwd);
if(!$db)
{
	echo "<script>alert('Unable to connect DB!');</script>";
	exit;
}
mysql_select_db("hj");
$query = "update users set password = "."'".md5($npwd)."'"."where username = "."'".$username."'";
mysql_query($query);
mysql_close($db);
?>