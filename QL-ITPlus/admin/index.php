<?php
    session_start();
	
	// if (isset($_SESSION['id_admin']))
	// {
	// 	header("Location:index.php");
	// }
	
	include_once '../config/myConnect.php';
	 include_once 'functions/myFunction.php';

?> 
<!DOCTYPE html>
<html lang="">
	<?php include_once 'layout/header.php'; ?>
	<body>
		
		<div class="container">
			<?php include_once 'layout/nav.php'; ?>

			<!-- Start Banner website -->
			<?php include_once 'layout/slides.php'; ?>
			<!-- End banner website -->

			<!-- Start main -->
			<div class="row main_member">
				<div class="col-md-12">
					<?php include_once 'layout/sidebar.php'; ?>
					
					
					<div class="col-md-9 col-sm-9 col-xs-12">
					<!-- START Nội dung thân website -->
						
					<?php  
						$page = 'list-studens';
						if (isset($_GET['page'])) {
							$page = $_GET['page'];
						}

						if (file_exists('pages/students/'.$page.'.php')) {
							include_once 'pages/students/'.$page.'.php';
						}else{
							echo "<h1 style='color: red;'>404 not found. <a href='index.php'>Back to home!</a></h1>";
						}
					?>	

					<!-- START Nội dung thân website -->
					</div>
				</div>
			</div>
			<!-- End main -->
		</div>

		<div class="container-fluid">
			<!-- Start Footer -->
			<?php include_once 'layout/footer.php'; ?>
			<!-- End Footer -->
		</div>

		<script src="../js/jquery.js"></script>
		<script src="../js/bootstrap.min.js"></script>
	</body>
</html>