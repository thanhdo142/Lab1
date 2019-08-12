<?php 
session_start();
if(!isset($_SESSION['username'])){
	header('Location:dangnhap.php');
// }else{
// 	echo "Welcome";
}

if ($_SESSION['check']=="a") {
	$data=[];
	$product1 = new stdClass;
	$product1->stt="1";
	$product1->TenSP="Tivi";
	$product1->GiaSP="10000000";
	$product1->SoLuong="5";
	$product1->NgayTao=20181024;
	$product1->TrangThai="1";
	$data[]=$product1;

	$product2 = new stdClass;
	$product2->stt="2";
	$product2->TenSP="Tủ Lạnh A1";
	$product2->GiaSP="8000000";
	$product2->SoLuong="7";
	$product2->NgayTao=20190215;
	$product2->TrangThai="0";
	$data[]=$product2;

	$_SESSION['data']=$data;

	$_SESSION['check']="b";
}
$data=$_SESSION['data'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Trang chủ</title>
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
					<th scope="col">...</th>
					<th scope="col">Tác Vụ</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$i=1;
				foreach ($data as $row) {
					echo '<tr>';
					echo '<td>'.($i++).'</td>';
					echo '<td>'.$row->TenSP.'</td>';
					echo '<td>'.number_format($row->GiaSP).'</td>';
					echo '<td> <a href="chitiet.php?stt='.$row->stt.'">...</a></td>';
					echo '<td> <a href="sua.php?stt='.$row->stt.'">sửa</a> | <a href="xoa.php?stt='.$row->stt.'">xóa</a></td>';
					echo '</tr>';

				}
				?>
				<div class="btn-group btn-group-lg">
					<button type="button" class="btn btn-primary"> Sắp xếp theo tên </button>
					<button type="button" class="btn btn-success"> Sắp xếp theo giá </button>
					<button type="button" class="btn btn-primary"> Tìm kiếm theo ngày </button>
					<button type="button" class="btn btn-success">	Tìm kiếm theo tên  </button>
				</div>
			</tbody>

		</table>
	</div>
</body>
</html>
