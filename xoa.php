<?php  
session_start();
if (!isset($_SESSION['username'])|| !isset($_SESSION['data'])) {
	header('Location:dangnhap.php');
}else{
	$data=$_SESSION['data'];

}
if (isset($_GET['stt'])) {
	$stt=$_GET['stt'];
	foreach ($data as $key => $row) {
		if($row->stt==$stt)
			unset($data[$key]);
	}
}


$_SESSION['data']=$data;
header('Location:trangchu.php');

?>