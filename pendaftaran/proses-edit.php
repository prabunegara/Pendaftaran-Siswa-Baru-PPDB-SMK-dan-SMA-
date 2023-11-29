<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){
  
  // ambil data dari formulir
  $id = $_POST['id'];
  $nisn = $_POST['nisn'];
  $nama = $_POST['nama'];
  $tgl_lahir = $_POST['tgl_lahir'];
  $alamat = $_POST['alamat'];
  $jk = $_POST['jenis_kelamin'];
  $agama = $_POST['agama'];
  $sekolah = $_POST['sekolah_asal'];
  $nilai_akhir = $_POST['nilai_akhir'];
  $jurusan = $_POST['jurusan'];
  $seleksi = $_POST['seleksi'];
  
  // buat query update
  $sql = "UPDATE calon_siswa SET nisn='$nisn', nama='$nama', tgl_lahir='$tgl_lahir', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', sekolah_asal='$sekolah', nilai_akhir='$nilai_akhir', jurusan='$jurusan', seleksi='$seleksi' WHERE id=$id";
  $query = mysqli_query($db, $sql);
  
  // apakah query update berhasil?
  if( $query ) {
    // kalau berhasil alihkan ke halaman list-siswa.php
    header('Location: admin.php');
  } else {
    // kalau gagal tampilkan pesan
    die("Gagal menyimpan perubahan...");
  }
  
  
} else {
  die("Akses dilarang...");
}

?>
