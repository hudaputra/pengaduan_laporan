<?php 
include 'koneksi.php';
session_start();
date_default_timezone_set("Asia/Jakarta"); 
function hari_ini(){
	$hari = date ("D");
 
	switch($hari){
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
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
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
	<link rel="stylesheet" href="style/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
		

	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-1.11.1.min.js"></script>
	
	<style type="text/css">
		.wrap-login100 {
  width: 100%;
  height: wrap content;
  background: #fff;
  border-radius: 10px;
  overflow: hidden;
  padding: 50px 30px 75px 30px;

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
.table-container{
	overflow: auto;
}

table{
	position: relative;
	text-align: center;
	padding: 10px 10px 10px 10px;

}

th{
	position: relative;
	text-align: center;
}

</style>
</head>
<body>

<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100">
	<h2 style="text-align: center;">Riwayat Pengaduan</h2><br><br>
	
<a href="halaman_masyarakat.php">
	<button class="btn btn-default">Kembali</button>
</a>
	<br><br>
	<div class="table-responsive">
<table class="table table-bordered">
	<tr>
		<th>No</th>
		<th>Tanggal</th>
		<!-- <th>Nama</th> -->
		<!-- <th>NIK</th> -->
		<th>Isi Laporan</th>
		<th>Kategori</th>
		<th>Foto</th>
		<th>Status</th>
		<!-- <th>Tanggapan</th> -->
	
	</tr>
	<?php 
$niks = $_GET['nik'];
$no = 1;
$user = $_SESSION['username'];
 $pass = $_SESSION['password'];
 // $nik = mysqli_query($konek,"SELECT nik FROM masyarakat WHERE username = '$user' AND password = '$pass' ");

$query = mysqli_query($konek,"SELECT * FROM pengaduan WHERE nik = '$niks' ORDER BY tgl_pengaduan desc ");
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
			<img style="width: 80px; height: 80px;" src="images/foto/<?php if($data['foto'] == null){ echo 'default-image.jpg'; } else{echo $data['foto'];}  ?>">
		</td>
		<td>
			<div class="alert alert-primary"><i class="fa fa-refresh"></i> 
			<b><?php echo $data['status']; ?></b>
				</div>
			</td>
		<td>
			<a href="datatanggapan.php?id=<?php echo $data['id_pengaduan'];?>">
				<button class="btn btn-primary">Tanggapan</button>
			</a>
		</td>
<td>
	<a href="hapusdatapengaduanmas.php?id=<?php echo $data['id_pengaduan']; ?>">
		<button class="btn btn-danger"><i class="fa fa-times"></i> Hapus</button>
	</a>
	

</td>
	</tr>
 <?php } ?>
</table>
</div>
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
</body>
</html>