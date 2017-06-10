<?php
$host = 'localhost';
$user = 'root';
$pwd = 'a';

@$con = mysql_connect($host,$user,$pwd);
if($con == false)
{
	echo "Unable to connect dbï¼?br />";
}
mysql_select_db("hj");
$query = "SELECT * FROM message";
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
{
	 echo  $row['username']." ". $row['title']." ". $row['content']." ".$row['lastdate'];
  echo "<br /><br /><br />";
}
mysql_close($con);
?>