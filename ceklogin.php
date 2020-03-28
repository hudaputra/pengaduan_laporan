<?php 
session_start();

include 'koneksi.php';
 $user = $_POST['username'];
 $pass = $_POST['password'];

 $query = mysqli_query($konek,"SELECT * FROM petugas WHERE username = '$user' AND password = '$pass' ");
 $cek = mysqli_num_rows($query);
 $query_mas = mysqli_query($konek,"SELECT * FROM masyarakat WHERE username ='$user' AND password = '$pass' ");
 $nikk = mysqli_query($konek,"SELECT nik FROM masyarakat WHERE username ='$user' AND password = '$pass'");
 $cek_mas = mysqli_num_rows($query_mas);
 $id_pet = mysqli_query($konek,"SELECT id_petugas FROM petugas WHERE username = '$user' AND password = '$pass' ");

 if ($cek>0) {
 	$data = mysqli_fetch_assoc($query);
 	if ($data['level']=="admin") {

 		$_SESSION['username'] = $user;
 		$_SESSION['level'] = "admin";

 		header("location: halaman_admin.php");
 	}
  
  else if ($data['level']=="petugas") {

  	$_SESSION['username'] = $user;
  	$_SESSION['password'] = $pass;
  	$_SESSION['id_petugas'] = $id_pet;
  	$_SESSION['level'] = "petugas";
  	header("location: halaman_petugas.php");
  	
  }
   else{
 	header("location:index.php?pesan=gagal");
 }

 }
 else{
 	header("location:index.php?pesan=gagal");
 }

 if ($cek_mas>0) {
 	$data_mas = mysqli_fetch_assoc($query_mas);
 	if ($data_mas['username']) {
 		
 		$_SESSION['username'] = $user;
 		$_SESSION['password'] = $pass;
 		$_SESSION['nama'] = $nama;
 		$_SESSION['nik'] = $nikk;
 		$nik = mysqli_query($konek,"SELECT nik FROM masyarakat WHERE username = '$user' AND password = '$pass' ");
 		header("location:halaman_masyarakat.php?pesan=sukses");
 	} else {
 		header("location: index.php?pesan=gagal");
 	}
 	
 } 
  
 


 ?>