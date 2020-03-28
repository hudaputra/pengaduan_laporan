<?php 
include 'koneksi.php';
session_start();
$user = $_SESSION['username'];
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
  padding: 50px 35px 75px 35px;

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

</style>


 <body>
 <div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100">
			
			<h2 align="center">Data tanggapan</h2><br>
			<a href="halaman_masyarakat.php">
				<button class="btn btn-default">Kembali</button>
			</a>

	
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<!-- <th>id tanggapan</th> -->
			<!-- <th>id_pengaduan</th> -->
			<th>Tanggal</th>
			<th>Data Tanggapan</th>
			<th>Id Petugas</th>
		</tr>
	
<?php 




$query = mysqli_query($konek,"SELECT * FROM tanggapan WHERE id_pengaduan = '$id' ");
while($data = mysqli_fetch_array($query)) {		


$quer = mysqli_query($konek,"SELECT nama_petugas FROM petugas WHERE id_petugas ='$id' ");
while ($dat = mysqli_fetch_array($quer)) {
	
	?>	<br>



		<tr>
			<br>
			<td><?php echo $no++ ?></td>
			<!-- <td><?php echo $data['id_tanggapan'] ?></td> -->
			<!-- <td><?php echo $data['id_pengaduan'] ?></td> -->
			<td><?php echo $data['tgl_tanggapan']; ?></td>
				<td><?php echo $data['isi_tanggapan']; ?></td>
			<!-- 	<td><?php echo $dat['nama']; ?></td> -->
			<?php } ?>
			<!-- <td><?php echo $idpeng ?></td> -->
			<td>
					<a href="profilid.php?id=<?php $data['id_tanggapan']; ?>"><?php echo $data['id_petugas']; ?>
				</a></td>
		
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