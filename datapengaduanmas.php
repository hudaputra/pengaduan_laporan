<?php
include 'koneksi.php';
session_start();
$tgl = date("d F Y  G.i");
date_default_timezone_set("Asia/Jakarta");
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

?>
<!DOCTYPE html>
<html>

<head>
	<title>Data Pengaduan</title>
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
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<a href="halaman_masyarakat.php"><img src="images/lapor-tegalsari3.png" width="225px"></a><br><br>
				<h2 style="text-align: center;">Riwayat Pengaduan</h2><br>


				<button class="btn btn-default" onclick="history.back()">Kembali</button>

				<br><br>
				<div class="table-responsive">
					<table class="table table-bordered table-striped">
						<thead>
							<tr class="bg-primary">
								<th>No</th>
								<th>Tanggal</th>
								<!-- <th>Nama</th> -->
								<!-- <th>NIK</th> -->
								<th>Isi Laporan</th>
								<th>Kategori</th>
								<th>Foto</th>
								<th>Status</th>
								<th>Tanggapan</th>
								<th>Hapus</th>
								<!-- <th>Tanggapan</th> -->

							</tr>
						</thead>
						<?php
						$niks = $_GET['nik'];
						$no = 1;
						$user = $_SESSION['username'];
						$pass = $_SESSION['password'];
						// $nik = mysqli_query($konek,"SELECT nik FROM masyarakat WHERE username = '$user' AND password = '$pass' ");

						$query = mysqli_query($konek, "SELECT * FROM pengaduan WHERE nik = '$niks' ORDER BY tgl_pengaduan asc ");
						while ($data = mysqli_fetch_array($query)) {
						?>
							<tr>
								<td><?php echo $no++  ?></td>
								<td><?php echo $data['tgl_pengaduan']; ?></td>
								<!-- <td><?php echo $data['nama']; ?></td> -->
								<!-- <td><?php echo $data['nik']; ?></td> -->
								<td><?php echo $data['isi_laporan']; ?></td>
								<td><?php echo $data['kategori']; ?></td>
								<td>
									<img style="width: 80px; height: 80px;" src="images/foto/<?php if ($data['foto'] == null) {
																													echo 'default-image.jpg';
																												} else {
																													echo $data['foto'];
																												}  ?>">
								</td>
								<td>

									<?php
									if ($data['status'] == 'proses') { ?>
										<div class="alert btn-primary"><i class="fa fa-refresh"></i>
											<?= $data['status']; ?>
										</div>
									<?php } ?>
									<?php
									if ($data['status'] == 'selesai') { ?>
										<div class="alert btn-success"><i class="fa fa-refresh"></i>
											<?= $data['status']; ?>
										</div>
									<?php } ?>




								</td>
								<td>
									<a href="datatanggapan.php?id=<?php echo $data['id_pengaduan']; ?>" class="btn btn-primary">
										Tanggapan
									</a>
								</td>
								<td>
									<a href="hapusdatapengaduanmas.php?id=<?php echo $data['id_pengaduan']; ?>" class="btn btn-danger">
										Hapus
									</a>
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