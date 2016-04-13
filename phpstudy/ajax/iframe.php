<!doctype html>
<html xml:lang="zh-cn" xml:base="www.phpstudy.com">
<head>
    <meta http-equiv="content-type" content="text/html;charset:utf-8">
    <meta name="descripiton" content="">
    <meta name="keywords" content="">
<title>iframe excersize</title>
    <script type="text/javascript" src="http://libs.baidu.com/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript">
        function ajaxup(){
            var ifrname='fileup'+math.random();
            $('<iframe name='''+ifrname+'"width=0" height="0" frameborder="0"></iframe>').appendTo($('body'));
            $('form:first').attr('target',ifrname);
            $('#progress').html('<img src="./dog.jpg"/>');
        }

    </script>
    <style type="text/css">
        p{border: 1px solid gray}

    </style>
</head>
<body>
<h1>模拟ajax的文件上传效果</h1>
<h2></h2>
<div id="progress"></div>
<form action="upfile.php" method="post" enctype="multipart/form-data" onsubmit="return ajaxup();">
    <p><input type="file" name="photo"></p>
    <p><input type="submit" value="发送"></p>
</form>
<?php

?>
</body>
</html>
