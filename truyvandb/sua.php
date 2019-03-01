<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<form method="post">
		<table>
			<tr>
				<th>Mã sinh viên</th>
				<th>Họ Tên</th>
				<th>Ngày sinh</th>
				<th>Giới tính</th>
			</tr>
			<tr>
				<?php
				include "database.php"; 
				$db = new Database();
				$data = $db->getArray('sinhvien');
					foreach ($data as $value) {
					} 
				?>
				<td>
					 <input type="text" name="id" placeholder="Nhập mã sinh viên" value="<?php echo $value['id']; ?>">
				</td>
				<td>
					  <input type="text" name="hoTen" placeholder="Họ tên" value="<?php echo $value['HoTenSV']; ?>">
				</td>
				<td>
					<input type="text" name="ngaySinh" placeholder="yyyy-m-d" value="<?php echo $value['NgaySinh']; ?>">
				</td>
				<td>
					<input type="text" name="gioiTinh" placeholder="Giới tính" value="<?php echo $value['GioiTinh']; ?>">
				</td>
			</tr>
		</table>
		<input type="submit" name="submit" value="Add"><br>
		<a href="sinhvien.php">Quay lại</a>
	</form>
</body>
</html>
<?php 
include 'database.php';
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		$masv = $_POST["id"];
		$ten = $_POST["hoTen"];
		$birthday = $_POST["ngaySinh"];
		$age = $_POST["gioiTinh"];
	
	$data = array('id' => $masv,
				'HoTenSV' => $ten,
				'NgaySinh' => $birthday,
				'GioiTinh' => $age);
	$db->update('sinhvien', $data,'id' );
	echo "Thêm thành công";
}
 ?>