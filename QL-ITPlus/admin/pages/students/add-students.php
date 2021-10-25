<!-- START Thêm thành viên mới -->
<form action="" method="POST" role="form">
	<legend>Thêm mới học viên</legend>

	<div class="form-group">
		<label for="">Họ tên<span style="color: red;">*</span></label>
		<input type="text" required class="form-control" name="name" placeholder="Họ tên học viên...">
	</div>

	<div class="form-group">
		<label for="">Khoa<span style="color: red;">*</span></label>
		<select name="faculty">
			<option value="1">Công nghệ thông tin</option>
			<option value="2">Thiết kế đồ họa</option>
			<option value="3">Kế toán kiểm toán</option>
		</select>
	</div>

	<div class="form-group">
		<label for="">Số điện thoại<span style="color: red;">*</span></label>
		<input type="number" required class="form-control" name="phone" placeholder="098569789">
	</div>

	<div class="form-group">
		<label for="">Email</label>
		<input type="email" class="form-control" name="email" placeholder="it-plus@gmail.com">
	</div>

	<div class="form-group">
		<label for="">Địa chỉ<span style="color: red;">*</span></label>
		<input type="text" required class="form-control" name="address" placeholder="Địa chỉ học viên...">
	</div>

	<button type="submit" name="add_member" class="btn btn-primary">Thêm mới</button>
</form>


	<!-- add lên database -->
	<?php
	if (isset($_POST['add_member'])) 
	{
		addStudent();
	}
	?>
<!-- END Thêm thành viên mới -->