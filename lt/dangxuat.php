<?php ob_start();?>
<?php
session_start();
if(isset($_SESSION['username']));
else header('location:' . "./buoi3.php");
if(isset($_SESSION['id'])); 
else header('location:' . "./buoi3.php");
unset($_SESSION['username']);
unset($_SESSION['id']);
header('location:' . "./buoi4_dangnhap.html");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>dang xuat</title>
</head>

<body>
	
</body>
</html>