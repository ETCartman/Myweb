<?php
$password = $_POST['password'];
if(strcmp($password, "liu666") == 0)
{
	$isbn =$_POST['isbn'];
	$author = $_POST['author'];
	$title = $_POST['title'];
	$price = $_POST['price'];
	$host = 'localhost';
	$pwd = "a";
	$user = "root";
	if(!$isbn||!$author||!$title||!$price)
	{
		echo "Please enter details!";
		exit;
	}
	if(!get_magic_quotes_gpc())
	{
		$isbn = addslashes($isbn);
		$author = addslashes($author);
		$title = addslashes($title);
		$price = doubleval($price); #将变量转换成浮点�?
	}
@$db = mysql_connect($host,$user,$pwd);
if($db == false)
{
	echo "connect error!";
	exit;
}
$query = "insert into books values
		('".$isbn."' ,'".$author."','".$title."','".$price."')";
		#echo $query;
mysql_select_db("hj");
mysql_query($query);
echo "one book has rg!";
mysql_close($db);
}
else
{
	echo "wrong pwd!";
}
?>