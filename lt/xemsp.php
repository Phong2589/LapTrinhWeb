<?php ob_start();?>
<!doctype html>
<?php
session_start();
if(isset($_SESSION['id'])); 
else header('location:' . "./buoi4_dangnhap.html");
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
			<td onmouseover='hienanh(".$row['idsp'].")' onmouseout='ananh(".$row['idsp'].")'>".$row['tensp']."<div id='".$row['idsp']."'></div></td>
			<td>".$row['giasp']."</td>
			<td ><center><button onclick='chitiet(".$row['idsp'].")'>Xem</button></center></td>
			<td><center><button><a href='thongtinsua.php?id=".$row['idsp']."'>Sửa</a></button></center></td>
			<td><center><button><a href='xoasp.php?id=".$row['idsp']."'>Xóa</a></button></center></td>
			</tr>";
		$stt++;
	}
	
	echo "</table>";
}
else 
{
	echo "Bạn chưa có sản phẩm nào!<br>";
}
	echo "<p>Tìm kiếm</p>";
	echo "<input type='textbox' onkeyup='timkiem(this.value,".$id.")'>";
	echo "<p id='timkiem'></p>";
$con->close();
?>
<html>
<head>
<meta charset="utf-8">
<title>xem san pham</title>
</head>

<body>
	
	<div id="xemsp"></div>
	<a href="buoi3_bai3_5.php">Thêm sản phẩm</a><br>
	<a href="buoi5.php">Trở về</a><br>
	<a href="danhsachsp.php">Danh sách ảnh</a>
	
	<script>
	function chitiet(idsp)
	{
		var xmlhttp;
		xmlhttp=new XMLHttpRequest();
		xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		document.getElementById("xemsp").innerHTML=xmlhttp.responseText; } }

		xmlhttp.open("GET","chitietsp.php?id="+idsp,true);
		xmlhttp.send();
	}
	
	function hienanh(idsp)
	{
		var xmlhttp;
		xmlhttp=new XMLHttpRequest();
		xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		document.getElementById(idsp).innerHTML=xmlhttp.responseText; } }

		xmlhttp.open("GET","hienanh.php?id="+idsp,true);
		xmlhttp.send();
	}
	
	function ananh(idsp)
	{
		var xmlhttp;
		xmlhttp=new XMLHttpRequest();
		xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		document.getElementById(idsp).innerHTML=xmlhttp.responseText; } }

		xmlhttp.open("GET","ananh.php",true);
		xmlhttp.send();
	}
	
	function timkiem(gt,id)
	{
		var xmlhttp;
		xmlhttp=new XMLHttpRequest();
		xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		document.getElementById("timkiem").innerHTML=xmlhttp.responseText; } }

		xmlhttp.open("GET","timkiem.php?gt="+gt+"&id="+id,true);
		xmlhttp.send();
	}
	</script>
</body>
</html>