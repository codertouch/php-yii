<!DOCTYPE html>
<html xmlns="http://www.phpstudy.com" lang="zh-cn">
<head>
	<title>练习</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<script type="text/javascript">
	function vote(){
		var dd=document.createElement('img');
		dd.setAttribute('src','./dog.jpg');

		document.getElementById('progress').appendChild(dd);
	}	
	</script>
	<style type="text/css">
	</style>
</head>
<body>
<div>
	<p><img src="旺财.jpg" width="50" height="50"></p>
	<p><a href="vote.php">投票</a></p>
	<p><input type="button" value="投票2" onclick="vote();"></input></p>
</div>
<div id="progress"></div>
<div id="regsult"></div>
<form action="reg.php" method="post" target="wushua">
<p>用户名：<input type="text" name="username"></input></p>
<p>邮件：<input type="text" name="email"></input></p>
<p><input type="submit" name="reg" value="注册"></input></p>
  
</form>

<iframe src="" name="wushua" width="400" height="300"></iframe>
</body>
</html>