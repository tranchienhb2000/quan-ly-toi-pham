<!DOCTYPE html>
<html>

<head>
   <title>Sửa thông tin tội phạm</title>
</head>

<body>
   <?php
   //đọc dữ liệu
   $masotoipham = $_REQUEST['masotoipham'];
   //Connected
   $db = mysqli_connect('localhost', 'root', '', 'ql_toipham');
   if (!$db) {
      echo "Lỗi kết nối";
   } else {
      $sql_read = "select * from t_toipham where masotoipham='" . $masotoipham . "'";
      $kq = mysqli_query($db, $sql_read);
      if (mysqli_num_rows($kq) > 0) {
         while ($r = mysqli_fetch_array($kq)) {
            $masotoipham = $r['masotoipham'];
            $hoten = $r['hoten'];
            $gioitinh = $r['gioitinh'];
            $namsinh = $r['namsinh'];
            $nguyenquan = $r['nguyenquan'];
            $diachitt = $r['diachitt'];
            $phamtoi = $r['phamtoi'];
            $diachigayan = $r['diachigayan'];
         }
      }
   }
   ?>
   <form name="" action="updateToiPham.php" method="POST">
      <center>
         <h2 >CẬP NHẬT THÔNG TIN TỘI PHẠM</h2>
         <table border="0" cellpadding="0" cellspacing="1" width="50%" height="350px">
            <tr>
               <td>Mã số tội phạm</td>
               <td><input type="Text" name="masotoipham" size="20" readonly value="<?php echo $masotoipham; ?>">
                <font color="red" required><i> (*)</i></font>
               </td>
            </tr>
            <tr>
               <td>Họ và tên</td>
               <td><input type="Text" name="hoten" size="30" value="<?php echo $hoten; ?>">
                <font color="red" required><i> (*)</i></font>
                </td>
            </tr>
            <tr>
               <td>Giới tính</td>
               <td><input type="radio" name="gioitinh" value="nam" <?php if ($gioitinh == 'nam') {
                                                                        echo 'checked="checked"';
                                                                     } ?>>Nam &nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="gioitinh" value="nu" <?php if ($gioitinh == 'nu') {
                                                                     echo 'checked="checked"';
                                                                  } ?>>Nữ
               </td>
            </tr>
            <tr>
               <td>Năm sinh</td>
               <td><input type="date" name="namsinh" size="20" value="<?php echo $namsinh; ?>">
               </td>
            </tr>
            <tr>
               <td>Nguyên quán</td>
               <td>
                  <textarea name="nguyenquan" cols="40" rows="2">
						<?php echo $nguyenquan; ?>
					</textarea>
               </td>
            </tr>
            <tr>
               <td>Địa chỉ thường trú</td>
               <td><input type="text" name="diachitt" size="40" value="<?php echo $diachitt; ?>"></td>
            </tr>
            <tr>
               <td>Phạm tội</td>
               <td><input type="text" name="phamtoi" size="15" value="<?php echo $phamtoi; ?>"></td>
            </tr>
            <tr>
               <td>Địa chỉ gây án</td>
               <td><input type="text" name="diachigayan" size="30" value="<?php echo $diachigayan; ?>"></td>
            </tr>
            <tr align="center">
               <td colspan="2"><input type="Submit" name="" value="Cập nhật"></td>
            </tr>
         </table>
      </center>

   </form>

</body>

</html>