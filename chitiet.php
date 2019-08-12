<?php  
session_start();
if (!isset($_SESSION['username'])|| !isset($_SESSION['data'])) {
	header('Location:dangnhap.php');
}else{
	$data=$_SESSION['data'];

}
if (isset($_GET['stt'])) {
	$stt=$_GET['stt'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chi tiết</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="Demo project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	<style type="text/css"></style>
</head>
<body>
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">STT</th>
					<th scope="col">Tên SP</th>
					<th scope="col">Giá SP</th>
					<th scope="col">Số Lượng</th>
					<th scope="col">Ngày Tạo</th>
					<th scope="col">Trạng Thái</th>
				</tr>
			</thead>
			<tbody>
				<?php 

				foreach ($data as $row ) {
					if($row->stt==$stt){
						echo '<tr>';
						echo '<td>'.$row->stt.'</td>';
						echo '<td>'.$row->TenSP.'</td>';
						echo '<td>'.number_format($row->GiaSP).'</td>';
						echo '<td>'.$row->SoLuong.'</td>';
						echo '<td>'.ngaythang($row->NgayTao).'</td>';
						echo '<td>'.$row->TrangThai.'</td>';
					}

				}
				function ngaythang($date){
					$dateStr=$date."";
					$nam= substr($dateStr, 0,4);
					$thang=substr($date, 4,2);
					$ngay=substr($date, 6,2);
					$thoigian=$ngay."/".$thang."/".$nam;
					return $thoigian;
				}
				
				?>
				
			</tbody>
		</table>
	</div>
</body>
</html>