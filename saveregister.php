<?php
session_start();
include 'koneksi.php';

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'] ;
$tlp = $_POST['telepon'];
$alamat = $_POST['alamat'];

// $data = mysqli_query($konek,"SELECT * FROM masyarakat where nik = '$nik' AND username = '$username' ");


// if ($data>1) {
// 	header("location:register.php?pesan=gagal");
// } else {
	
// $query_in = mysqli_query($konek,"insert into masyarakat values('$nik','$nama','$username','$password','$tlp','$alamat','','','')");
//  	if ($query_in) {
//  		$_SESSION['pesan'] = 'Data berhasil di tambahkan';
//  		header("location:index.php?pesan=sukses");
//  	} else {
//  		header("location:register.php?pesan=gagal");
//  	}
//  	}


// memanggil file koneksi.php untuk melakukan koneksi database


	// membuat variabel untuk menampung data dari form
  // $nama_produk   = $_POST['nama_produk'];
  // $deskripsi     = $_POST['deskripsi'];
  // $harga_beli    = $_POST['harga_beli'];
  // $harga_jual    = $_POST['harga_jual'];
  $fotprof = $_FILES['fotprof']['name'];
  $ukuran = $_FILES['fotprof']['size'];


//cek dulu jika ada gambar produk jalankan coding ini
if($fotprof != "") {
  $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $fotprof); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['fotprof']['tmp_name'];   
  // $angka_acak     = rand(1,999);
  $nama_gambar_baru = $fotprof; //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
        	if ($ukuran < 3044070) {
        	
                move_uploaded_file($file_tmp, 'images/profil/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "INSERT INTO masyarakat (nik,nama,username,password,telepon,alamat,foto,ukuran,tipe) VALUES ('$nik','$nama','$username','$password','$tlp','$alamat','$nama_gambar_baru','$ukuran','$ekstensi')";
                  $result = mysqli_query($konek, $query);
                  // periska query apakah ada error
                  if(!$result){
                      // die ("Query gagal dijalankan: ".mysqli_errno($konek).
                      //      " - ".mysqli_error($konek));
                      header("location:register.php?pesan=gagal");
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    // echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
                    header("location:index.php?pesan=sukses");
                  }
                  } 
                  else {
        		echo "Ukuran terlalu besar";
        	}

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='register.php';</script>";
            }
}



 else {
   $query = "INSERT INTO masyarakat (nik,nama,username,password,telepon,alamat,foto) VALUES ('$nik','$nama','$username','$password','$tlp','$alamat',null)";
                  $result = mysqli_query($konek, $query);
                  // periska query apakah ada error
                  if(!$result){
                      // die ("Query gagal dijalankan: ".mysqli_errno($konek).
                      //      " - ".mysqli_error($konek));
                       header("location:register.php?pesan=gagal");
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                     header("location:index.php?pesan=sukses");
                  }
}


 ?>