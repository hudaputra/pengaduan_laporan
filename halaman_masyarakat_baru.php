<?php include 'navbar.php'; ?>

<!-- Begin Page Content -->
<div class="container-fluid">

   <!-- Page Heading -->
   <h1 class="h3 mb-2 text-gray-800">Kuesioner Pengaduan</h1>
   <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
      For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

   <!-- DataTales Example -->
   <div class="card shadow mb-4">
      <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">Form Pengaduan</h6>
      </div>
      <div class="card-body">
         <?php
         $quer = mysqli_query($konek, "SELECT * FROM masyarakat WHERE username = '$user' AND password = '$pass' ");
         while ($dat = mysqli_fetch_array($quer)) {       ?>
            <div class="col mb-3">
               <div class="card bg-gradient-info text-white shadow pt-3 pb-3 pl-3 pr-3">
                  <h4 class="text-center"><b>Info Untuk Masyarakat</b></h4>
                  <p style="text-align: center;">Halo <b><?php echo $dat['nama']; ?></b>, Anda Saat Ini dalam akun sebagai <b>Masyarakat</b>, Anda adalah warga <b>Tegalsari</b> yang akan mengirim pengaduan laporan kepada Pihak yang Berwenang</b></p>
               </div>
            </div>
            <!-- <p align="center">
                           <img style="width:60px; height: 60px; border-radius: 50px ; " src="images/profil/<?php if ($dat['foto'] == null) {
                                                                                                               echo 'default-image.jpg';
                                                                                                            } else {
                                                                                                               echo $dat['foto'];
                                                                                                            }  ?>"><br>
                           <b><?php echo $dat['nama']; ?></b><br>
                           <?php echo $dat['alamat'] ?>


                        </p> -->

            <form action="kirimpengaduan.php" method="POST" enctype="multipart/form-data" class="form-group"><br>
               <input type="hidden" name="nama" value="<?php echo $dat['nama'] ?>">
               <input type="hidden" name="nik" value="<?php echo $dat['nik'] ?>">
               <input type="hidden" name="tanggal" value="<?php echo $tgl_format ?>">

            <?php } ?>

            <div class="form-group">
               <h6 class="font-weight-bold">Kirim Pengaduan</h6>
               <textarea class="form-control" name="pengaduan" rows="8" cols="5" required="" placeholder=" Ketik di sini .."></textarea>
            </div>
            <div class="form-group">
               <h6 class="font-weight-bold">Kategori</h6>
               <select class="form-control" name="kategori" id="kategori" required="">
                  <option>--- Pilih Kategori ---</option>
                  <option value="Administrasi Desa">Administrasi Desa</option>
                  <option value="Beras Miskin (Raskin)">Beras Miskin (Raskin)</option>
                  <option value="Bidang Perekonomian">Bidang Perekonomian</option>
                  <option value="Dampak Lingkungan">Dampak Lingkungan</option>
                  <option value="Dana Desa">Dana Desa</option>
                  <option value="Data dan informasi">Data dan informasi</option>
               </select>
            </div>
            <div class="form-group">
               <h6 class="font-weight-bold">Libatkan Foto Pengaduan</h6>
               <input type="file" name="foto">
            </div>

            <button class="btn btn-primary" type="Submit"><i class="fas fa-check"></i> Kirim</button>&nbsp;
            <button class="btn btn-danger" type="reset"><i class="fas fa-trash"></i> Reset</button>
            </form>

      </div>
   </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include 'footer.php' ?>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
   <i class="fas fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

</body>

</html>