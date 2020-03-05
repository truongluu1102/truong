<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Thể loại</title>
</head>

<body>
	<?php
	ob_start();
	include($_SERVER['DOCUMENT_ROOT'].'/php/algorithm/connect.php');
	include($_SERVER['DOCUMENT_ROOT'].'/php/algorithm/fruit.php');
	include($_SERVER['DOCUMENT_ROOT'].'/php/all/all.php');
	include($_SERVER['DOCUMENT_ROOT'].'/php/top/top1.php');
	include($_SERVER['DOCUMENT_ROOT'].'/php/infor/infor.php');
	include($_SERVER['DOCUMENT_ROOT'].'/php/menu/menu.php');
	include($_SERVER['DOCUMENT_ROOT'].'/php/main/categories.php');
	include($_SERVER['DOCUMENT_ROOT'].'/php/bottom/bottom.php');

	?>
</body>
</html>
