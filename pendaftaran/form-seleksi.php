<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Edit Siswa |  SMKN 7 KOTA SERANG </title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body class="fixed">

    <div class="merged">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
      <a class="navbar-brand" href="index.php">
        <img src="gambar/logo.png" alt="logo" style="width:80px;"><b class="text-light"> SMKN 7 KOTSER</b>
    </a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-item nav-link" href="index.php">Home</a>
                    <a class="nav-item nav-link" href="form-daftar.php">Daftar Baru</a>
                    <a class="nav-item nav-link active" href="list-siswa.php">Pendaftar</a>
                </div>
            </div>
        </div>
    </nav>

<div class="card-body">
    <main class="container d-flex flex-column justify-content-center align-items-center vh-100">
        <div class="card border-0 shadow" id="frm-card">
            <div class="card-body p-5">
                <h1 class="mb-4 px-md-5 mx-auto" id="frm-daftar-title">Formulir <span>Seleksi Siswa</span></h1>
                <form action="proses-edit.php" method="POST" id="frm-daftar">
                    <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>">
                    <div class="mb-3 row">
                        <label for="nisn" class="col-md-2 col-form-label">nisn</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="nisn" name="nisn" placeholder="Pastikan NISN anda" value="<?php echo $siswa['nisn'] ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-md-2 col-form-label">Nama</label>
                        <div class="col-md-10">
                            <input type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $siswa['nama'] ?>"/>
                        </div>
                    </div>
                     <div class="mb-3 row">
                        <label for="tgl_lahir" class="col-md-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-md-10">
                            <input type="date" name="tgl_lahir" placeholder="Tanggal Lahir" value="<?php echo $siswa['tgl_lahir'] ?>"/>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat" class="col-md-2 col-form-label">Alamat</label>
                        <div class="col-md-10">
                            <textarea class="form-control" id="alamat" name="alamat" rows="3"><?php echo $siswa['alamat'] ?></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jenis_kelamin" class="col-md-2 col-form-label">Jenis Kelamin</label>
                        <?php $jk = $siswa['jenis_kelamin']; ?>
                        <div class="col-md-10 d-flex align-items-center">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="kelamin1" value="Laki-laki" <?php echo ($jk == 'Laki-laki') ? "checked": "" ?>>
                                <label class="form-check-label" for="kelamin1">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="kelamin2" value="Perempuan" <?php echo ($jk == 'Perempuan') ? "checked": "" ?>>
                                <label class="form-check-label" for="kelamin2">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label for="agama" class="col-md-2 col-form-label">Agama</label>
                        <?php $agama = $siswa['agama']; ?>
                        <div class="col-md-10"> 
                            <select class="form-select selectpicker" name="agama" id="agama-select">
                                <option <?php echo ($agama == 'Islam') ? "selected": "" ?> class="agama">Islam</option>
                                <option <?php echo ($agama == 'Kristen') ? "selected": "" ?> class="agama">Kristen</option>
                                <option <?php echo ($agama == 'Hindu') ? "selected": "" ?> class="agama">Hindu</option>
                                <option <?php echo ($agama == 'Budha') ? "selected": "" ?> class="agama">Budha</option>
                                <option <?php echo ($agama == 'Atheis') ? "selected": "" ?> class="agama">Atheis</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="sekolah_asal" class="col-md-2 col-form-label">Sekolah Asal</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="sekolah_asal" name="sekolah_asal" placeholder="Nama Sekolah" value="<?php echo $siswa['sekolah_asal'] ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nilai_akhir" class="col-md-2 col-form-label">nisn</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="nilai_akhir" name="nilai_akhir" placeholder="Pastikan NISN anda" value="<?php echo $siswa['nilai_akhir'] ?>">
                        </div>
                    </div>
                     <div class="mb-4 row">
                        <label for="jurusan" class="col-md-2 col-form-label">Jurusan</label>
                        <?php $jurusan = $siswa['jurusan']; ?>
                        <div class="col-md-10"> 
                            <select class="form-select selectpicker" name="jurusan" id="jurusan-select">
                                <option <?php echo ($jurusan == 'RPL') ? "selected": "" ?> class="jurusan">Rekayasa Perangkat Lunak</option>
                                <option <?php echo ($jurusan == 'MM') ? "selected": "" ?> class="jurusan">Multimedia</option>
                                <option <?php echo ($jurusan == 'AK') ? "selected": "" ?> class="jurusan">Akuntansi</option>
                                <option <?php echo ($jurusan == 'PB') ? "selected": "" ?> class="jurusan">Perbankan</option>
                                <option <?php echo ($jurusan == 'TM') ? "selected": "" ?> class="jurusan">Teknik Mesin</option>
                                <option <?php echo ($jurusan == 'TKR') ? "selected": "" ?> class="jurusan">Teknik Kendaraan Ringan</option>
                                <option <?php echo ($jurusan == 'MP') ? "selected": "" ?> class="jurusan">Manajemen Perkantoran</option>
                                <option <?php echo ($jurusan == 'MP') ? "selected": "" ?> class="jurusan">Agribisnis Perikanan Air Tawar</option>
                                <option <?php echo ($jurusan == 'MP') ? "selected": "" ?> class="jurusan">Kuliner</option>
                                <option <?php echo ($jurusan == 'MP') ? "selected": "" ?> class="jurusan"></option>


                            </select>
                        </div>
                    </div>
                     <div class="mb-3 row">
                        <label for="seleksi" class="col-md-2 col-form-label">Seleksi</label>
                        <?php $seleksi = $siswa['seleksi']; ?>
                        <div class="col-md-10 d-flex align-items-center">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="seleksi" id="seleksi" value="Diterima" <?php echo ($seleksi == 'Ditolak') ? "checked": "" ?>>
                                <label class="form-check-label" for="seleksi">Diterima</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="seleksi" id="seleksi" value="Ditolak" <?php echo ($seleksi == 'Ditolak') ? "checked": "" ?>>
                                <label class="form-check-label" for="seleksi">Ditolak</label>
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Simpan" name="simpan" class="btn btn-success fw-semibold" id="daftar-btn-2"></input>
                </form>
            </div>
        </div>
        </main>
       </div> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>