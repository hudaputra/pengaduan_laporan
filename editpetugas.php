<?php include 'koneksi.php';
$id=$_GET['id'];
$query = mysqli_query($konek,"SELECT * FROM petugas where id_petugas='$id'");
while($dt= mysqli_fetch_array($query)) {
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Edit Data Petugas</title>
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
	<?php 
$queryy=mysqli_query($konek,"SELECT * FROM petugas ORDER BY level asc");
	 ?>

	<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100">
			
				<form class="login100-form validate-form" action="updatepetugas.php" method="POST">
					<span class="login100-form-title p-b-48">
			<a href="index.php"><img src="images/lapor-tegalsari.png" width="40%"></a>
	</span>
	<span class="login100-form-title">
				Edit Data Petugas
			</span><br><br>
	
	<input class="form-control" type="hidden" name="id" value="<?php echo $dt['id_petugas'] ?>">


<div class="form-group">
	<label>Nama Lengkap</label>
	<input class="form-control" type="text" name="nama" value="<?php echo $dt['nama_petugas'] ?>">
</div>

<div class="form-group">
<label>Username</label>
	<input class="form-control" type="teks" name="username" value="<?php echo $dt['username']; ?>" required="">
	</div>

<div class="form-group">
	<label>Password</label>
	<input class="form-control" type="text" name="password" value="<?php echo $dt['password']; ?>"  required="">
	</div>

<div class="form-group">
	<label>No Telepon</label>
	<input class="form-control" type="number" name="telepon" value="<?php echo $dt['telepon']; ?>">
	</div>

	<div class="form-group">
	<label>Level</label><br>
  
    <select name="level" id="id_petugas">
    	<?php  ?>
    	<option value="admin" <?php if($dt['level']=='admin'){echo "selected";} ?>>Admin</option>
    	<option value="petugas"  <?php if($dt['level']=='petugas'){echo "selected";}?>>Petugas</option>
    </select>
	<br><br><br>


<div class="container-login100-form-btn">
						<div class="wrap-form-btn">
							<div class="login100-form-bgbtn"></div>
<button class="login100-form-btn" type="submit">Simpan</button>
</div>
</div>

<div class="container-login100-form-btn">
						<div class="wrap-form-btn">
							<div class="login100-form-bgbtn"></div>
	<button class="login100-form-btn" type="Reset">Reset</button>
</div>
</div>

	

</form>
</div>
</div>
</div>
<?php } ?>
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