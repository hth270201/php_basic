<?php
    session_start();
	include_once 'config/myConnect.php';
?>
<!DOCTYPE html>
<html lang="">
	<?php include_once "layout/header.php"; ?>
	<body>

		<div class="container">
			
			<div class="row" style="margin-top: 150px;">
				<div class="col-md-6 col-md-push-3">
					<!-- Hiển thị nội dung -->
					
					<?php  
						$page = 'login';
						if (isset($_GET['page'])) {
							$page = $_GET['page'];
						}

						switch ($page) {
							case 'login':
								include_once 'pages/login.php';
								break;

							case 'register':
								include_once 'pages/register.php';
								break;
							
							default:
								echo "<h1 style='color: red;'>404 not found. <a href='index.php'>Back to home!</a></h1>";
								break;
						}
					?>
					

				</div>
			</div>

		</div>

		<?php include_once 'layout/script.php'; ?>
	</body>
</html>