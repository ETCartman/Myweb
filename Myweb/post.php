<?php
session_start();
$username = $_SESSION['username'];
date_default_timezone_set("PRC");	
$date = date('Y/m/d H:i:s');
$title = trim($_POST['title']);
$content = trim($_POST['content']);
if(!$title || !$content)
{
	echo "Please Enter the details!";
	exit;
}
if(!get_magic_quotes_gpc())
{
	$title = addslashes($_POST['title']);
    $content = addslashes($_POST['content']);
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
$query = "insert into message values (NULL".","."'".$username."'".","."'".$title."'".","."'".$content."'".","."'".$date."'".")";
mysql_query($query);
echo "OK!";
mysql_close($db);
?>