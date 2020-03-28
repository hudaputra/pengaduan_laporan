<?php 
include 'koneksi.php';
// $id = $_POST['id'];
$nama = $_POST['nama'];
$user = $_POST['username'];
$pass = $_POST['password'];
$telp = $_POST['telepon'];
$level = $_POST['level'];

$query = mysqli_query($konek,"INSERT INTO petugas VALUES ('','$nama','$user','$pass','$telp','$level')");
if (!$query) {
	echo "Gagal Memasukkan Data, Mungkin ID sudah terdaftar";
} else {
	header("location: datauser.php?pesan=sukses");
}


 ?>