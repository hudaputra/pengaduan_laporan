<?php 
session_start();
session_destroy();

include 'koneksi.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Halaman Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="style/bootstrap.min.css" />
	<link href="assets/css/bootstrap.css" rel="stylesheet" />
	<!-- FONT AWESOME ICONS  -->
	<link href="assets/css/font-awesome.css" rel="stylesheet" />
	<!-- CUSTOM STYLE  -->
	<link href="assets/css/style.css" rel="stylesheet" />
	<!--===============================================================================================-->
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<style type="text/css">
		.wrap-login100 {
			width: 500px;
			height: wrap content;
			background: #fff;
			border-radius: 10px;
			overflow: hidden;
			padding: 90px 55px 100px 55px;

			box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
			-moz-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
			-webkit-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
			-o-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
			-ms-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
		}

		.wrap-form-btn {
			width: 100%;
			height: 30%;
			display: block;
			position: relative;
			z-index: 1;
			border-radius: 25px;
			overflow: hidden;
			margin: 0 auto;
		}

		footer {
			padding: 13px;
			color: #fff;
			font-size: 12px;
			background-color: #2980b9;
		}
	</style>
</head>

<body>


	<?php
	if (isset($_GET['pesan'])) {
		if ($_GET['pesan'] == "gagal") {
			echo "<div class='alert-danger text-center fade show p-b-35'>
		<b>Username dan Password yang dimasukkan tidak Diketahui ! Mungkin Belum Memiliki Akun</b></div>";
		} else if ($_GET['pesan'] == "sukses") {
			echo "<div class='alert-success padding text-center p-b-35'><b>Anda Berhasil Mendaftar, Silahkan Login dulu</b></div>";
		}
	}
	?>

	<script>
		window.setTimeout(function() {
			$(".alert-danger").slideUp(800, function() {
				$(this).remove();
			});
		}, 6000);
		window.setTimeout(function() {
			$(".alert-success").fadeTo(100, 100).slideUp(500, function() {
				$(this).remove();
			});
		}, 6000);
	</script>



	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">


				<span class="login100-form-title p-b-60">
					<img src="images/lapor-tegalsari.png" width="47%">
				</span>
				<form action="ceklogin.php" method="POST" class="login100-form validate-form">
					<div class="wrap-input100 validate-input" data-validate="Masukkan Username">
						<input class="input100" type="text" name="username">
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Masukkan password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="Submit">
								Login
							</button>
						</div>
					</div>
				</form>
				<div class="text-center p-t-20">
					<span class="txt1">
						Belum Punya Akun?
					</span>

					<a class="txt2" href="register.php">
						<b>Daftar</b>
					</a>
					<span class="txt1">
						dulu
					</span>

				</div>
				</form>

			</div>
		</div>
	</div>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					&copy; LAPOR! TEGALSARI &nbsp;|&nbsp; By : <a href="http://www.gmail.com/hudaputrasantosa" target="_blank">Huda Putra Santosa</a>
				</div>

			</div>
		</div>
	</footer>

	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script src="style/jquery.min.js"></script>

</body>

</html>