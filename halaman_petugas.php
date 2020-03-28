<!DOCTYPE html>
<html>
<head>
	<title>Halaman Petugas</title>
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
	  <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
	
	<style type="text/css">
		.wrap-login100 {
  width: 1300px;
  height: wrap content;
  background: #fff;
  border-radius: 10px;
  overflow: hidden;
  padding: 50px 50px 75px 50px;

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

table{
	position: relative;
	text-align: center;
	padding: 10px 10px 10px 10px;

}

th{
	position: relative;
	text-align: center;
}
footer {
    padding: 13px;
    color: #fff;
    font-size: 12px;
    background-color: #2980b9;
}

</style>

</head>

<script type="text/javascript" language="javascript">
function hapusdata(id) {
		if (confirm("Apakah anda yakin ingin menghapus data penting ini ?")) {
			window.location.href='hapuspengaduan.php?id='+id;
		}	} 
	</script>


<body>
	<?php 
	include 'koneksi.php';
session_start();
 		date_default_timezone_set("Asia/Jakarta"); 
$tgl = date("d F Y  G.i");
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



if ($_SESSION['level']=="") {
	header("location:index.php?pesan=gagal");
}
	 ?>

<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100">
<a href="halaman_petugas.php"><img src="images/lapor-tegalsari3.png" width="200px"></a><br><br>
<a href="profilpetugas.php"><i class="fa fa-user"></i><b> Profil</b></a>&nbsp;&nbsp;|&nbsp;
<a href="logout.php"><i class="fa fa-sign-out"></i><b> Keluar</b></a><br>
 <i class="fa fa-calendar"></i>&nbsp;<?php echo hari_ini().", ".date('d F Y')?>
<br><hr>

<div class="alert alert-warning">
<p align="center">Halo <b><?php echo $_SESSION['username']; ?></b> Anda Sekarang Masuk Halaman Sebagai <b><?php echo $_SESSION['level']; ?></b><br>
Silahkan Lakukan Tanggapan dari Laporan Pengaduan yang Masyarakat Berikan</p></div>	<br>

<h3 align="center">Data Pengaduan Masyarakat</h3><br>
<a href="cetak.php" target="_blank">
	<button class="btn btn-primary"><i class="fa fa-print"></i> Cetak Data</button>
</a>	<br>

<div class="table-responsive">
<table border="1" class="table table-bordered">
	<tr>
		<th>No</th>
		<!-- <th>id</th> -->
		<th>Tanggal</th>
		<th>NIK</th>
		<th>Nama</th>
		<th>Isi Laporan</th>
		<th>Kategori</th>
		<th>Foto</th>
		<th>Status</th>
		<th>Tanggapi</th>
		<th>Hapus</th>
	</tr>

<?php 
 
$no = 1;
$query = mysqli_query($konek,"SELECT * FROM pengaduan ORDER BY tgl_pengaduan desc");
while ($data = mysqli_fetch_array($query)) {     ?>

	<tr>
		<td><?php echo $no++ ?></td>
	 <!-- <td><?php echo $data['id_pengaduan'] ?></td> -->
		<td><?php echo $data['tgl_pengaduan']; ?></td>
		<td><?php echo $data['nik']; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['isi_laporan']; ?></td>
		<td><?php echo $data['kategori']; ?></td>
		<td>
			<img style="width: 80px; height: 80px;" src="images/foto/<?php if($data['foto'] == null){ echo 'default-image.jpg'; } else{echo $data['foto'];}  ?>">
		</td>
		<td><div class="alert alert-primary"><i class="fa fa-refresh"></i>
			<b><?php echo $data['status']; ?></b>
				</div></td>
		<td>
			<a style="text-decoration-line: none;" href="tanggapan.php?id=<?php echo $data['id_pengaduan'];?>">
				<button class="btn btn-primary">Tanggapi</button>
			</a>
			</td>
			<td>
				<a href="javascript:hapusdata(<?php echo $data['id_pengaduan']; ?>)">
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
	
	 <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    &copy; LAPOR! TEGALSARI &nbsp;|&nbsp; By : <a href="http://www.gmail.com/hudaputrasantosa" target="_blank">Huda Putra Santosa</a>
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
</body>
</html>