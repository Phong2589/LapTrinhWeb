<?php ob_start();?>
<!doctype html>
<?php
	//kiem tra
	session_start();
	if(isset($_SESSION['username'])) echo "Chào mừng bạn đến trang cá nhân!"."<br>";
	else header('location:' . "./buoi3_bai2.html");
	
	//$ten = $_COOKIE['username'];
	$ten=$_SESSION['username'];
	$con = new mysqli("localhost", "id14976406_phong", "Huynhthanhphong25@@", "id14976406_buoi3");
	$con->set_charset("utf8");
	$sql = "SELECT * FROM thanhvien WHERE tendangnhap='$ten'";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	
	echo "<b> Ảnh đại diện : </b> <br> <img src=".$row['hinhanh']." height='200px' width='200px'><br>";
	echo "<b>Tên đăng nhập: </b>".$row['tendangnhap']."<br>";
	echo "<b>Giới tính: </b>".$row['gioitinh']."<br>";
	echo "<b>Nghề nghiệp: </b>".$row['nghenghiep']."<br>";
	echo "<b>Sở thích: </b>".$row['sothich']."<br>";
	//setcookie("id",$row['id'],time()+3600);
	$con->close();
?>

<html>
<head>
<meta charset="utf-8">
<link rel="icon" href="./icon.jpg" type="image/x-icon" />
<title>cá nhân</title>
</head>

<body>
	<a href="buoi3.php">Trở về</a>
</body>
</html>