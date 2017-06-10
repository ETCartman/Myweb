<?php

$searchtype = $_POST['searchtype'];
$searchterm =trim($_POST['searchterm']);

if(!$searchtype||!$searchterm)
{
	echo "Please enter the details,try again!";
	exit;
}
if(!get_magic_quotes_gpc())
{
	$searchterm = addslashes($searchterm);
	$searchtype = addslashes($searchtype);
}

$host = 'localhost';
$user = 'root';
$pwd = 'a';

@$con = mysql_connect($host,$user,$pwd);
if($con == false)
{
	echo "Unable to connect dbï¼?br />";
}
mysql_select_db("hj"); 
$query = "SELECT * FROM books where ".$searchtype." like '%$searchterm%';";
$result = mysql_query($query);

while($row = mysql_fetch_array($result))
  {
  echo  $row['isbn']." ". $row['title']." ". $row['author']." ". $row['price'];
  echo "<br />";
  }

mysql_close($con);
?>