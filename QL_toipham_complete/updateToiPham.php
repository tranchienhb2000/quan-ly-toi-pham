<!DOCTYPE html>
<html>

<head>
	<title>Cập nhật thông tin tội phạm</title>
	<meta charset="utf-8">
</head>

<body>
	<?php
	//kết nối
	$db = mysqli_connect('localhost', 'root', '', 'ql_toipham');
	if (!$db) {
		echo "Lỗi kết nối";
	} else {
		
		$masotoipham = $_POST['masotoipham'];
		$hoten = $_POST['hoten'];
		$gioitinh = $_POST['gioitinh'];
		$namsinh = $_POST['namsinh'];
		$nguyenquan = $_POST['nguyenquan'];
		$diachitt = $_POST['diachitt'];
		$phamtoi = $_POST['phamtoi'];
		$diachigayan = $_POST['diachigayan'];
				//Update dữ liệu vào database
				$sql_update="update t_toipham set masotoipham='".$masotoipham."', 
				hoten='".$hoten."',
				gioitinh='".$gioitinh."',
				namsinh='".$namsinh."',
				nguyenquan='".$nguyenquan."',
				diachitt='".$diachitt."',
				phamtoi='".$phamtoi."',
				diachigayan='".$diachigayan."' 
				where masotoipham='".$masotoipham."'";
				//Thực thi
		mysqli_query($db, $sql_update);
		header('location:listToiPham.php');
	}
	?>


</body>

</html>