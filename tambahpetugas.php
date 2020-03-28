<!DOCTYPE html>
<html>
<head>
	<title>Halaman Tambah Petugas</title>
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
<!--===============================================================================================-->
<style type="text/css">
		.wrap-login100 {
  width: 550px;
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
		
				<form class="login100-form validate-form" action="savepetugas.php" method="POST">
<span class="login100-form-title p-b-48">
			<a href="datauser.php"><img src="images/lapor-tegalsari.png" width="43%"></a></span>
		<span class="login100-form-title">
			Tambah Data Petugas
		</span>
<br><br>

	
	<div class="wrap-input100 validate-input" data-validate = "Masukkan Nama">
	<input  class="input100" type="text" name="nama" >
	<span class="focus-input100" data-placeholder="Nama Lengkap"></span>
</div>

<div class="wrap-input100 validate-input" data-validate = "Masukkan Username">
	<input class="input100" type="text" name="username">
	<span class="focus-input100" data-placeholder="Username"></span>
</div>

	<div class="wrap-input100 validate-input" data-validate = "Masukkan Password">
			<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
	<input class="input100" type="Password" name="password">
	<span class="focus-input100" data-placeholder="Password"></span>
</div>
    
    <div class="wrap-input100 validate-input" data-validate = "Masukkan Telepon"> 
	<input class="input100" type="number" name="telepon">
	<span class="focus-input100" data-placeholder="No Telepon"></span>
</div>
<div data-validate="Pilih Level" >
	<select name="level" id="id_petugas">
		<option value="admin">Admin</option>
		<option value="petugas">Petugas</option>
	</select>
</div>
<br>
<div class="container-login100-form-btn">
						<div class="wrap-form-btn">
							<div class="login100-form-bgbtn"></div>
	<button type="submit" class="login100-form-btn">Tambah</button>
</div>
</div>

<div class="container-login100-form-btn">
						<div class="wrap-form-btn">
							<div class="login100-form-bgbtn"></div>
<button type="Reset" class="login100-form-btn">Reset</button>
</div>
</div>

</form>
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