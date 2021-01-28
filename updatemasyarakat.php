<?php
include 'koneksi.php';
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$user = $_POST['username'];
$pass = $_POST['password'];
$telp = $_POST['telepon'];
$alamat = $_POST['alamat'];

$query = mysqli_query($konek, "UPDATE masyarakat SET nik = '$nik', nama = '$nama', telepon = '$telp', alamat = '$alamat' WHERE nik = '$nik'  ");
if (!$query) {
	echo "Maaf! data anda gagal dimasukkan";
} else {
	header("location: datausermas.php?pesan=sukses-update");
}
