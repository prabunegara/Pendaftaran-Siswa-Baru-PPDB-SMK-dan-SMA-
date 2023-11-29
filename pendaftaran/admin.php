<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru |  SMKN 7 KOTA SERANG</title>
     <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900' rel='stylesheet'>
</head>

<body>
    <div class="merged">
     <!-- Navbar -->
   <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
      <a class="navbar-brand" href="index.php">
        <img src="gambar/logo.png" alt="logo" style="width:80px;"><b class="text-light"> SMKN 7 KOTSER</b>
    </a>

    <!--  Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-item nav-link" href="index.php">Home</a>
                </div>
            </div>
        </div>
    </nav>
    
    <main class="container vh-100 py-5" id="list-siswa">
        <h1 class="mb-4 px-md-5 mx-auto" id="frm-daftar-title">Siswa <span>Terdaftar</span></h1>
        <div class="d-block mx-5">
            <nav class="d-flex justify-content-between">
                <nav class="d-flex">

                    <a href="export.php" class="btn btn-outline-success ml-1 "> Export</a>
                    <a href="form-daftar.php" class="btn btn-outline-primary" id="daftar-btn-3"> + Daftar Baru</a>
                </nav>
				
            </nav>
            <div class="d-flex justify-content-center mb-3">
                <table class="table" id="table-siswa">
                    <thead class="table-info text-center">
                        <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">nisn</th>
                            <th scope="col">Nama</th>
                            <th scope="col">tgl_lahir</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Kelamin</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Sekolah Asal</th>
                            <th scope="col">Nilai Akhir</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Seleksi</th>
                            <th scope="col">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM calon_siswa";
                        $query = mysqli_query($db, $sql);

                        while ($siswa = mysqli_fetch_array($query)) {
                            echo "<tr>";
                            echo  "<td class='text-center col-md-1'>". $siswa['id'] . "</th>";
                            echo "<td class='col-md-2'>". $siswa['nisn'] . "</td>";
                            echo "<td class='col-md-2'>". $siswa['nama'] . "</td>";
                            echo "<td class='col-md-2'>". $siswa['tgl_lahir'] . "</td>";
                            echo "<td class='col-md-2'>". $siswa['alamat'] . "</td>";
                            echo "<td class='col-md-2'>" . $siswa['jenis_kelamin'] . "</td>";
                            echo "<td class='col-md-2'>" . $siswa['agama'] . "</td>";
                            echo "<td class='col-md-2'>". $siswa['sekolah_asal'] . "</td>";
                            echo "<td class='col-md-2'>". $siswa['nilai_akhir'] . "</td>";
                            echo "<td class='col-md-2'>". $siswa['jurusan'] . "</td>";
                            echo "<td class='col-md-2'>". $siswa['seleksi'] . "</td>";
        
        
                            echo "<td class='text-center col-md-2'>";
                            echo "<a href='form-edit.php?id=".$siswa['id']. "' class='btn-sm mx-1 btn btn-warning mb-2' id='edit-btn'>Edit</a>";
                           echo "<a href='form-delete.php?id=".$siswa['id']. "' class='btn-sm mx-1 btn btn-danger'  id='delete-btn'>Del</a>";
                           echo "<a href='form-seleksi.php?id=".$siswa['id']. "' class='btn-sm mx-1 btn btn-success'  id='seleksi-btn'>Seleksi</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </div>
    </body>
</html>