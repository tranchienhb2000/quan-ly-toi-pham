<!DOCTYPE html>
<html>

<head>
   <title>Danh sách thông tin tội phạm</title>
   <meta charset="utf-8">
</head>
<body>
   <center>
      <h2>DANH SÁCH TỘI PHẠM</h2>
      <table border="1" width="80%">
         <tr>
            <th>Mã số tội phạm</th>
            <th>Họ tên tội phạm</th>	
            <th>Giới tính</th>
            <th>Năm sinh</th>
            <th>Nguyên quán</th>
            <th>Địa chỉ thường trú</th>
            <th>Phạm tội</th>
            <th>Địa chỉ gây án</th>
            <th colspan="2">Thao tác <br />
               <a href="ToiPham.php"> Add new</a>
            </th>
         </tr>
         <?php
			//đọc dữ liệu
			//kết nối
			$db = mysqli_connect('localhost', 'root', '', 'ql_toipham');
			if (!$db) {
				echo "Lỗi kết nối";
			} else {
				$sql_hienThi = "select * from t_toipham";
				$kq = mysqli_query($db, $sql_hienThi);
				//trình bày dữ liệu
				if (mysqli_num_rows($kq) > 0) {
					$i = 0;
					while ($r = mysqli_fetch_array($kq)) {
						$i++;
						echo "<tr>";
						$masotoipham = $r['masotoipham'];
						echo "<td>" . $r['masotoipham'] . "</td>";
						echo "<td>" . $r['hoten'] . "</td>";
						echo "<td>" . $r['gioitinh'] . "</td>";
						echo "<td>" . $r['namsinh'] . "</td>";
						echo "<td>" . $r['nguyenquan'] . "</td>";
						echo "<td>" . $r['diachitt']	 . "</td>";
						echo "<td>" . $r['phamtoi'] . "</td>";
						echo "<td>" . $r['diachigayan'] . "</td>";
						echo "<td><a href = 'editToiPham.php?masotoipham=$masotoipham'>Edit</td>";
						echo "<td><a href = 'delToiPham.php?masotoipham=$masotoipham'>Delete</a></td>";
						echo "</tr>";
					}
				}
			}
			?>
      </table>
   </center>

</body>

</html>