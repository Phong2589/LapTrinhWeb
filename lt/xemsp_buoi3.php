<?php ob_start();?>
<!doctype html>
<?php
session_start();
if(isset($_SESSION['id'])); 
else header('location:' . "./canhan.php");
$id = $_SESSION['id'];
$con = new mysqli("localhost", "id14976406_phong", "Huynhthanhphong25@@", "id14976406_buoi3");
$con->set_charset("utf8");
$sql = "SELECT * FROM sanpham WHERE idtv=$id";
$result = $con->query($sql);
$stt=1;
if($result->num_rows > 0)
{
	echo "<table border='1' cellpadding='10 '>";
	echo "<tr>
	<td>STT</td>
	<td>Tên sản phẩm</td>
	<td>Giá sản phẩm</td>
	<td>Xem chi tiết</td>
	<td><img src='edit.png' height='50px' width='50px'></td>
	<td><img src='delete.png' height='50px' width='50px'></td>
	</tr>";
	while($row = $result->fetch_assoc())
	{
		echo "<tr>
			<td>".$stt."</td>
			<td>".$row['tensp']."</td>
			<td>".$row['giasp']."</td>
			<td><center><button><a href='chitietsp_buoi3.php?id=".$row['idsp']."'>Xem</a></button></center></td>
			<td><center><button><a href='thongtinsua_3.php?id=".$row['idsp']."'>Sửa</a></button></center></td>
			<td><center><button><a href='xoasp_3.php?id=".$row['idsp']."'>Xóa</a></button></center></td>
			</tr>";
		$stt++;
	}
	
	echo "</table>";
}
else 
{
	echo "Bạn chưa có sản phẩm nào!<br>";
}

$con->close();
?>
<html>
<head>
<meta charset="utf-8">
<title>xem san pham</title>
</head>

<body>
	
	<div id="xemsp"></div>
	<a href="buoi3_bai3.php">Thêm sản phẩm</a><br>
	<a href="buoi3.php">Trở về</a><br>
	
</body>
</html>