<?php 
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$user = $_POST['username'];
$pass = $_POST['password'];
$telp = $_POST['telepon'];
$level = $_POST['level'];

$query = mysqli_query($konek,"UPDATE petugas SET id_petugas = '$id', nama_petugas = '$nama', username = '$user', password = '$pass' ,telepon = '$telp', level = '$level' WHERE id_petugas = '$id' ");
if (!$query) {
	echo "gagal update data";
} else {
	header("location: datauser.php?pesan=suksess");
}



 ?>