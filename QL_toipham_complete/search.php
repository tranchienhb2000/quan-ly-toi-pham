<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Thông tin chủ tội phạm</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php 
        $queryPara=$_REQUEST['search'];
		$db=mysqli_connect('localhost','root','','ql_toipham');
		if(!$db)
		{
			echo "Error 404";
		}
		else
		{
			$sql_querySelect="select * from t_toipham where masotoipham='".$queryPara."'";
			$value = mysqli_query($db,$sql_querySelect);
			if(mysqli_num_rows($value)>0)
			{
				while($row=mysqli_fetch_array($value))
				{
					$masotoipham = $row['masotoipham'];
                    $hoten = $row['hoten'];
                    $gioitinh = $row['gioitinh'];			
                    $namsinh = $row['namsinh'];
                    $nguyenquan = $row['nguyenquan'];
                    $diachitt = $row['diachitt'];
                    $phamtoi = $row['phamtoi'];
                    $diachigayan = $row['diachigayan'];
				}
            }
            if($gioitinh = 'nam'){
                $gioitinh = 'Nam';
            } else 
            if($gioitinh = 'nu'){
                $gioitinh = 'Nữ';
            }
            echo "<h1>Thông tin tội phạm </h1>";
            echo "<span>Mã số tội phạm: </span>".$masotoipham."<br />";
            echo "<span>Họ tên tội phạm: </span>".$hoten."<br />";
            echo "<span>Giới tính: </span>".$gioitinh."<br />";
            echo "<span>Năm sinh: </span>".$namsinh."<br />";
            echo "<span>Nguyên quán: </span>".$nguyenquan."<br />";
            echo "<span>Địa chỉ thương trú: </span>".$diachitt."<br />";
            echo "<span>Phạm tội: </span>".$phamtoi."<br />";
            echo "<span>Địa chỉ gây án: </span>".$diachigayan."<br />";
        }
        
        ?>
    </body>
</html>