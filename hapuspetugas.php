<?php 
include 'koneksi.php';

$id =$_GET['id'];
$query=mysqli_query($konek,"DELETE FROM petugas WHERE id_petugas='$id'");
if (!$query) {
	echo "Data Gagal Dihapus";
} else {
	header("location:datauser.php");
}

 ?>