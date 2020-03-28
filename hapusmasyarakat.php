<?php 
include 'koneksi.php';
$id = $_GET['id']; 

$query = mysqli_query($konek,"DELETE FROM masyarakat WHERE nik = '$id'");
mysqli_query($konek,"DELETE FROM pengaduan WHERE nik = '$id' ");
if (!$query) {
	 echo "gagal";
} else {
	header("location: datausermas.php?pesan=sukses-hapus");
}


 ?>