<?php 
include 'koneksi.php';


$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tempat = $_POST['tempat'];
$tgl = $_POST['tanggal'];
$jk = $_POST['jenis_kel'];
$user = $_POST['username'];
$pass = $_POST['password'];
$tlp = $_POST['telepon'];
$alamat = $_POST['alamat'];
$foprof = $_FILES['foprof']['name'];


	// $tipe = array('png','jpg');
	// $nama =$_FILES['file']['name'];
	// $x = explode('.', $nama);
	// $ekstensi = strtolower(end($x));
	// $ukuran =$_FILES['file']['size'];
	// $tmp_file =$_FILES['file']['tmp_name'];
	// if (in_array($ekstensi, $tipe)== true) {
	// 	if ($ukuran < 1044070) {
	// 		move_uploaded_file($tmp_file, 'file/'.$nama);
	// 	$query_ = mysqli_query($konek,"UPDATE masyarakat SET (nik = '$nik', nama = '$nama', username = '$user', password = '$pass', telepon = '$tlp', alamat = '$alamat',foto = '$nama',ukuran = '$ukuran' )");
	// 	if ($query) {
	// 		header("location:halamanmasyarakat.php");
	// 	}
	// 	else{ echo "gagal mengupload gambar"; }
	// 	} 
	// 	else{ echo "ukuran terlalu besar"; }
	// } 
	// else { echo "ekstensi tidak sesuai"; }
	
	if($foprof != "") {
  $ekstensi_diperbolehkan = array('png','jpg'); 
  $x = explode('.', $foprof); 
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['foprof']['tmp_name'];   
  // $angka_acak     = rand(1,999);
  $nama_gambar_baru = $foprof; 
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
        	if ($ukuran < 2044070) {
        	
                move_uploaded_file($file_tmp, 'images/profil/'.$nama_gambar_baru);
                  $query = "UPDATE masyarakat SET nik = '$nik',  nama = '$nama', tempat_lahir = '$tempat', tgl_lahir = '$tgl', jenis_kel = '$jk', username = '$user',  password = '$pass',  telepon = '$tlp',  alamat = '$alamat',  foto = '$nama_gambar_baru' WHERE nik = '$nik' ";

                  $result = mysqli_query($konek, $query);
                  
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($konek).
                           " - ".mysqli_error($konek));
                  } else {
                
                   header("location:halaman_masyarakat.php?pesan=suksesupdate");
                  }
                  } 
                  else {
        		echo "Ukuran terlalu besar";
        	}

            } else {     
             
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='profil.php';</script>";
            }
} else {
   $query = "UPDATE masyarakat SET nik = '$nik',  nama = '$nama', tempat_lahir = '$tempat', tgl_lahir = '$tgl', jenis_kel = '$jk', username = '$user',  password = '$pass',  telepon = '$tlp',  alamat = '$alamat' WHERE nik = '$nik' ";
                  $result = mysqli_query($konek, $query);
                 
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($konek).
                           " - ".mysqli_error($konek));
                  } else {
                   
                    header("location:halaman_masyarakat.php?pesan=suksesupdate");
                  }
}



 ?>
	




