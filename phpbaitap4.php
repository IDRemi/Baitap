<!DOCTYPE html>
<html>
<head>
	<title>HuyLê-BàiTậpVềNhà6</title>
</head>
<body>
<!--HTML input-->
<form method=POST>
<input name="ngay" type="number" placeholder="Ngày sinh" required=""></input>
<br>
<br>
<input name="thang" type="number" placeholder="Tháng sinh" required=""></input>
<br>
<br>
<input name="nam" type="number" placeholder="Năm sinh" required=""></input>
<br>
<br>
<button name="kiemtra" type="submit">Kiểm tra tuổi</button>
<br>
<br>
</form>

<!--Code PHP-->
<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
if(isset($_POST['kiemtra'])) {
	$ngaysinh=$_POST['ngay'];
	$thangsinh=$_POST['thang'];
	$namsinh=$_POST['nam']; 
	$day = mktime(0,0,0,$thangsinh,$ngaysinh,$namsinh);
	if($thangsinh<1 || $thangsinh>12) {
		echo "Vui lòng nhập đúng tháng sinh"."<br>";
	}
	if(($ngaysinh<1 || $ngaysinh>31)||($thangsinh==2 && $ngaysinh>28)) {
		echo "Vui lòng nhập đúng ngày sinh"."<br>";
	}
	if($namsinh<0) {
		echo "Vui lòng nhập đúng năm sinh";
	}
	else{
	echo $tuoicuaban="Tuổi của bạn là:"." ".tinhtuoi()." "."tuổi"."<br>"."Còn"." ".thangconlai()." "."tháng là đến sinh nhật bạn";}
}

//Hàm tính tuổi
function tinhtuoi() {
	global $day;
	$day_1=date('d-m-Y',$day);
	$day_2=date('d-m-Y');
	$days = (strtotime($day_2) - strtotime($day_1)) / (60 * 60 * 24);
	return (int)$tuoi=$days/365;
}

//Hàm tính tháng còn lại đến sinh nhật
function thangconlai(){
	global $thangsinh;
	$thanghientai=date('m');
	$thangconlai=$thangsinh-$thanghientai;
	if($thangconlai<0){
		return (12-$thanghientai)-$thangconlai;
	}
	else{return $thangconlai;}
}
?>
<!--Kết thúc php-->

</body>
</html>