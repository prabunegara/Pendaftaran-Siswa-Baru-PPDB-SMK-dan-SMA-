<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "daftar_siswa";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Query SQL untuk menghapus data berdasarkan ID
    $sql = "DELETE FROM calon_siswa WHERE id=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    
    // Redirect kembali ke halaman utama setelah data dihapus
    header("Location: admin.php");
    exit();
}

mysqli_close($conn);
?>


