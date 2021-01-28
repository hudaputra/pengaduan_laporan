<?php
session_start();
include 'koneksi.php';

$nama = $_POST['nama'];
$id_peng = $_POST['id_pengaduan'];
$tgl = $_POST['tanggal'];
$tanggapan = $_POST['tanggapan'];
$id_pet = $_POST['id_petugas'];

$query = mysqli_query($konek, "INSERT INTO tanggapan VALUES ('','$id_peng','$tgl','$tanggapan (Petugas : $nama)','$id_pet')");
mysqli_query($konek, "UPDATE pengaduan SET status='selesai' WHERE id_pengaduan='$id_peng' ");

if ($query) {
	header("location:halaman_petugas.php?pesan=suksess");
} else {
	echo "gagal kirim tanggapan";
}
