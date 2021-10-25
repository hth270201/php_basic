<?php
    $conn = mysqli_connect( '127.0.0.1', 'root', '', 'shop_fashion'); //ket noi CSDL
    $sql = 'SELECT * FROM users'; // tao cau lenh truy van
    $query = mysqli_query( $conn, $sql);
    session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <form action="#" method='POST'>
          <label for="email">Email</label>
          <input type= "text" name = "email">
          <br>
          <label for="password">Password</label>
          <input type= "text" name = "password">
          </br>
          <button type="submit" name = "submit">Login</button>
          <?php
          $check = 0;
          if(isset($_POST["submit"])){
            while ($data = mysqli_fetch_assoc($query)) {
                if($_POST["email"]== $data["email"] && $_POST["password"]==$data["passw"]){
                   $check = 1;
                   $_SESSION ["name"] = $data ["name"];
                }
            }
            }
            if($check == 1){
                //echo "Đăng nhập thành công";
                header("Location: h.php");
            }
            else {
                echo "Đăng nhập thất bại";
            }
          ?>


      </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>