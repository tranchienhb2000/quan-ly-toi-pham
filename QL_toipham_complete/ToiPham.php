<!DOCTYPE html>
<html>

<head>
   <title>Thông tin tội phạm</title>
   <meta charset="utf-8">
</head>

<body>
   <form name="fToiPham" action="addToiPham.php" method="POST">
      <center>
         <h2>NHẬP THÔNG TIN TỘI PHẠM</h2>
         <table border="1">
            <tr>
               <td>Mã số tội phạm<main></main></td>
               <td><input type="text" name="masotoipham" size="20">
                  <font color="red" required><i> (*)</i></font>
               </td>
            </tr>
            <tr>
               <td>Họ tên tội phạm</td>
               <td><input type="text" name="hoten" size="20">
                  <font color="red" required><i> (*)</i></font>
               </td>
            </tr>
            <tr>
               <td>Giới tính</td>
               <td><input type="Radio" name="gioitinh" value="nam" />Nam<input type="Radio" name="gioitinh" value="nu">Nữ</td>
            </tr>
            <tr>
               <td> Năm sinh</td>
               <td><input type="date" name="namsinh" size="20">
               </td>
            </tr>
            <tr>
               <td>Nguyên quán</td>
               <td><input type="text" name="nguyenquan"></td>
            </tr>
            <tr>
               <td>Địa chỉ thường trú</td>
               <td><input type="text" name="diachitt"></td>
            </tr>
            <tr>
               <td>Phạm tội</td>
               <td><input type="text" name="phamtoi"></td>
            </tr>
            <tr>
               <td>Địa chỉ gây án</td>
               <td><textarea rows="3" cols="30" name="diachigayan"></textarea></td>
            </tr>
            <tr>
               <td rowspan="1" colspan="2">
                  <center>
                     <input type="submit" name="Nhap" value= "Nhập"> &nbsp&nbsp&nbsp&nbsp <input type="reset" name="Nhaplai">
                  </center>
               </td>
            </tr>
         </table>
      </center>
   </form>
   <div align="center">
      <form action="search.php" method="get">
            Search: <input type="text" name="search" />
            <input type="submit" name="ok" value="search" />
      </form>
   </div>

</body>

</html>