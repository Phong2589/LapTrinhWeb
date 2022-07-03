<?php ob_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>xu li</title>
</head>

<body>
	
<?php
	//thu thap du lieu
	$ten = $_POST['ten'];
	$matkhau = $_POST['mk'];
	$mkmahoa= md5($matkhau);
	$gioitinh = $_POST['gioitinh'];
	$nghe = $_POST['nghe'];
	$sothich="";
	if(isset($_POST['danhsach'])) $sothich=implode(", ",$_POST['danhsach']);
	
	$duongdan="./img/".$_FILES['myfile']['name'];
	//$nameimg=$_FILES['myfile']['name'];
	move_uploaded_file($_FILES['myfile']['tmp_name'], $duongdan);
	
	//xu li du lieu
	//mo noi ket
	$con = new mysqli("localhost", "id14976406_phong", "Huynhthanhphong25@@", "id14976406_buoi3");
	$con->set_charset("utf8");
	//cau lenh sql
	$sql = "INSERT INTO thanhvien (tendangnhap, matkhau, hinhanh, gioitinh, nghenghiep, sothich) VALUES ('$ten','$mkmahoa','$duongdan','$gioitinh', '$nghe','$sothich')";
	$result = $con->query($sql);
	
	
	//thuc hien truy van
//	echo "<b> Ảnh đại diện : </b> <br> <img src=".$duongdan."><br>
//			<b>Tên đăng nhập: </b>".$ten."<br>
//			<b>Giới tính: </b>".$gioitinh."<br>
//			<b>Nghề nghiệp: </b>".$nghe."<br>
//			<b>Sở thích: </b>".$sothich."<br>";
	
	//dong ket noi
	$con->close();
?>
	<h3>Chúc mừng bạn đã đăng kí thành công tài khoản!</h3>
	<a href="./buoi3_bai2.html">Đăng nhập</a><br>
	<a href="buoi3.php">Trang chủ</a>
</body>
</html>