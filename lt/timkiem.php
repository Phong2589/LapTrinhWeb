
<!doctype html>
<?php
$gt = $_GET['gt'];
$idtv = $_GET['id'];
if($gt=="") echo "";
else
{
$con = new mysqli("localhost", "id14976406_phong", "Huynhthanhphong25@@", "id14976406_buoi3");
$con->set_charset("utf8");
$sql = "SELECT * FROM sanpham WHERE (tensp LIKE '%".$gt."%') AND idtv=$idtv";
$result = $con->query($sql);
if($result->num_rows > 0)
{
	
	while($row = $result->fetch_assoc())
	{
		echo "<a href='chitietsp_buoi3.php?id=".$row[idsp]."'>".$row[tensp]."</a><br>";
	}
	echo "<br><br>";
}
$con->close();
}
?>
<html>
<head>
<meta charset="utf-8">
<title>timkiem</title>
</head>

<body>
</body>
</html>