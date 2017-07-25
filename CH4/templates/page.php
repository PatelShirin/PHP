<?php
return "<!DOCTYPE html>
<html>
<head>
<title>$pageData->title</title>
<meta http-equiv='Content-Type' Content='text/html;charset=utf-8'/>
$pageData->css
$pageData->embeddedStyle
</head>
<body>$pageData->content</body>
</html>";