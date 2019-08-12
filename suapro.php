<?php  
session_start();
if (!isset($_SESSION['username'])|| !isset($_SESSION['data'])) {
	header('Location:dangnhap.php');
}else{
	$data=$_SESSION['data'];
}
echo $_POST['stt'];
echo $_POST['TenSP'];
echo $_POST['GiaSP'];
echo $_POST['SoLuong'];
echo $_POST['NgayTao'];
echo $_POST['TrangThai'];

foreach ($data as  $row) {
	if ($row->stt == $_POST['stt']) {
		$row->TenSP = $_POST['TenSP'];
		$row->GiaSP = $_POST['GiaSP'];
		$row->SoLuong = $_POST['SoLuong'];
		$row->NgayTao = $_POST['NgayTao'];
		$row->TrangThai= $_POST['TrangThai'];
		break;
	}
}

$_SESSION['data']=$data;
var_dump($data);
header('Location:trangchu.php');

?>