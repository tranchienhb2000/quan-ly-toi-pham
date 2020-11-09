<!DOCTYPE html>
<html>

<head>
   <title>Xóa tội phạm</title>
</head>

<body>
   <?php
	$masotoipham = $_REQUEST['masotoipham'];
	//kết nối
	$db = mysqli_connect('localhost', 'root', '', 'ql_toipham');
	if (!$db) {
		echo "Lỗi kết nối";
	} else {
		//Câu lệnh SQL dạng Del...=> thực thi => ok"
		$sql_del = "delete from t_toipham where masotoipham='" . $masotoipham . "'";
		mysqli_query($db, $sql_del);
		header('location:listToiPham.php');
	}
	?>
</body>

</html>