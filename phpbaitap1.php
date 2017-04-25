<!DOCTYPE html>
<html>
<head>
	<title>BàiTậpVềNhà4</title>
	<h3><center>Chuyển đổi năm dương lịch sang âm lịch </center></h3>
</head>
<body>
<form method="POST">
<input type="number" name="duonglich" placeholder="Năm dương lịch" required />
<br/>
<br/>
<input type="submit" name="chuyendoi" value="Chuyển" />
<br/>
<br/>
</form>
<?php
$amlich1 = array(4 =>"Giáp" ,5=>'Ất',6=>"Bính",7=>"Đinh",8=>"Mậu",9=>"Kỷ",0=>"Canh",1=>"Tân",2=>"Nhâm",3=>"Quí");
$amlich2 = array(4 =>"Tí" ,5=>'Sửu',6=>"Dần",7=>"Mẹo",8=>"Thìn",9=>"Tỵ",10=>"Ngọ",11=>"Mùi",0=>"Thân",1=>"Dậu",2=>"Tuất",3=>"Hợi");
if(isset($_POST['chuyendoi'])){
	$duonglich=$_POST['duonglich'];
	$can=$duonglich%10;
	$chi=$duonglich%12;
	switch ($duonglich) {
		case $duonglich>=0:
			echo 'Năm âm lịch:'.' '.$amlich1[$can].' '.$amlich2[$chi];
			break;
		default: echo "Năm âm lịch:"." "."Không thể chuyển đổi";
		break;}
	}
?>
</body>
</html>