<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
	
	// ambil data dari formulir
	$nisn = $_POST['nisn'];
	$nama = $_POST['nama'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];
	$sekolah = $_POST['sekolah_asal'];
	$nilai_akhir = $_POST['nilai_akhir'];
	$jurusan = $_POST['jurusan'];
	
	// buat query
	$sql = "INSERT INTO calon_siswa (nisn, nama, tgl_lahir, alamat, jenis_kelamin, agama, sekolah_asal, nilai_akhir, jurusan) VALUE ('$nisn', '$nama', '$tgl_lahir', '$alamat', '$jk', '$agama', '$sekolah', '$nilai_akhir', '$jurusan')";
	$query = mysqli_query($db, $sql);
	
	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: list-siswa.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: index.php?status=gagal');
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
