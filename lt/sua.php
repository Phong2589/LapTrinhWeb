<?php ob_start();?>
<!doctype html>
<?php
	session_start();
	if(isset($_SESSION['username']));
    else header('location:' . "./buoi3_bai2.html");
	if(isset($_SESSION['idsua']));
	else header('location:' . "./xemsp.php");
	$idsua=$_SESSION['idsua'];
	//thu thap du lieu
	$tensp = $_POST['tensp'];
	$ctsp=$_POST['chitietsp'];
	$gia = $_POST['giasp'];
	$idtv = $_SESSION['id'];
	
	//xu li du lieu
	//mo noi ket
	$con = new mysqli("localhost", "id14976406_phong", "Huynhthanhphong25@@", "id14976406_buoi3");
	$con->set_charset("utf8");
	//cau lenh sql
	$sql = "UPDATE sanpham SET tensp='$tensp',chitietsp='$ctsp',giasp=$gia WHERE idsp=$idsua";
	$result = $con->query($sql);
	
	unset($_SESSION['idsua']);
	//thuc hien truy van
	//dong ket noi
	$con->close();
?>
<html>
<head>
<meta charset="utf-8">
<title>sửa</title>
</head>

<body>
	<h2>Sửa thành công!</h2>
	<a href="xemsp.php">Xem sản phẩm</a><br>
	<a href="buoi5.php">Trở về trang chủ</a>
</body>
</html>