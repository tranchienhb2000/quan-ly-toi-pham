<?php
$db = mysqli_connect('localhost','root','','ql_toipham');
if(!$db){
    echo "Lỗi";
}else{
 $masotoipham=$_POST['masotoipham'];
 $hoten=$_POST['hoten'];
 $gioitinh=$_POST['gioitinh'];
 $namsinh=$_POST['namsinh'];
 $nguyenquan=$_POST['nguyenquan'];
 $diachitt=$_POST['diachitt'];
 $phamtoi=$_POST['phamtoi'];
 $diachigayan=$_POST['diachigayan'];
 
 $sql_them="Insert into t_toipham values(
	 '".$masotoipham."',
 '".$hoten."',
 '".$gioitinh."',
 '".$namsinh."',
 '".$nguyenquan."',
 '".$diachitt."',
 '".$phamtoi."',
 '".$diachigayan."'
)";
mysqli_query($db,$sql_them);
header('location:listToiPham.php');
}
?>
