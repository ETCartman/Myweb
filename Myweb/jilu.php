<?php

date_default_timezone_set("PRC");
$date = date('Y/m/d H:i:s');
$uid = $_POST['uid'];
$ip = $_SERVER["REMOTE_ADDR"];
$host = "LOCALHOST";
$user = "root";
$pwd = "a";
echo $uid."<br />";
echo $date."<br />";
echo $ip."<br />";
@$db = mysql_connect($host,$user,$pwd);
if(!$db)
{
	echo "<script>alert('Unable to connect DB!');</script>";
	exit;
}
mysql_select_db("hj");
$query = "insert into npels1 values (NULL".","."'".$uid."'".","."'".$date."'".","."'".$ip."'".")";
mysql_query($query);
echo "OK!";
mysql_close($db);

?>


