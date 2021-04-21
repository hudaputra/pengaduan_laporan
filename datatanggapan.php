<?php
include 'koneksi.php';
session_start();
if (!isset($_SESSION["login"])) {
	header("location:index.php");
	exit;
}
date_default_timezone_set("Asia/Jakarta");
$tgl = date("d F Y  G.i");
// $nik = $_GET['nik'];
$id = $_GET['id'];
$idpeng = $_GET['id'];
$no = 1;
$user = $_SESSION['username'];
$pass = $_SESSION['password'];
?>

<!DOCTYPE html>
<html>

<head>
	<title>Data Tanggapan</title>
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
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

<style type="text/css">
	.wrap-login100 {
		width: 1000px;
		height: wrap content;
		background: #fff;
		border-radius: 10px;
		overflow: hidden;
		padding: 60px 20px 80px 20px;
		box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
		-moz-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
		-webkit-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
		-o-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
		-ms-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
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

	table {
		position: relative;
		text-align: center;
	}

	th {
		position: relative;
		text-align: center;
	}
</style>


<body>
	<?php
	if (isset($_GET['pesan'])) {
		if ($_GET['pesan'] == 'sukseshapus') {
			echo "<div class='alert-info text-center p-b-30'><b>Berhasil Hapus Data Pengaduan</b></div>";
		}
	}
	?>


	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<a href="halaman_petugas.php"><img src="images/lapor-tegalsari3.png" width="225px"></a><br>
				<h2 style="text-align: center;">Data Tanggapan</h2><br>
				<button class="btn btn-default" onclick="history.back()">Kembali</button><br><br>

				<div class="table-responsive">
					<table class="table table-bordered table-striped">
						<thead>
							<tr class="bg-primary">
								<th>No</th>
								<th>Tanggal</th>
								<th width="400px">Data Tanggapan</th>
								<th>Id Petugas</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<?php
						$query = mysqli_query($konek, "SELECT * FROM tanggapan WHERE id_pengaduan = '$id' ORDER BY tgl_tanggapan desc ");

						while ($data = mysqli_fetch_array($query)) {

						?>

							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $data['tgl_tanggapan']; ?></td>
								<td><?php echo $data['isi_tanggapan']; ?></td>
								<td>
									<?php echo $data['id_petugas']; ?>
								</td>
								<td>
									<a href="hapus_tanggapan.php?id=<?php echo $data['id_tanggapan']; ?>" class="btn btn-danger">Hapus</a>
								</td>
							</tr>
						<?php } ?>
					</table>
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