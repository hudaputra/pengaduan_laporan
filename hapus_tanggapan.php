<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($konek, "DELETE FROM tanggapan where id_tanggapan ='$id'");

header('location:halaman_masyarakat.php?pesan=sukseshapustang');
