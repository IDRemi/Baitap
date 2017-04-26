<!DOCTYPE html>
<html>
<head>
	<title>HuyLê-BàiTậpVềNhà5</title>
</head>
<body>

<!-- Menu -->
<ul id="menu"><?php
	$mang=array("Trang chủ","Thông tin","Sản phẩm","Liên hệ");
	foreach ($mang as $value) {
		echo "<li id='menucon'><p>$value</p></li>";
	}
	?>
	</ul>
<!--Kết thúc Menu-->

<!--Style Menu-->
<style type="text/css">
	#menucon {
		float:left;
		background: blue;
		list-style: none;
		}
	#menucon p{width: 300px;
		height: 40px;
		color: white;
		text-align: center;
		border-left: 1px solid white;
		font-size: 25px;
		margin: 15px;
		padding-top:10px;}	
}
</style>
<!--Kết thúc Style-->

<!-- Danh mục sản phẩm-->
<?php
$mangsp = array( 
"1"=>array('IPhone 5',"https://cdn1.tgdd.vn/Products/Images/42/78151/samsung-galaxy-s7-edge-pink-gold-edition-pp-300x300.jpg",'3.000.000 VNĐ'), 
"2"=>array("IPhone 6","https://cdn1.tgdd.vn/Products/Images/42/78151/samsung-galaxy-s7-edge-pink-gold-edition-pp-300x300.jpg",'4.000.000 VNĐ'), 
"3"=>array("IPhone 7","https://cdn1.tgdd.vn/Products/Images/42/78151/samsung-galaxy-s7-edge-pink-gold-edition-pp-300x300.jpg",'5.000.000 VNĐ'), 
"4"=>array("IPhone 8","https://cdn1.tgdd.vn/Products/Images/42/78151/samsung-galaxy-s7-edge-pink-gold-edition-pp-300x300.jpg",'6.000.000 VNĐ'), 
"5"=>array("IPhone 9","https://cdn1.tgdd.vn/Products/Images/42/78151/samsung-galaxy-s7-edge-pink-gold-edition-pp-300x300.jpg",'7.000.000 VNĐ'),
"6"=>array("IPhone 10","https://cdn1.tgdd.vn/Products/Images/42/78151/samsung-galaxy-s7-edge-pink-gold-edition-pp-300x300.jpg",'8.000.000 VNĐ'),
"7"=>array("IPhone 11","https://cdn1.tgdd.vn/Products/Images/42/78151/samsung-galaxy-s7-edge-pink-gold-edition-pp-300x300.jpg",'9.000.000 VNĐ'),
"8"=>array("IPhone 12","https://cdn1.tgdd.vn/Products/Images/42/78151/samsung-galaxy-s7-edge-pink-gold-edition-pp-300x300.jpg",'10.000.000 VNĐ') 
);
foreach ($mangsp as $key=>$value) {
	echo "<div id='danhmucsanpham'>
	<img src='$value[1]'>
	<br><br>
	<p id='a'>Tên Sản Phẩm : $value[0]</p>
	<p id='b'>Giá : $value[2]</p>
	</div>";
}
?>
<!--Kết thúc danh mục sản phẩm-->

<!--Style Danh mục sản phẩm-->
<style type="text/css">
	
	#danhmucsanpham{
		width:260px;
		float:left;
		margin-left:60px;
	}
	p#a{
		color:red;
		font-size:20px;
		font-weight: bold;
		padding-left: 35px;
	}
	p#b{
		color: black;
		font-weight: bold;
		font-style: italic;
		font-size:20px;
		padding-left: 35px;
	}
	img{
		padding-top: 100px;
	}
</style>
<!-- Kết thúc style -->
</body>
</html>