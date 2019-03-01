<?php 
	include "database.php";
 ?>
  <table style="width:100%" border="1">
  	<a href="them.php">Thêm sinh viên</a>
		<thead>
		    <tr>
		    	<h2>Sinh Viên</h2>
		      	<th>Mã sinh viên</th>
		      	<th>Họ Tên</th>
		      	<th>Ngày sinh</th>
		      	<th>Giới tính</th>
		    </tr>
		</thead>
		<?php
		$db = new Database();
		$data = $db->getArray('sinhvien');
			foreach ($data as $value) {
		?>
			<tbody>
		    	<tr>
					<th><?php echo $value['id']; ?></th>
			      	<td><?php echo $value['HoTenSV']; ?></td>
			      	<td><?php echo $value['NgaySinh']; ?></td>
			      	<td><?php echo $value['GioiTinh']; ?></td>
   					<td><a href="sua.php">Sửa</a>
   					<a href="xoa.php?id=<?php echo $value['id']; ?>">Xóa</a></td>
		    	</tr>
		  	</tbody>

		<?php 
			} 
		?>
		</table>