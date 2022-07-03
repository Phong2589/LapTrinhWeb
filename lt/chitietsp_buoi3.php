<?php ob_start();?>
<!doctype html>
<?php
session_start();
if(isset($_SESSION['username']));
else header('location:' . "./buoi3_bai2.html");
$id = $_GET['id'];
$con = new mysqli("localhost", "id14976406_phong", "Huynhthanhphong25@@", "id14976406_buoi3");
$con->set_charset("utf8");
$sql = "SELECT * FROM sanpham WHERE idsp=$id";
$result = $con->query($sql);

if($result->num_rows > 0)
{
	echo "<table border='1'>";
	echo "<tr>
	<td>Tên sản phẩm</td>
	<td>Chi tiết sản phẩm</td>
	<td>Giá sản phẩm</td>
	<td>Hình ảnh</td>
	</tr>";
	while($row = $result->fetch_assoc())
	{
		echo "<tr>
			<td>".$row['tensp']."</td>
			<td>".$row['chitietsp']."</td>
			<td>".$row['giasp']."</td>
			<td><img src=".$row['hinhanhsp']." height='200px' width='200px'></td>
			</tr>";
	}
	echo "</table>";
}
else 
{
	echo "Bạn chưa có sản phẩm nào!<br>";
	
}

?>
<html>
<head>
<meta charset="utf-8">
<title>xem san pham</title>
</head>

<body>
</body>
</html>