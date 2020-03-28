<?php 
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($konek,"DELETE FROM pengaduan WHERE id_pengaduan = '$id' ");
if ($query) {
	header("location:halaman_masyarakat.php?pesan=sukseshapus");
} else {
	echo "gagal";
}

 ?>