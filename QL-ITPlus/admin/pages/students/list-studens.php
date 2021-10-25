<?php
	$students = getAllStudents();
?>
<h4>DANH SÁCH HỌC VIÊN IT-PLUS</h4>
<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>STT</th>
				<th>Tên</th>
				<th>Khoa</th>
				<th>Số điện thoại</th>
				<th>Email</th>
				<th>Address</th>
			</tr>
		</thead>
		<tbody>
			<!-- <?php
				$stt = 0;
				foreach ($students as $item)
				{ 
					$stt+=1;
			?>
			<tr>
				<td><?php echo $stt ?></td>
				<td><?php echo $item['name'] ?></td>
				<td><?php echo $item['title'] ?></td>
				<td><?php echo $item['phone'] ?></td>
				<td><?php echo $item['email'] ?></td>
				<td><?php echo $item['address'] ?></td>
				<td>
					<a href="index.php?page=update-students">
						<button class="btn btn-primary">Sửa</button>
					</a>
					<a href="#">
						<button class="btn btn-danger">Xóa</button>
					</a>
				</td>
			</tr>
			<?php
				}
			?> -->
		</tbody>
	</table>
</div>