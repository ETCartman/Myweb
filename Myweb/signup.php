<?php
$password = $_POST['password'];
$rpassword = $_POST['rpassword'];
$username = $_POST['username'];
$uemail = trim($_POST['uemail']);
$IP = $_SERVER["REMOTE_ADDR"];
date_default_timezone_set("PRC");
$date = date('Y/m/d H:i:s');
if(!$password || !$uemail || !$rpassword || !$username )
{
	echo "<script>alert('GO AWAY! or Please enter details!!!');</script>";
	exit;
}
if(strcmp($password, $rpassword) == 0)
{
	$user = "root";
	$pwd = "a";
	$host = "LOCALHOST";
	@$db = mysql_connect($host,$user,$pwd);
	if(!$db)
	{
		echo "<script>alert('Unable to connect DB!');</script>";
		exit;
	}
	mysql_select_db("hj");
	$query = "SELECT * FROM users where username = "."'".$username."'";
	#echo $query;
	$text = mysql_query($query);
	if(mysql_num_rows($text) > 0)
	{
		echo "<script>alert('User name exists!');</script>";
		exit;
	}
	$query = "insert into users values ( NULL , "."'".$username."'"." ,"."'".md5($password)."'".", 'n','n',"."'".$uemail."'".","."'n'".","."'".$date."'".","."'".$IP."'".")";
	#echo $query;
	mysql_query($query);
	echo "<script>alert('Welcome!');</script>";

	mysql_close($db);
}
else
{
	echo "<script>alert('PASSWORD IS DIFFREENT!');</script>";
	exit;
}
?>