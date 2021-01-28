<!DOCTYPE html>
<html>

<head>
   <title>Riwayat Tanggapan</title>
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
         width: 1200px;
         height: wrap content;
         background: #fff;
         border-radius: 10px;
         overflow: hidden;
         padding: 40px 25px 60px 25px;

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
         window.location.href = 'hapuspengaduan.php?id=' + id;
      }
   }
</script>


<body>
   <?php
   include 'koneksi.php';
   ?>

   <div class="limiter">
      <div class="container-login100">
         <div class="wrap-login100">
            <a href="halaman_petugas.php"><img src="images/lapor-tegalsari3.png" width="200px"></a><br><br>

            <h3 align="center">Data Tanggapan Petugas</h3><br>
            <button class="btn btn-default" onclick="history.back()">Kembali</button>

            <br><br>

            <div class="table-responsive">
               <table class="table table-bordered">
                  <tr>
                     <th>No</th>

                     <th>Tanggal</th>
                     <th>id Pengaduan</th>
                     <th>Isi Tanggapan</th>
                     <th>id petugas</th>
                     <th>Hapus</th>

                  </tr>

                  <?php

                  $no = 1;
                  $query = mysqli_query($konek, "SELECT * FROM tanggapan ORDER BY tgl_tanggapan DESC");
                  while ($data = mysqli_fetch_array($query)) {     ?>

                     <tr>
                        <td><?php echo $no++ ?></td>

                        <td><?php echo $data['tgl_tanggapan']; ?></td>
                        <td><?php echo $data['id_pengaduan'] ?></td>
                        <td><?php echo $data['isi_tanggapan']; ?></td>
                        <td><?php echo $data['id_petugas']; ?></td>
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