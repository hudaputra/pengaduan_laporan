<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
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
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="style/bootstrap.min.css" />
<!--===============================================================================================-->
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
		

	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-1.11.1.min.js"></script>
	
	<style type="text/css">
	.wrap-login100 {
  width: 850px;
  height: 600px;
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
	<?php 
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
	header("location: index.php?pesan=gagal");
}
	 ?>

<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100">
			<a href="halaman_admin.php"><img src="images/lapor-tegalsari.png" width="100px"></a>
<h1>ADMIN</h1>
<h3>Halo <b><?php echo $_SESSION['username']; ?></b> anda login sebagai <b><?php echo $_SESSION['level']; ?></b></p></h3>
<nav class="background">
	<li><a href="datauser.php">Data User Petugas</a></li>
	<li><a href="datausermas.php">Data User Masyarakat</a></li>
	<!-- <li><a href="#">Tabel Penanggapan</a></li> -->
	<li><a href="logout.php">Logout</a></li>
</nav>


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
</body>
</html>