<?php 
include 'koneksi.php';
session_start();
$user = $_SESSION['username'];
date_default_timezone_set("Asia/Jakarta");

$id = $_GET['id'];
// $idpet = mysqli_query($konek,"SELECT id_petugas FROM petugas WHERE username = '$user' "); 
// date_default_timezone_set("Asia/Jakarta");
$tgl = date("d F Y  G.i");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Tanggapan</title>
	 <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
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
<body>
<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100">
			<a href="halaman_petugas.php"><img src="images/lapor-tegalsari3.png" width="125px"></a>

<h2>Tanggapan</h2>
<?php 
$query = mysqli_query($konek,"SELECT * FROM pengaduan WHERE id_pengaduan = '$id' ");
while ($data = mysqli_fetch_array($query)) {	 ?>
<?php echo "dari : <b>".$data['nama']."</b>"; ?> (Nik : <?php echo $data['nik']; ?>)<br>
<div class="alert alert-info">
<h4 align="center"><b>Isi pengaduan</b></h4>
	<p align="center">" <?php echo $data['isi_laporan']; ?> "</p>
  <p align="center">Kategori : <?php echo $data['kategori'] ?></p>
</div>


<?php
$user = $_SESSION['username'];
 $idpet = mysqli_query($konek,"SELECT * FROM petugas WHERE username = '$user' ");
while ($id = mysqli_fetch_array($idpet)) {	 ?>

<form action="kirimtanggapan.php" method="POST" class="form-group">
<input type="hidden" name="id_petugas" value="<?php echo $id['id_petugas']; ?>">
<?php } ?>
<input type="hidden" name="id_pengaduan" value="<?php echo $data['id_pengaduan'] ?>">
<input type="hidden" name="tanggal" value="<?php echo $tgl ?>">
<div class="form-group">
	<label>Berikan Tanggapan</label>
	<textarea class="form-control" name="tanggapan" rows="10" placeholder="ketik disini .. 
akhiri tanda @ sebagai identitas nama, contoh : @huda"></textarea>
</div>
<button class="btn btn-primary" type="Submit"><i class="fa fa-send"></i> Kirim Tanggapan</button>&nbsp;&nbsp;
<button class="btn btn-danger" type="Reset">Reset</button>
</form>
</div>
</div>
</div>
<?php } ?>

</body>
</html>