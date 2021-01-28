<?php
include 'koneksi.php';
$id = $_POST['id_petugas'];
$nama = $_POST['nama'];
$user = $_POST['username'];
$pass = $_POST['password'];
$tel = $_POST['telepon'];

$query = mysqli_query($konek, "UPDATE petugas SET nama_petugas ='$nama', telepon='$tel' WHERE id_petugas = '$id'");
if (!$query) {
   echo "Maaf! data anda gagal dimasukkan";
} else {
   header('location:halaman_petugas.php?pesan=suksesupdate');
}
