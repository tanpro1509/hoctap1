<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>connect</title>
</head>
<body>
<?php
$server='localhost';
$user='root';
$pass='';
$data='khachhang';
$conn=mysqli_connect($server,$user,$pass,$data) or die ('Not connect');
mysqli_query($conn,'set names"utf8"');
?>
</body>
</html>