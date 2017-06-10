<?php
$password = $_POST['password'];
if(strcmp($password, 'liu666') == 0)
{

	$user = 'root';
	$host = 'localhost';
	$pwd = 'a';
	$isbn =	$_POST['isbn'];
	if(!$isbn)
	{
		echo "Please enter the isbn!";
		exit;
	}
	@$db = mysql_connect($host,$user,$pwd);
	if($db == false)
	{
		echo "unable to connect db";
		exit;
	}
	$query = "DELETE FROM books where isbn ='".$isbn."'";
	mysql_select_db('hj');
$rst = mysql_query($query);
	if($rst)
	{
		echo "ONE BOOK DEL";
	}
	else
	{
		echo "unable to del";
	}
	mysql_close($db);
}
else
{
	echo "wrong Password";
}
?>