<?php  
session_start();
if (!isset($_SESSION['username'])|| !isset($_SESSION['data'])) {
	header('Location:dangnhap.php');
}else{
	$data=$_SESSION['data'];

}

if(isset($_GET['stt'])){
	$stt=$_GET['stt'];
	foreach ($data as $row) {
		if ($row->stt == $stt) {
			$n=$row;
			break;
		}
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Sửa</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="Demo project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	<style type="text/css"></style>
</head>
<body>
	<div class="container">
		<form action="suapro.php" method="post">
			<div class="form-group col-md-4">
				<label>STT</label>
				<input type="text" class="form-control" name="stt" value="<?=$n->stt ?>" readonly>
			</div>
			<div class="form-group col-md-4">
				<label>Tên SP</label>
				<input type="text" class="form-control" name="TenSP" value="<?=$n->TenSP ?>">
			</div>
			<div class="form-group col-md-4">
				<label>Giá SP</label>
				<input type="text" class="form-control" name="GiaSP" value="<?=$n->GiaSP ?>">
			</div>
			<div class="form-group col-md-4">
				<label>Số Lượng</label>
				<input type="text" class="form-control" name="SoLuong" value="<?=$n->SoLuong ?>">
			</div>
			<div class="form-group col-md-4">
				<label>Ngày Tạo</label>
				<input type="text" class="form-control" name="NgayTao" value="<?=$n->NgayTao ?>">
			</div>
			<div class="form-group col-md-4">
				<label>Trạng Thái</label>
				<input type="text" class="form-control" name="TrangThai" value="<?=$n->TrangThai ?>">
			</div>
			<div class="form-group col-md-4">
				<button type="submit" class="btn btn-primary btn-block">Cập nhật</button>
			</div>
		</form>
		
	</div>
</body>
</html>