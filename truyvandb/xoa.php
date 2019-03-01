<?php 
	include 'database.php';
	$id = intval($_GET['id']);
	$db = new Database();
	if($db->delete('sinhvien', $id)){
	    echo 'Xóa thành công';
	}else {
	    echo "Lỗi: " .$db->error();
	}
 ?>
 <br>
 <a href="sinhvien.php">Quay lại </a>