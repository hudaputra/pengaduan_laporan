<?php
include 'koneksi.php';
session_start();
if (!isset($_SESSION["login"])) {
   header("location:index.php");
   exit;
}
$user = $_SESSION['username'];
$pass = $_SESSION['password'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">

   <title>Lapor! Tegalsari | Beranda</title>

   <!-- Custom fonts for this template-->
   <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

   <!-- Custom styles for this template-->
   <link href="css/sb-admin-2.min.css" rel="stylesheet">
   <script src="js/controller.js" type="text/javascript"></script>
   <script type="text/javascript" src="js/jquery.js"></script>



</head>

<body id="page-top">
   <?php
   date_default_timezone_set("Asia/Jakarta");
   $tgl = date("d F Y");
   $tgl_format = date("d-M-Y");
   function hari_ini()
   {
      $hari = date("D");

      switch ($hari) {
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

   <!-- Page Wrapper -->
   <div id="wrapper">

      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

         <!-- Sidebar - Brand -->
         <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
               <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-2">Lapor! Tegalsari</sup></div>
         </a>

         <!-- Divider -->
         <hr class="sidebar-divider my-0">
         <?php
         $nik = mysqli_query($konek, "SELECT nik,nama FROM masyarakat WHERE username = '$user' AND password = '$pass' ");
         while ($datat = mysqli_fetch_array($nik)) {    ?>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item" id="h_kuesioner" onclick="link_aktif()">
               <a class="nav-link" href="halaman_masyarakat_baru.php">
                  <i class="fas fa-fw fa-tachometer-alt"></i>
                  <span>Kuesioner Pengaduan</span></a>
            </li>

            <li class="nav-item" id="h_laporan" onclick="link_aktif()">
               <a class="nav-link" href="datapengaduanmas_baru.php?nik=<?= $datat['nik']; ?>">
                  <i class="fas fa-fw fa-file-alt"></i>
                  <span>Laporan Pengaduan</span></a>
            </li>

            <li class="nav-item">
               <a class="nav-link" id="h_tanggapan" href="datatanggapan_baru.php?nik=<?= $datat['nik']; ?>">
                  <i class="fas fa-fw fa-file-alt"></i>
                  <span>Tanggapan Pengaduan</span></a>
            </li>

            <li class="nav-item">
               <a class="nav-link" href="about.php">
                  <i class="fas fa-fw fa-user-alt"></i>
                  <span>About</span></a>
            </li>
         <?php } ?>

         <!-- Sidebar Toggler (Sidebar) -->
         <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
         </div>

      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

         <!-- Main Content -->
         <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


               <!-- Sidebar Toggle (Topbar) -->
               <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                  <i class="fa fa-bars"></i>
               </button>
               <div id="sidebar" clas><?php echo hari_ini() . ", " . date('d F Y') ?></div>

               <!-- Topbar Navbar -->
               <ul class="navbar-nav ml-auto">

                  <!-- Nav Item - Alerts -->
                  <li class="nav-item dropdown no-arrow mx-1">
                     <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bell fa-fw"></i>
                        <!-- Counter - Alerts -->
                        <span class="badge badge-danger badge-counter">3+</span>
                     </a>
                     <!-- Dropdown - Alerts -->
                     <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header">
                           Alerts Center
                        </h6>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                           <div class="mr-3">
                              <div class="icon-circle bg-primary">
                                 <i class="fas fa-file-alt text-white"></i>
                              </div>
                           </div>
                           <div>
                              <div class="small text-gray-500">December 12, 2019</div>
                              <span class="font-weight-bold">A new monthly report is ready to download!</span>
                           </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                           <div class="mr-3">
                              <div class="icon-circle bg-success">
                                 <i class="fas fa-donate text-white"></i>
                              </div>
                           </div>
                           <div>
                              <div class="small text-gray-500">December 7, 2019</div>
                              $290.29 has been deposited into your account!
                           </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                           <div class="mr-3">
                              <div class="icon-circle bg-warning">
                                 <i class="fas fa-exclamation-triangle text-white"></i>
                              </div>
                           </div>
                           <div>
                              <div class="small text-gray-500">December 2, 2019</div>
                              Spending Alert: We've noticed unusually high spending for your account.
                           </div>
                        </a>
                        <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                     </div>
                  </li>
                  <div class="topbar-divider d-none d-sm-block"></div>

                  <!-- Nav Item - User Information -->
                  <?php
                  $quer = mysqli_query($konek, "SELECT nik,nama,alamat,foto FROM masyarakat WHERE username = '$user' AND password = '$pass' ");
                  while ($dat = mysqli_fetch_array($quer)) {  ?>

                     <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $dat['nama']; ?></span>
                           <img class="img-profile rounded-circle" src="images/profil/<?php if ($dat['foto'] == null) {
                                                                                          echo 'default-image.jpg';
                                                                                       } else {
                                                                                          echo $dat['foto'];
                                                                                       }  ?>">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                           <a class="dropdown-item" href="profil.php?nik=<?= $dat['nik']; ?>">
                              <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                              Profile
                           </a>
                           <div class="dropdown-divider"></div>
                           <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                              Logout
                           </a>
                        </div>
                     </li>
                  <?php } ?>
               </ul>

            </nav>
            <!-- End of Topbar -->

            <div class="content"></div>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog" role="document">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin ?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">×</span>
                        </button>
                     </div>
                     <div class="modal-body">Pilih "Logout" jika kamu yakin untuk keluar dari akun ini.</div>
                     <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="logout.php">Logout</a>
                     </div>
                  </div>
               </div>
            </div>

            <!-- <script type="text/javascript">
               function link_aktif() {
                  document.getElementById("h_laporan").innerHTML = "class='nav-item active'";
               }
            </script> -->
</body>

</script>

</html>