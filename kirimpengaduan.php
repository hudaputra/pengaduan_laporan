<?php
session_start();
include 'koneksi.php';

$tgl = $_POST['tanggal'];
$nama = $_POST['nama'];
$nikk = $_POST['nik'];
$isi = $_POST['pengaduan'];
$kat = $_POST['kategori'];
$foto = $_FILES['foto']['name'];

if ($foto != "") {
  $ekstensi_diperbolehkan = array('png', 'jpg');
  $x = explode('.', $foto);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['foto']['tmp_name'];
  // $nama_acak     = echo "pengaduan-laporan";
  $nama_gambar_baru = $tgl . '-' . $foto;
  if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
    if ($ukuran < 5044070) {
      move_uploaded_file($file_tmp, 'images/foto/' . $nama_gambar_baru);
      $query = mysqli_query($konek, "INSERT INTO pengaduan (id_pengaduan,tgl_pengaduan,nama,nik,isi_laporan,kategori,foto,status) VALUES ('','$tgl','$nama', '$nikk','$isi','$kat','$nama_gambar_baru','proses')");

      if (!$query) {
        die("Query gagal dijalankan: " . mysqli_errno($konek) .
          " - " . mysqli_error($konek));
      } else {

        header("location:halaman_masyarakat_baru.php?pesan=suksess");
      }
    } else {
      echo "Ukuran terlalu besar";
    }
  } else {

    echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='halaman_masyarakat_baru.php';</script>";
  }
} else {
  $query = mysqli_query($konek, "INSERT INTO pengaduan (id_pengaduan,tgl_pengaduan,nama,nik,isi_laporan,kategori,status) VALUES ('','$tgl','$nama', '$nikk','$isi','$kat','proses')");

  if (!$query) {
    die("Query gagal dijalankan: " . mysqli_errno($konek) .
      " - " . mysqli_error($konek));
  } else {
    header("location:halaman_masyarakat_baru.php?pesan=suksess");
  }
}
