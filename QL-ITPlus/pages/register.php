<?php
	if (isset($_POST['sm_register'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$password = $_POST['passw'];
		$address = $_POST['address'];
		$sql = "INSERT INTO users (name, email, phone, passw, address) 
		VALUES ('$name', '$email', '$phone', '$password', '$address')";
		$query = mysqli_query($conn,$sql);
		echo 'Đăng ký thành công';
	}

?>
<form action="" method="POST">
	<legend>Đăng ký tài khoản</legend>

	<div class="form-group">
		<label for="">Họ tên <span style="color: red;">(*)</span></label>
		<input type="text" required name="name" class="form-control" value="" placeholder="Nhập họ tên của bạn">
	</div>

	<div class="form-group">
		<label for="">Tài khoản (Email) <span style="color: red;">(*)</span></label>
		<input type="email" required name="email" class="form-control" value="" placeholder="Nhập email của bạn">
	</div>

	<div class="form-group">
		<label for="">Số điện thoại <span style="color: red;">(*)</span></label>
		<input type="number" required name="phone" class="form-control" placeholder="*******">
	</div>

	<div class="form-group">
		<label for="">Mật khẩu <span style="color: red;">(*)</span></label>
		<input type="password" required name="passw" class="form-control" placeholder="******">
	</div>

	<div class="form-group">
		<label for="">Địa chỉ <span style="color: red;">(*)</span></label>
		<input type="text" required name="address" class="form-control" placeholder="******">
	</div>

	<button type="submit" name="sm_register" class="btn btn-danger">Đăng ký </button>
	<span>Bạn đã có tài khoản <a href="index.php">Đăng nhập</a></span>

</form>