<?php
$password = $_POST['password'];
$username = $_POST['username'];
$IP = $_SERVER['REMOTE_ADDR'];	
date_default_timezone_set("PRC");	
$date = date('Y/m/d H:i:s');
if (!$password || !$username)
{
	echo "<script>alert('Please,ok?')</script>";
	exit;
}
session_start();
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
$query = "select * from users where username = "."'".$username."'";
#echo $query;
$num = mysql_query($query);
if(mysql_num_rows($num) == 0)
{
	echo "<script>alert('Unable to find the user,please try again!');</script>";
	exit;
}
$row = mysql_fetch_assoc($num);
$svipstat = $row['SVIPstat'];
$userid = $row['userid'];
#echo $svipstat;
if($row['password'] == md5($password) && $row['username'] == $username)
{
	echo "<script>alert('LoginSucceed!');</script>";
	$_SESSION['username'] = $username;
	$_SESSION['svipstat'] = $svipstat;
	$_SESSION['userid'] = $userid;
	$id = $row['userid'];
	
	$query = "insert into log values ( NULL,".$id.","."'".$date."'".","."'".$IP."'".")";
	mysql_query($query);
	header("Location:home.php?username=".$username);

	mysql_close($db);
	exit;
}
else
{
	echo "<script>alert('Wrong password or username');</script>";
	mysql_close($db);
	exit;
}
?>