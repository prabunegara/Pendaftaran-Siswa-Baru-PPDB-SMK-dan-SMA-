<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Siswa Baru | SMKN 7 KOTA SERANG </title>
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

    <!-- Button -->
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

    <main class="container d-flex flex-column justify-content-center align-items-center vh-100">
        <div class="card border-0 shadow" id="frm-card">
            <div class="card-body p-5">
                <h1 class="mb-4 px-md-5 mx-auto" id="frm-daftar-title">Formulir <span>Pendaftaran</span></h1>

                <form action="proses-pendaftaran.php" method="POST" id="frm-daftar">
                     <div class="mb-3 row">
                        <label for="nisn" class="col-md-2 col-form-label"> Nisn</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="nisn" name="nisn" placeholder="Nisn">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-md-2 col-form-label">Nama</label>
                        <div class="col-md-10">
                            <input type="text" name="nama" placeholder="Nama Lengkap"/>
                        </div>
                    </div>
                     <div class="mb-3 row">
                        <label for="tgl_lahir" class="col-md-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-md-10">
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Masukan">
                        </div>
                    </div>
                     <div class="mb-3 row">
                        <label for="alamat" class="col-md-2 col-form-label">Alamat</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="jln, RT/RW, Kec, Kota, Prov">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jenis_kelamin" class="col-md-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-md-10 d-flex align-items-center">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="kelamin1" value="Laki-laki">
                                <label class="form-check-label" for="kelamin1">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="kelamin2" value="Perempuan">
                                <label class="form-check-label" for="kelamin2">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label for="agama" class="col-md-2 col-form-label">Agama</label>
                        <div class="col-md-10"> 
                            <select class="form-select selectpicker" name="agama" id="agama-select">
                                <option selected class="agama">-</option>
                                <option class="agama">Islam</option>
                                <option class="agama">Kristen</option>
                                <option class="agama">Hindu</option>
                                <option class="agama">Budha</option>
                                <option class="agama">Atheis</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="sekolah_asal" class="col-md-2 col-form-label">Sekolah Asal</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="sekolah_asal" name="sekolah_asal" placeholder="Nama Sekolah">
                        </div>
                    </div>
                      <div class="mb-3 row">
                        <label for="nilai_akhir" class="col-md-2 col-form-label"> Nilai Akhir</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="nilai_akhir" name="nilai_akhir" placeholder="Masukan Nilai Akhir Kelas 09">
                        </div>
                    </div>
                     <div class="mb-4 row">
                        <label for="jurusan" class="col-md-2 col-form-label">jurusan</label>
                        <div class="col-md-10"> 
                            <select class="form-select selectpicker" name="jurusan" id="jurusan-select">
                                <option selected class="jurusan">-</option>
                                <option class="jurusan">Rekayasa Perangkat Lunak</option>
                                <option class="jurusan">MultiMedia</option>
                                <option class="jurusan">Akuntansi</option>
                                <option class="jurusan">Perbankan</option>
                                <option class="jurusan">Teknik Mesin</option>
                                <option class="jurusan">Teknik Kendaraan ringan</option>
                                <option class="jurusan">Manajemen Perkantoran</option>
                                <option class="jurusan">Agribisnis Perikanan Air Tawar</option>
                                <option class="jurusan">Kuliner</option>
         
                            </select>
                        </div>
                    </div>
                    <input type="submit" name="daftar" value="Daftar" class="btn btn-primary" id="daftar-btn-2"></input>
                </form>
            </div>
        </div>
    </main>

    </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>