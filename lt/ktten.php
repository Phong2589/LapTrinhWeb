<?php
$ten = $_GET['ten'];
$con = new mysqli("localhost", "id14976406_phong", "Huynhthanhphong25@@", "id14976406_buoi3");
$con->set_charset("utf8");
$sql = "SELECT * FROM thanhvien WHERE tendangnhap='$ten'";
$result = $con->query($sql);
if($result->num_rows > 0) echo "Tên đã tồn tại! Vui lòng điền tên khác!";
else echo "";
?>