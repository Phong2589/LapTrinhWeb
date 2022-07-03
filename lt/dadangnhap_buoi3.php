<?php ob_start();?>
<!doctype html>
<?php
	$ten=$_SESSION['username'];
	$con = new mysqli("localhost", "id14976406_phong", "Huynhthanhphong25@@", "id14976406_buoi3");
	$con->set_charset("utf8");
	$sql = "SELECT * FROM thanhvien WHERE tendangnhap='$ten'";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	$_SESSION['id'] = $row['id'];
?>
<html>
<head>
<meta charset="utf-8">
<title>Đã đăng nhập</title>
</head>

<body>
	<div style="background-color: LightGray;">
	<hr size="1px" color="black"/>
	<p><a href="../index.html"><b>Trang chủ</b></a>&emsp;|&emsp;<a href="./canhan.php">Thông tin cá nhân</a>&emsp;|&emsp;<a href="./xemsp_buoi3.php">Xem sản phẩm</a>&emsp;|&emsp;<a href="./buoi3_bai3.php">Thêm sản phẩm</a>&emsp;|&emsp;<a href="./dangxuat_3.php">Đăng xuất</a></p>
	<hr size="1px" color="black"/>
	</div>
	<?php
	echo "<h1>Xin chào ".$_SESSION['username']."!</h1>";
	?>
</body>
</html>