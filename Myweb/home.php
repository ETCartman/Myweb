<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head>
	<title>Hi,Welcome!</title>
	<style>
	#header {
		background-color:gray;
		color:white;
		text-align: center;
		padding: 5px; 
	}
	#nav {
		line-height:30px;
		background-color:#292421;
		width: 200px;
		float:left;
		padding:5px;
		text-align: center;
	}
	#nav2 {
		line-height:30px;
		background-color:#292421;
		width: 200px;
		float:right;
		padding:5px;
		text-align: center;
	}
	#section {
		width: 350px;
		float:	left;
		padding: 10px;

	}
	#footer {
		background-color:gray;
		color:black;
		clear:both;
		padding: 5px; 
		text-align: center;
	}
	</style>
	<style>
	.steamb {
		background-color:#00C957;
	color:black;
	margin:10px;
	padding:10px;
	}
	</style>
	<style>
	.steamb2 {
		background-color:#00FFFF;
	color:black;
	margin:6px;
	padding:6px;
	}
	</style>
<style>
	.steamb3 {
		background-color:#FFD700;
	color: red;
	margin:6px;
	padding:6px;
	}
	
	</style>	
</head>
<body background = "backg/c.jpg">
	<?php
	session_start();
	if(!isset($_SESSION['username']))
	{
		header("LOCATION:login.html");
		exit();
	}
	?>
<div id = "header">
<i>HI,Welcome!</i>
</div>
<div id = "nav">
	<div class = "steamb">
<I style ="color:red;text-align:center">PHP</I>
	</div>
<a href="/search.html" target ="_blank">
<DIV class = "steamb">
<b style = "color:black;">搜索图书</b>
</DIV>
</a>
<a href="/newbook.html" target ="_blank">
<DIV class = "steamb">
<b>增加图书</b>
</DIV>
</a>
<a href="/delbook.html" target ="_blank">
<DIV class = "steamb">
<b>删除图书</b>
</DIV>
</a>
<a href="/upload.html" target ="_blank">
<DIV class = "steamb">
<b>上传文件</b>
</DIV>
</a>
<a href="/upload.html" target ="_blank">
<DIV class = "steamb">
<b>发送邮件</b>
</DIV>
</a>
<a href="/liuyan.html" target ="_blank">
<DIV class = "steamb">
<b>留言板</b>
</DIV>
</a>
</div>
<div id = "nav2">
<a href="/userspace.html" target ="_blank">
<div class = "steamb2">
<b>用户中心</b>
</div>
</a>
<a href="/logout.php">
<div class = "steamb2">
<b>登出</b>
</div>
</a>
<a href="/signup.html" target ="_blank">
<div class = "steamb2">
<b>注册</b>
</div>
</a>
<a href="http://vip.qq.com/" target ="_blank">
<div class = "steamb3">
<b>充值VIP</b>
</div>
</a>
<a href="http://vip.qq.com/" target ="_blank">
<div class = "steamb3">
<b>充值SVIP</b>
</div>
</a>
</div>
<div id = "section">
<p>
暂停更新，学习其他内容
<b style ="color:red;text-align:center">
<?php
$reIP=$_SERVER["REMOTE_ADDR"];
echo $time."<BR />YOUR IP ADDRESS : ".$reIP;
?> </b>
</p>
</div>
<div id = "footer">
	www.jhanlin.com
</div>
<embed align = "center" height = "0" width = "0" src = "music/mengban.mp3"></p>
<hr />
<hr />
<h1 align= "center"><I style = "color:red">Welcome!</I></h1>
</p>
<h2 style = "color:green;text-align:center">V1.3 17/1/21</h2>
</body>
</html>