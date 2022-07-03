<?php ob_start();?>
<!doctype html>
<?php
session_start();
if(isset($_SESSION['username']));
else header('location:' . "./buoi3_bai2.html");
if(isset($_SESSION['id'])); 
else header('location:' . "./buoi3_bai2.html");
?>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" href="./icon.jpg" type="image/x-icon" />
<title>Bài 3</title>
</head>

<body>
	<h3>Nhập thông tin sản phẩm cần thêm!</h3>
	
	<table border="1" cellspacing="0" cellpadding="10">
		<tr>
			<td>
				<form action="sanpham.php" style="background-color: #DDD6D6" method="post" enctype="multipart/form-data">
				<table cellpadding="12">
					<tr>
						<td><label for="tensanpham">Tên sản phẩm:</label></td>
						<td><input type="text" name="tensp" id="tensanpham"></td>
					</tr>
					<tr>
						<td><label for="chitiet">Chi tiết sản phẩm:</label></td>
						<td><textarea name="chitietsp" id="chitiet" rows="4" cols="50"></textarea></td>
					</tr>
					<tr>
						<td><label for="giasanpham">Giá sản phẩm:</label></td>
						<td><input type="text" name="giasp" id="giasanpham">(VNĐ)</td>
					</tr>
					<tr>
						<td><label for="myfile1">Ảnh sản phẩm:</label></td>
						<td><input type="file" name="myfile" id="myfile1"></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" value="Lưu sản phẩm" align="middle">
							<input type="reset" value="Làm lại">
						</td>
					</tr>
					
				</table>
					
				</form>
			</td>
		</tr>
	</table>
	<a href="buoi3.php">Trở về trang chủ</a>
</body>
</html>
