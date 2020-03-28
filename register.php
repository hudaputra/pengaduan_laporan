<?php include 'koneksi.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Halaman Pendaftaran</title>
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
		
		<script>
			function tipeangka(evt){
				var charCode = (evt.which) ? evt.which : event.keyCode
				if(charCode > 31 && (charCode<48) || charCode >57)
					return false;
				return true;
			}
		</script>
<!--===============================================================================================-->
<style type="text/css">
	.wrap-login100 {
  width: 500px;
  height: wrap content;
  background: #fff;
  border-radius: 10px;
  overflow: hidden;
  padding: 75px 65px 30px 65px;

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

</style>
</head>
<body>
	<?php 
if (isset($_GET['pesan'])) {
	if ($_GET['pesan']=="gagal") {
		echo "<div class='alert-danger text-center p-b-30'><b>Maaf Data Gagal Dimasukkan, Mungkin NIK sudah Terdaftar</b></div>";
	}
}
	 ?>
	 <script>
	 window.setTimeout(function(){$(".alert-danger").fadeTo(100,100).slideUp(500,function(){$(this).remove();});}, 6000);
	 </script>

	<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100">
				<!-- <form class="login100-form validate-form" action="saveregister.php" method="POST"> -->
  <form method="POST" action="saveregister.php" enctype="multipart/form-data" class="login100-form validate-form" >
      <section class="base">
					<span class="login100-form-title p-b-48">
			<a href="index.php"><img src="images/lapor-tegalsari.png" width="43%"></a>
	</span>
		<span class="login100-form-title">
			Pendaftaran 
		</span>

<br><br>

	
	<div class="wrap-input100 validate-input" data-validate = "NIK">
	<input class="input100" minlength="16" maxlength="16" type="text" onkeypress="return tipeangka(event)" name="nik" >
	<span class="focus-input100" data-placeholder="NIK (16 digit angka)"></span>
    </div>

	
	<div class="wrap-input100 validate-input" data-validate = "Masukkan Nama">
	<input  class="input100" type="teks" name="nama" >
	<span class="focus-input100" data-placeholder="Nama Lengkap"></span>
</div>

<div class="wrap-input100 validate-input" data-validate = "Masukkan Username">
	<input class="input100" type="teks" maxlength="20" name="username">
	<span class="focus-input100" data-placeholder="Username (maksimal 20 huruf)"></span>
</div>

	<div class="wrap-input100 validate-input" data-validate = "Masukkan Password">
			<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
	<input class="input100" type="Password" maxlength="20" name="password">
	<span class="focus-input100" data-placeholder="Password  (maksimal 20 huruf)"></span>
</div>
    
    <div class="wrap-input100 validate-input" data-validate = "Masukkan Telepon"> 
	<input class="input100" type="text" maxlength="13" minlength="10" name="telepon" onkeypress="tipeangka(event)">
	<span class="focus-input100" data-placeholder="No Telepon"></span>
</div>

	<div class="wrap-input100 validate-input" data-validate = "Masukkan Alamat"> 
	<input class="input100" type="text" name="alamat">
	<span class="focus-input100" data-placeholder="Alamat"></span>
</div>
<div>
	<label>Foto Profil</label>
	<input type="file" name="fotprof" >
</div><br>

<div class="container-login100-form-btn">
						<div class="wrap-form-btn">
							<div class="login100-form-bgbtn"></div>
	<button type="submit" class="login100-form-btn">Daftar</button>

		</div>
</div>
<div class="container-login100-form-btn">
						<div class="wrap-form-btn">
							<div class="login100-form-bgbtn"></div>	
<button class="login100-form-btn" type="Reset" class="text">
		Reset
		</button>
</div>
</div>
</section>
</form>
</div>
</div>
</div>
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