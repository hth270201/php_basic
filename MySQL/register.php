<?php
        $conn = mysqli_connect( '127.0.0.1', 'root', '', 'shop_fashion'); //ket noi CSDL
        $sql = 'SELECT * FROM users'; // tao cau lenh truy van
        $query = mysqli_query( $conn, $sql);
        session_start();
?>
<html>
	<head>
		<title>Form đăng ký</title>
	</head>
	<body>
    <form action="#" method="post">
		<table>
			<tr>
				<td>Form Đăng Ký</td>
			</tr>
			<tr>
				<td>Name :</td>
				<td><input type="text" id="name" name="name"></td>
			</tr>
			<tr>
				<td>Phone :</td>
				<td><input type="text" id="phone" name="phone"></td>
			</tr>
			<tr>
				<td>Email :</td>
				<td><input type="text" id="email" name="email"></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="text" id="password" name="password"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Đăng Ký"></td>
			</tr>

		</table>

	</form>
		<?php
		if (isset($_POST["submit"])) {
  			//lấy thông tin từ các form bằng phương thức POST
              $name       = ($_POST['name']);
              $phone      = ($_POST['phone']);
              $email      = ($_POST['email']);
              $password   = ($_POST['passw']);
  			//Kiểm tra điều kiện bắt buộc không được bỏ trống
              
			  if ($name == "" || $phone == "" || $email == "" || $password == "") {
				   echo "Vui lòng nhập đầy đủ thông tin";
  			}else{
  					// Kiểm tra tài khoản đã tồn tại chưa
  					$sql="SELECT * FROM users WHERE name='$name'";
					$kt=mysqli_query($conn, $sql);

					if(mysqli_num_rows($kt)  > 0){
						echo "Tài khoản đã tồn tại";
					}else{
	    				$sql = "INSERT INTO users( name, phone, email, passw)
                        VALUES ('$name','$phone','$email','$password')";
   						query = mysqli_query($conn,$sql);
				   		echo "Đăng ký thành công";

					}
			  }
	}
	?>
	</body>
	</html>