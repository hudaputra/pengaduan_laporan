<?php include 'koneksi.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Halaman Data User</title>
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
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" language="javascript">
		function hapusdata(id) {
			if (confirm("Apakah anda yakin ingin menghapus data penting ini ?")) {
				window.location.href = 'hapuspetugas.php?id=' + id;
			}
		}
	</script>
	<!--===============================================================================================-->
	<style type="text/css">
		.wrap-login100 {
			width: 1200px;
			height: wrap content;
			background: #fff;
			border-radius: 10px;
			overflow: hidden;
			padding: 75px 40px 30px 40px;

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

		.container-login100 {
			width: 100%;
			min-height: 100vh;
			display: -webkit-box;
			display: -webkit-flex;
			display: -moz-box;
			display: -ms-flexbox;
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
			padding: 5px;
			background: #f2f2f2;
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
	</style>

</head>

<body>
	<?php
	if (isset($_GET['pesan'])) {
		if ($_GET['pesan'] == "sukses") {
			echo "<div class='alert-success text-center p-b-35'><b>Anda Sebagai Administrator Berhasil Menambahkan Data ! </b></div>";
		} elseif ($_GET['pesan'] == "suksess") {
			echo "<div class='alert-info text-center p-b-35'><b>Anda Sebagai Administrator Berhasil Memperbaharui Data ! </b></div>";
		}
	}
	?>

	<script>
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

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<a href="halaman_admin.php">
					<button class="btn btn-default">Kembali</button>
				</a>

				<span class="text-center">
					<h2>Data Petugas</h2>
				</span><br>
				<a href="tambahpetugas.php" class="btn btn-primary">Tambah Petugas [+]</a>
				<br><br>
				<div class="text-center">
					<div class="table-responsive">
						<table class="table table-bordered">
							<tr>
								<th>ID PETUGAS</th>
								<th>NAMA</th>
								<th>USERNAME</th>
								<th>PASSWORD</th>
								<th>TELEPON</th>
								<th>LEVEL</th>

								<th>MENU</th>
							</tr>
							<?php
							$queryptg = mysqli_query($konek, "SELECT * FROM petugas");
							while ($data = mysqli_fetch_array($queryptg)) { ?>
								<tr>
									<td><?php echo $data['id_petugas'] ?></td>
									<td><?php echo $data['nama_petugas'] ?></td>
									<td><?php echo $data['username'] ?></td>
									<td><?php echo $data['password'] ?></td>
									<td><?php echo $data['telepon'] ?></td>
									<td><?php echo $data['level'] ?></td>


									<td>
										<a href="editpetugas.php?id=<?php echo $data['id_petugas']; ?>">
											<button class="btn btn-success">Edit</button>
										</a>
										<a href="javascript:hapusdata(<?php echo $data['id_petugas']; ?>)">
											<button class="btn btn-danger">Hapus</button>
										</a>


									</td>
								</tr>
							<?php } ?>
						</table>
					</div>
				</div><br>



			</div>
		</div>
	</div>


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
</body>

</html>