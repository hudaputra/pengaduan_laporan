<?php 
include 'koneksi.php';
session_start();

if (!isset($_SESSION['password'])) {
	header("location:index.php");
	exit;
}
$nik = $_GET['nik'];
$query = mysqli_query($konek, "SELECT * FROM masyarakat WHERE nik = '$nik' ");
while ($data = mysqli_fetch_array($query)) {

?>
	<!DOCTYPE html>
	<html>

	<head>
		<title>Edit Profil Masyarakat</title>
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
		<!-- FONT AWESOME ICONS  -->
		<link href="assets/css/font-awesome.css" rel="stylesheet" />
		<!-- CUSTOM STYLE  -->
		<link href="assets/css/style.css" rel="stylesheet" />
		<!--===============================================================================================-->
		<style type="text/css">
			.wrap-login100 {
				width: 650px;
				height: wrap content;
				background: #fff;
				border-radius: 10px;
				overflow: hidden;
				padding: 50px 50px 30px 50px;

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

			table {
				position: relative;
				text-align: center;
				padding: 10px 10px 10px 10px;

			}

			th {
				position: relative;
				text-align: center;
			}



			h1 {
				text-transform: uppercase;
				color: salmon;
			}

			label {
				margin-top: 10px;
				float: left;
				text-align: left;
				width: 100%;
			}


			div {
				width: 100%;
				height: auto;
			}

			.base {
				width: 400px;
				height: auto;
				padding: 20px;
				margin-left: auto;
				margin-right: auto;
				background: #ededed;
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

		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100">

					<span class="login100-form-title p-b-48">
						<a href="halaman_masyarakat.php"><img src="images/lapor-tegalsari.png" width="150px"></a>
					</span>
					<span class="login100-form-title">
						Ubah Profil
					</span><br>
					<button class="btn btn-primary" onclick="history.back()">Kembali</button>
					<form class="login100-form validate-form" action="updateprofilmas.php?nik=<?php echo $data['nik']; ?>" enctype="multipart/form-data" method="POST">

						<div class="form-group">
							<label>NIK</label>
							<input class="form-control" type="number" name="nik" value="<?php echo $data['nik']; ?>">
						</div>

						<div class="form-group">
							<label>Nama Lengkap</label>
							<input class="form-control" type="text" name="nama" value="<?php echo $data['nama']; ?>">

						</div>

						<div class="form-group">
							<label>Tempat Lahir</label>
							<input class="form-control" type="text" name="tempat" value="<?php echo $data['tempat_lahir'] ?>" required="">
						</div>

						<div class="form-group">
							<label>Tanggal Lahir</label>
							<input type="date" name="tanggal" class="form-control" value="<?php echo $data['tgl_lahir'] ?>" required="">
						</div>

						<div class="form-group">
							<label>Jenis Kelamin</label>
							<input type="radio" name="jenis_kel" value="laki laki" <?php if ($data['jenis_kel'] == 'laki laki')  echo 'checked'; ?>> Laki Laki &nbsp;
							<input type="radio" name="jenis_kel" value="perempuan" <?php if ($data['jenis_kel'] == 'perempuan')  echo 'checked'; ?>> Perempuan
						</div>

						<div class="form-group">
							<label>Username</label>
							<input class="form-control" type="text" readonly required="" name="username" value="<?php echo $data['username']; ?>">

						</div>
						<div class="form-group">
							<label>Password</label>
							<input class="form-control" type="password" readonly required="" name="password" value="<?php echo $data['password']; ?>">
						</div>
						<p>Ingin Mengganti Username dan Password? <a href="">Klik disini</a></p>
						<div class="form-group">
							<label>Telepon</label>
							<input class="form-control" type="number" required="" name="telepon" value="<?php echo $data['telepon']; ?>">
						</div>

						<div class="form-group">
							<label>Alamat</label>
							<textarea class="form-control" rows="4" required="" name="alamat"><?php echo $data['alamat']; ?></textarea>
						</div>

						<div>
							<label>Foto Profil</label>
							<input type="hidden" name="fot" value="<?php $data['foto']; ?>">

							<img src="images/profil/<?php if ($data['foto'] == null) {
																echo 'default-image.jpg';
															} else {
																echo $data['foto'];
															}  ?>" style="width: 120px;float: left;margin-bottom: 5px;"><br>
							<br><br><br><br><br>
							<p><?php if ($data['foto'] == null) {
									echo 'default-image.jpg';
								} else {
									echo $data['foto'];
								}  ?></p>
							<input type="file" name="foprof" />
							<i style="float: left;font-size: 13px;color: red">Abaikan jika tidak mengubah Foto profil</i>
						</div><br>


						<div class="container-login100-form-btn">
							<div class="wrap-form-btn">
								<div class="login100-form-bgbtn"></div>
								<button type="submit" name="update" class="login100-form-btn">Simpan</button>

							</div>
						</div>
						<div class="container-login100-form-btn">
							<div class="wrap-form-btn">
								<div class="login100-form-bgbtn"></div>
								<button class="login100-form-btn" type="Reset" class="text">
									Reset
								</button>


					</form>
				</div>
			</div>
		</div>




		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery-3.3.1.min"></script>
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
		<script src="assets/js/jquery-1.11.1.js"></script>
		<!-- BOOTSTRAP SCRIPTS  -->
		<script src="assets/js/bootstrap.js"></script>


	<?php } ?>
	</body>

	</html>