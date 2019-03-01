<?php 
	include "database.php";
 ?>
  <table style="width:100%" border="1">
		<thead>
		    <tr>
		    	<h2>Nhà xuất bản</h2>
		      	<th>Mã NXB</th>
		      	<th>Tên NXB</th>
		      	<th>Thể loại</th>
		      	<th>Lĩnh vực</th>
		      	<th>Năm XB</th>
		    </tr>
		</thead>
		<?php
		$db = new Database();
			$data = $db->getArray('nxb');
			foreach ($data as $value) {
		?>
			<tbody>
		    	<tr>
					<th><?php echo $value['MaNXB']; ?></th>
			      	<td><?php echo $value['TenNXB']; ?></td>
			      	<td><?php echo $value['TheLoai']; ?></td>
			      	<td><?php echo $value['LinhVuc']; ?></td>
			      	<td><?php echo $value['NamXB']; ?></td>
		    	</tr>
		  	</tbody>
		<?php 
			} 
		?>