<?php ob_start();?>
<!doctype html>
<?php
	session_start();
	if(isset($_SESSION['username']));
    else header('location:' . "./buoi3_bai2.html");
	$_SESSION['idsua'] = $_GET['id'];
?>
<?php
	
	//mo noi ket
	$id=$_GET['id'];
	$con = new mysqli("localhost", "id14976406_phong", "Huynhthanhphong25@@", "id14976406_buoi3");
	$con->set_charset("utf8");
	//cau lenh sql
	$sql = "SELECT * FROM sanpham WHERE idsp=$id";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	
?>
<html>
<head>
<meta charset="utf-8">
<title>Thông tin sửa</title>
</head>

<body>
	<h3>Nhập thông tin cần sửa đổi!</h3>
	
	<table border="1" cellspacing="0" cellpadding="10">
		<tr>
			<td>
				<form action="sua_3.php" style="background-color: #DDD6D6" method="post">
				<table cellpadding="12">
					<tr>
						<td><label for="tensanpham">Tên sản phẩm:</label></td>
						<td><input type="text" name="tensp" id="tensanpham" value="<?php echo $row['tensp'];?>"></td>
					</tr>
					<tr>
						<td><label for="chitiet">Chi tiết sản phẩm:</label></td>
						<td><textarea name="chitietsp" id="chitiet" rows="4" cols="50"><?php echo $row['chitietsp'];?></textarea></td>
					</tr>
					<tr>
						<td><label for="giasanpham">Giá sản phẩm:</label></td>
						<td><input type="text" name="giasp" id="giasanpham" value="<?php echo $row['giasp'];?>">(VNĐ)</td>
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
	<?php
	$con->close();
	?>
	<a href="xemsp_buoi3.php">Trở về</a>
</body>
</html>