<?php ob_start();?>
<!doctype html>

<?php
		//lay du lieu
	$ten = $_POST['ten'];
	$mk = $_POST['matkhau'];
	$mkmh = md5($mk);
		//xu li du lieu sql
	$con = new mysqli("localhost", "id14976406_phong", "Huynhthanhphong25@@", "id14976406_buoi3");
	$con->set_charset("utf8");
	
	$sql="SELECT * FROM thanhvien WHERE (tendangnhap='$ten' and matkhau='$mkmh')";
	$result = $con->query($sql);
	if ($result->num_rows > 0) 
	{
		//setcookie("username",$ten,time()+3600);
		session_start();
		$_SESSION['username'] = $ten;
		header('location:' . "./buoi3.php");
	}
	else header('location:' . "./buoi3_bai2.html");
	$con->close();
?>
<html>
<head>
<meta charset="utf-8">
<title>đăng nhập</title>
</head>

<body>
	
</body>
</html>