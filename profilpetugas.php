<?php include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($konek, "SELECT * FROM petugas WHERE id_petugas = '$id' ");
while ($data = mysqli_fetch_array($query)) {

?>
   <!DOCTYPE html>
   <html>

   <head>
      <title>Edit Profil Petugas</title>
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
      <!-- FONT AWESOME ICONS  -->
      <link href="assets/css/font-awesome.css" rel="stylesheet" />
      <!-- CUSTOM STYLE  -->
      <link href="assets/css/style.css" rel="stylesheet" />
      <!--===============================================================================================-->
      <style type="text/css">
         .wrap-login100 {
            width: 650px;
            height: wrap content;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            padding: 50px 50px 30px 50px;

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

         table {
            position: relative;
            text-align: center;
            padding: 10px 10px 10px 10px;

         }

         th {
            position: relative;
            text-align: center;
         }

         h1 {
            text-transform: uppercase;
            color: salmon;
         }

         label {
            margin-top: 10px;
            float: left;
            text-align: left;
            width: 100%;
         }


         div {
            width: 100%;
            height: auto;
         }

         .base {
            width: 400px;
            height: auto;
            padding: 20px;
            margin-left: auto;
            margin-right: auto;
            background: #ededed;
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

               <span class="login100-form-title p-b-48">
                  <a href="halaman_masyarakat.php"><img src="images/lapor-tegalsari.png" width="30%"></a>
               </span>
               <span class="login100-form-title">
                  Ubah Profil
               </span><br>
               <button class="btn btn-primary" onclick="history.back()">Kembali</button>



               <form class="login100-form validate-form" action="updateprofilpet.php" enctype="multipart/form-data" method="POST">

                  <input class="form-control" type="hidden" name="id_petugas" value="<?php echo $data['id_petugas']; ?>">


                  <div class="form-group">
                     <label>Nama Lengkap</label>
                     <input class="form-control" type="text" name="nama" value="<?php echo $data['nama_petugas']; ?>">

                  </div>

                  <div class="form-group">
                     <label>Username</label>
                     <input class="form-control" type="text" required="" readonly name="username" value="<?php echo $data['username']; ?>">

                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input class="form-control" type="password" readonly required="" name="password" value="<?php echo $data['password']; ?>">
                  </div>
                  <p>Ingin Mengganti Username dan Password? <a href="">Klik disini</a></p>

                  <div class="form-group">
                     <label>Telepon</label>
                     <input class="form-control" type="number" required="" name="telepon" value="<?php echo $data['telepon']; ?>">
                  </div>

                  <br>
                  <div class="container-login100-form-btn">
                     <div class="wrap-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button type="submit" class="login100-form-btn">Simpan</button>

                     </div>
                  </div>
                  <div class="container-login100-form-btn">
                     <div class="wrap-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" type="Reset" class="text">
                           Reset
                        </button>


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


   <?php } ?>
   </body>

   </html>