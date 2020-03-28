<?php 
include 'koneksi.php';
session_start();
$id = $_GET['id'];

$query = mysqli_query($konek,"DELETE FROM pengaduan WHERE id_pengaduan = '$id'");
mysqli_query($konek,"DELETE FROM tanggapan WHERE id_pengaduan = '$id' ");

if ($query) {
	header("location:halaman_petugas.php?pesan=sukseshapus");
} else {
	header("location:halaman_petugas.php?pesan=gagal");
}


 ?>