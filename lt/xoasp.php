<?php ob_start();?>
<!doctype html>
<?php
session_start();
if(isset($_SESSION['username']));
else header('location:' . "./buoi3_bai2.html");
if(isset($_SESSION['id'])); 
else header('location:' . "./buoi3_bai2.html");
$id = $_GET['id'];
$con = new mysqli("localhost", "id14976406_phong", "Huynhthanhphong25@@", "id14976406_buoi3");
$con->set_charset("utf8");
$sql = "DELETE FROM sanpham WHERE idsp=$id";
$result = $con->query($sql);

?>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" href="./icon.jpg" type="image/x-icon" />
<title>xoa san pham</title>
</head>

<body>
	<h2>Xóa sản phẩm thành công!</h2>
	<a href="xemsp.php">Xem sản phẩm</a><br>
	<a href="buoi5.php">Trở về trang chủ</a>
</body>
</html>