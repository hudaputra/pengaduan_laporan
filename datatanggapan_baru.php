<?php include 'navbar.php'; ?>

<!-- Custom styles for this template -->
<link href="css/sb-admin-2.min.css" rel="stylesheet">

<!-- Custom styles for this page -->
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<!-- Begin Page Content -->
<div class="container-fluid">

   <!-- Page Heading -->
   <h1 class="h3 mb-2 text-gray-800">Tanggapan Pengaduan</h1>
   <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
      For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

   <!-- DataTales Example -->
   <div class="card shadow mb-4">
      <div class="card-body">
         <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead>
                  <tr>
                     <th>Tanggal</th>
                     <th>Isi Laporan</th>
                     <th>Kategori</th>
                     <th>Foto</th>
                     <th>Status</th>
                     <th>Aksi</th>
                  </tr>
               </thead>

               <tbody>
                  <?php
                  $nik_2 = $_GET['nik'];
                  $user = $_SESSION['username'];
                  $pass = $_SESSION['password'];

                  $query = mysqli_query($konek, "SELECT * FROM pengaduan WHERE nik = '$nik_2' ORDER BY tgl_pengaduan asc ");
                  while ($data = mysqli_fetch_array($query)) {
                  ?>
                     <tr>
                        <td><?php echo $data['tgl_pengaduan']; ?></td>
                        <td><?php echo $data['isi_laporan']; ?></td>
                        <td><?php echo $data['kategori']; ?></td>
                        <td>
                           <img style="width: 80px; height: 80px;" src="images/foto/<?php if ($data['foto'] == null) {
                                                                                       echo 'default-image.jpg';
                                                                                    } else {
                                                                                       echo $data['foto'];
                                                                                    }  ?>">
                        </td>

                        <td>
                           <?php
                           if ($data['status'] == 'proses') { ?>
                              <div class="btn btn-primary"><i class="fas fa-info"></i>
                                 <?= $data['status']; ?>
                              </div>
                           <?php   }
                           if ($data['status'] == 'selesai') { ?>
                              <div class="btn btn-success"><i class="fas fa-check"></i>
                                 <?= $data['status']; ?>
                              </div>
                           <?php } ?>
                        </td>

                        <td>
                           <a href="hapusdatapengaduanmas.php?id=<?php echo $data['id_pengaduan']; ?>" class="btn btn-danger">
                              <i class=" fas fa-trash"></i>
                              Hapus
                           </a>
                        </td>
                     </tr>
                  <?php } ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
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

< <!-- Bootstrap core JavaScript-->
   <script src="vendor/jquery/jquery.min.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

   <!-- Core plugin JavaScript-->
   <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

   <!-- Custom scripts for all pages-->
   <script src="js/sb-admin-2.min.js"></script>

   <!-- Page level plugins -->
   <script src="vendor/datatables/jquery.dataTables.min.js"></script>
   <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

   <!-- Page level custom scripts -->
   <script src="js/demo/datatables-demo.js"></script>
   </body>

   </html>