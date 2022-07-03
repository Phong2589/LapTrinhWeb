<?php ob_start();?>
<!doctype html>
<?php
	session_start();
	if(isset($_SESSION['username']));
    else header('location:' . "./buoi3_bai2.html");
	//thu thap du lieu
	$tensp = $_POST['tensp'];
	$ctsp=$_POST['chitietsp'];
	$gia = $_POST['giasp'];
	$idtv = $_SESSION['id'];
	$duongdan="./img/" . $_FILES['myfile']['name'];
	$nameimg=$_FILES['myfile']['name'];
	move_uploaded_file($_FILES['myfile']['tmp_name'], $duongdan);
	
	//xu li du lieu
	//mo noi ket
	$con = new mysqli("localhost", "id14976406_phong", "Huynhthanhphong25@@", "id14976406_buoi3");
	$con->set_charset("utf8");
	//cau lenh sql
	$sql = "INSERT INTO sanpham (tensp,chitietsp,giasp,hinhanhsp,idtv) VALUES ('$tensp','$ctsp','$gia','$duongdan', '$idtv')";
	$result = $con->query($sql);
	
	
	//thuc hien truy van
	echo "Bạn đã thêm sản phẩm thành công";
	//dong ket noi
	$con->close();
?>
<html>
<head>
<meta charset="utf-8">
<title>san pham</title>
</head>

<body>
	

	<br>
	<a href=xemsp.php>Xem danh sách sản phẩm</a><br>
	<a href="buoi5.php">Trở về trang chủ</a>
</body>
</html>