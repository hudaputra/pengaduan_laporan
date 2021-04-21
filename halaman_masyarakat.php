<!-- <?php
		session_start();

		if (!isset($_SESSION["login"])) {
			header("location:index.php");
			exit;
		}

		include "koneksi.php";
		$user = $_SESSION['username'];
		$pass = $_SESSION['password'];
		?> -->
<!DOCTYPE html>
<html>

<head>
	<title>Lapor! Tegalsari</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->

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
	<link rel="stylesheet" href="style/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="assets/css/bootstrap.css" rel="stylesheet" />
	<!-- FONT AWESOME ICONS  -->
	<link href="assets/css/font-awesome.css" rel="stylesheet" />
	<!-- CUSTOM STYLE  -->
	<link href="assets/css/style.css" rel="stylesheet" />


	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript">
		window.setTimeout("waktu()", 1000);

		function waktu() {
			var tanggal = new Date();
			setTimeout("waktu()", 1000);
			document.getElementById('jam').innerHTML = tanggal.getHours();
			document.getElementById('menit').innerHTML = tanggal.getMinutes();
			document.getElementById('detik').innerHTML = tanggal.getSeconds();
		}
	</script>


	<style type="text/css">
		.wrap-login100 {
			width: 850px;
			height: wrap content;
			background: #fff;
			border-radius: 10px;
			overflow: hidden;
			padding: 45px 35px 50px 35px;
			box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
			-moz-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
			-webkit-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
			-o-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
			-ms-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
		}


		#hours {
			float: left;
			width: 28px;
			height: 50px;
		}

		#minute {
			float: left;
			width: 28px;
			height: 50px;
		}

		#second {
			float: left;
			width: 28px;
			height: 50px;
		}

		#jam-digital p {
			color: #fff;
			font-weight: bold;
			font-size: 16px;
			text-align: center;
			background: #3699d5;
		}

		.wrap-form-btn {
			width: 0%;
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

<body onload="waktu()">
	<?php
	date_default_timezone_set("Asia/Jakarta");
	$tgl = date("d F Y");
	function hari_ini()
	{
		$hari = date("D");

		switch ($hari) {
			case 'Sun':
				$hari_ini = "Minggu";
				break;

			case 'Mon':
				$hari_ini = "Senin";
				break;

			case 'Tue':
				$hari_ini = "Selasa";
				break;

			case 'Wed':
				$hari_ini = "Rabu";
				break;

			case 'Thu':
				$hari_ini = "Kamis";
				break;

			case 'Fri':
				$hari_ini = "Jumat";
				break;

			case 'Sat':
				$hari_ini = "Sabtu";
				break;

			default:
				$hari_ini = "Tidak di ketahui";
				break;
		}

		return "<b>" . $hari_ini . "</b>";
	}



	if (isset($_GET['pesan'])) {
		if ($_GET['pesan'] == 'sukses') {
			echo "<div class='alert-success text-center p-b-30'><b>Berhasil Login Sebagai Masyarakat</b></div>";
		} else if ($_GET['pesan'] == 'gagal') {
			echo "<div class='alert-danger text-center p-b-30'><b>Gagal Mengirim Laporan Pengaduan</b></div>";
		} else if ($_GET['pesan'] == 'suksess') {
			echo "<div class='alert-success text-center p-b-30'><b>Sukses Mengirim Laporan Pengaduan</b></div>";
		} else if ($_GET['pesan'] == 'suksesupdate') {
			echo "<div class='alert-info text-center p-b-30'><b>Berhasil Update Profil Anda</b></div>";
		} else if ($_GET['pesan'] == 'sukseshapus') {
			echo "<div class='alert-info text-center p-b-30'><b>Berhasil Hapus Data Pengaduan</b></div>";
		} else if ($_GET['pesan'] == 'sukseshapustang') {
			echo "<div class='alert-info text-center p-b-30'><b>Berhasil Hapus Data Tanggapan</b></div>";
		}
	}	?>

	<script>
		window.setTimeout(function() {
			$(".alert-danger").fadeTo(100, 100).slideUp(500, function() {
				$(this).remove();
			});
		}, 6000);
		window.setTimeout(function() {
			$(".alert-success").fadeTo(100, 100).slideUp(500, function() {
				$(this).remove();
			});
		}, 6000);
		window.setTimeout(function() {
			$(".alert-info").fadeTo(100, 100).slideUp(500, function() {
				$(this).remove();
			});
		}, 6000);
	</script>
	</script>

	<?php
	if ($_SESSION['password'] == "") {
		header("location:index.php?pesan=gagal");
	}
	$_SESSION['login'] = true;
	?>


	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<a href="halaman_petugas.php"><img src="images/lapor-tegalsari3.png" width="225px"></a><br>




				<?php
				$nik = mysqli_query($konek, "SELECT nik,nama FROM masyarakat WHERE username = '$user' AND password = '$pass' ");
				while ($datat = mysqli_fetch_array($nik)) {	 ?>
					<br>

					<a href="profil.php?nik=<?php echo $datat['nik']; ?>" class="n"><i class="fa fa-user"></i><b> Profil</b></a>&nbsp;&nbsp;|
					&nbsp;
					<a href="datapengaduanmas.php?nik=<?php echo $datat['nik']; ?>"><i class="fa fa-file"></i><b> Riwayat Data</b></a>&nbsp;&nbsp;|
					<a href="logout.php"><i class="fa fa-sign-out"></i><b> Keluar</b></a><br>
					<i class="fa fa-calendar"></i>&nbsp;<?php echo hari_ini() . ", " . date('d F Y') ?>

					<div id="jam-digital">
						<div id="hours">
							<p id="jam"></p>
						</div>
						<div id="minute">
							<p id="menit"></p>
						</div>
						<div id="second">
							<p id="detik"></p>
						</div>
					</div><br><br>
					<hr>

					<?php
					$quer = mysqli_query($konek, "SELECT nama,alamat,foto FROM masyarakat WHERE username = '$user' AND password = '$pass' ");
					while ($dat = mysqli_fetch_array($quer)) {		 ?>

						<div class="alert alert-warning">
							<h4 class="text-center"><b>Info Untuk Masyarakat</b></h4>
							<p style="text-align: center;">Halo <b><?php echo $dat['nama']; ?></b>, Anda Saat Ini dalam akun sebagai <b>Masyarakat</b>, Anda adalah warga <b>Tegalsari</b> yang akan mengirim pengaduan laporan kepada Pihak yang Berwenang</b></p>
						</div>


						<p align="center">
							<img style="width:80px; height: 80px; border-radius: 50px ; " src="images/profil/<?php if ($dat['foto'] == null) {
																																			echo 'default-image.jpg';
																																		} else {
																																			echo $dat['foto'];
																																		}  ?>"><br>
							<b><?php echo $dat['nama']; ?></b><br>
							<?php echo $dat['alamat'] ?>

						<?php } ?>
						</p>


						<form action="kirimpengaduan.php" method="POST" enctype="multipart/form-data" class="form-group"><br>
							<input type="hidden" name="nama" value="<?php echo $datat['nama'] ?>">
							<input type="hidden" name="nik" value="<?php echo $datat['nik'] ?>">
							<input type="hidden" name="tanggal" value="<?php echo $tgl ?>" required="">

						<?php  } ?>

						<div class="form-group">
							<label>Kirim Pengaduan</label><br>
							<textarea class="form-control" name="pengaduan" rows="10" cols="10" required="" placeholder=" Ketik di sini .."></textarea>
						</div>
						<div class="form-group">
							<label>Kategori</label><br>
							<select class="form-control" name="kategori" id="kategori" required="">
								<option>--- Pilih Kategori ---</option>
								<option value="Administrasi Desa">Administrasi Desa</option>
								<option value="Beras Miskin (Raskin)">Beras Miskin (Raskin)</option>
								<option value="Bidang Perekonomian">Bidang Perekonomian</option>
								<option value="Dampak Lingkungan">Dampak Lingkungan</option>
								<option value="Dana Desa">Dana Desa</option>
								<option value="Data dan informasi">Data dan informasi</option>
							</select>
						</div>
						<div class="form-group">
							<label>Libatkan Foto Pengaduan</label>
							<input type="file" name="foto">
						</div>

						<button class="btn btn-primary" type="Submit"><i class="fa fa-send"></i>&nbsp;&nbsp;Kirim</button>&nbsp;
						<button class="btn btn-danger" type="reset"><i class="fa fa-remove"></i> Reset</button>
						</form>
			</div>
		</div>
	</div>
	</div>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					&copy; LAPOR! TEGALSARI &nbsp;|&nbsp; By : <a href="http://https://mail.google.com/mail/u/0/?tab=rm1#inbox" target="_blank">Huda Putra Santosa</a>
				</div>
			</div>
		</div>
	</footer>


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
</body>

</html>