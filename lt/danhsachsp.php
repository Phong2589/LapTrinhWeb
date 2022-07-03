<?php ob_start();?>
<!doctype html>

<html>
<head>
<meta charset="utf-8">
<title>xem san pham</title>
</head>

<body onload="doianh()">
<div id="wrap">
	<div id="title">
		<h1>Bài 4 - Buổi 4</h1>
	</div>
	<div id="menu">
	</div> 
	<div id="content">
		<h1>Slide show</h1>
	
		<form>
			<img id="laptopImg" src="" height="300" width="300"/>
			<br/>
			<input type="button" name="previous" value="Previous" onclick="changeSlide(-1)">
			<input type="button" name="next" value="Next" onclick="changeSlide(1)">
			<br/>
			<select name="laptopSel" onchange="chooseSlide(value)">
				
			</select> 
		</form>
	</div> <!--end div content-->
	<div id="footer">
		<p>Họ tên SV: <br/> Email: </p>
	</div> <!--end div footer-->
</div> <!--end div wrap-->


<?php
session_start();
if(isset($_SESSION['id'])); 
else header('location:' . "./canhan.php");
$id = $_SESSION['id'];
$con = new mysqli("localhost", "id14976406_phong", "Huynhthanhphong25@@", "id14976406_buoi3");
$con->set_charset("utf8");
$sql = "SELECT * FROM sanpham WHERE idtv=$id";
$result = $con->query($sql);
$dsanh = array();$i=0;
$tensp = array();
while($row = $result->fetch_assoc())
	{
		$dsanh[$i] =$row['hinhanhsp'];
		$tensp[$i] = $row['tensp'];
		$i = $i +1;
	}
?>

<script>
var ds = <?php echo json_encode($dsanh);?>;
var tensp = <?php echo json_encode($tensp);?>;
var i=0;

function doianh()
{
	var j=0;
	document.getElementById("laptopImg").src = ds[0];
	var x = document.getElementsByName("laptopSel")[0];
	for(j=0;j<=tensp.length-1;j++)
	{
		var option = document.createElement("option");
		option.text = tensp[j];
		option.value = j;
		x.add(option);
	}
}

function changeSlide(pos) {
var anh = document.getElementById("laptopImg");
var chuoi = document.getElementsByName("laptopSel")[0];
if(pos==1)
{
i++;
if(i>ds.length-1) i=0;
anh.src = ds[i];
}
else
{
i--;
if(i<0) i=ds.length-1;
anh.src = ds[i];
}
chuoi.options[i].selected = true;
}

function chooseSlide(pos) {
i=pos;
var anh = document.getElementById("laptopImg");
var k=0;
for(k=0;k<=ds.length-1;k++)
{
	if(pos == k) 
	{
		anh.src= ds[k];
		break;
	}
}
}
</script>

<a href="buoi5.php">Trở về</a>
</body>
</html>