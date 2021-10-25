<?php  
    
    if (isset($_POST['sm_login']))
    {
        
        $user = $_POST['user'];
        $passw =$_POST['passw'];
        $sql = "SELECT*FROM users where email = '$user' and passw ='$passw'";
        $query = mysqli_query($conn,$sql);
        $nums = mysqli_num_rows($query);
        $data = mysqli_fetch_assoc($query);

        if ($nums == 1)
        {
            $_SESSION['id_admin'] = $data['id'];
            $_SESSION['name_admin'] = $data['name'];
            header("Location: admin/index.php");
        }
        else
        {
            echo "Tài khoản đăng nhập không đúng!";
        }

    }
?>

<form action="" method="POST">
	<legend>Đăng nhập hệ thống</legend>

	<div class="form-group">
		<label for="">Username</label>
		<input type="email" required name="user" class="form-control" value="" placeholder="Nhập email của bạn">
	</div>

	<div class="form-group">
		<label for="">Password</label>
		<input type="password" required name="passw" class="form-control" value="" placeholder="Nhập pass">
	</div>

	<button type="submit" name="sm_login" class="btn btn-primary">Đăng nhập</button>
	<span>Nếu bạn chưa có tài khoản? <a href="index.php?page=register" style="color: red;">Đăng ký</a></span>

</form>