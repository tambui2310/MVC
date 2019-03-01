<?php 
	include "database.php";
 ?>
	</table>
	   <table style="width:100%" border="1">
		<thead>
		    <tr>
		    	<h2>Sách</h2> 
		    	<th>Mã Sách</th>   	
		      	<th>Tên Sách</th>
		      	<th>Năm xuất bản</th>
		      	<th>Thể loại</th>
		      	<th>Mã NXB</th>
		    </tr>
		</thead>
		<?php
		$db = new Database();
		$data = $db->getArray('sach');
		foreach ($data as $value) {
		?>
			<tbody>
		    	<tr>
					<th><?php echo $value['MaSach']; ?></th>
			      	<td><?php echo $value['TenSach']; ?></td>
			      	<td><?php echo $value['NamXB']; ?></td>
			      	<td><?php echo $value['TheLoai']; ?></td>
			      	<td><?php echo $value['MaNXB']; ?></td>
		    	</tr>
		  	</tbody>
		<?php 
			} 
		?>
	</table>
