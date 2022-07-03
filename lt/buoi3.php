<?php ob_start();?>
<!doctype html>
<?php
session_start();

?>
<html>
<head>
<meta charset="utf-8">
<title>Buổi 3</title>
<link rel="stylesheet" type="text/css" href="./dinhdang.css">
<link rel="icon" href="./icon.jpg" type="image/x-icon" />
</head>

<body>
	<h1>
		<a href="https://www.ctu.edu.vn/"><img src="./1.png" alt="Lỗi không thể tải ảnh" width="100px" height="100px" align="center"></a>
		Lập trình Web
	</h1>
	<?php
	if(isset($_SESSION['username'])){
		include 'dadangnhap_buoi3.php';
	}
	else{
		include 'chuadangnhap_buoi3.php';
	}
	?>
	
	
	<table border="1" cellspacing="0" align="right">
		<tr><td width="250px"><b>
			Họ và Tên: Huỳnh Thanh Phong<br>
			Mã số sinh viên: B1809388<br>
			Nhóm chiều thứ 6
			</b></td></tr>
	</table>
</body>
</html>
