<?php
session_start();
if($_SESSION['svipstat'] != 'y')
{
	echo "You are not SVIP!!";
	exit;
}
$type = $_POST['type'];
if ($_FILES['userfile']['error'] > 0)
{
	echo "Problem: ";
	switch ($_FILES['userfile']['error']) {
		case 1 : echo "File exceeded upload_max_filesize";break;
		case 2 : echo "File exceeded max_filesize";break;
		case 3 : echo "File only partially upload";break;
		case 4 : echo "NO file upload";break;
		case 6 : echo "Cant upload : No temp directory specified";break;
		case 7 : echo "Upload failed : Cannot write to disk";break;
	}
	exit;
}
if($type == "music")
{
	$upfile = 'music/'.$_FILES['userfile']['name'];
}
else
{
	$upfile = 'backg/'.$_FILES["userfile"]['name'];
}
#echo $upfile."<br />";
if($_FILES['userfile']['size'] > 15000000)
{
	echo "It`s too big!";
	exit;
}
if (is_uploaded_file($_FILES['userfile']['tmp_name']))
{
	if(!move_uploaded_file($_FILES['userfile']['tmp_name'], $upfile))
	{
		echo "Could not move file to destination!";
		exit;
	}
}
else
{
	echo "Upload file attack";
	exit;
}
echo "successful!";
?>