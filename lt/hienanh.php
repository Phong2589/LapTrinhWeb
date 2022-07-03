<?php
$id = $_GET['id'];
$con = new mysqli("localhost", "id14976406_phong", "Huynhthanhphong25@@", "id14976406_buoi3");
$con->set_charset("utf8");
$sql = "SELECT * FROM sanpham WHERE idsp=$id";
$result = $con->query($sql);
$row = $result->fetch_assoc();
echo "<img src=".$row['hinhanhsp']." height='200px' width='200px'>";
?>