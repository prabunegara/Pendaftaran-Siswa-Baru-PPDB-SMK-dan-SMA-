
<?php
include("config.php");
?>
<html>
<head>
  <title>Data Siswa</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
<div class="container">
      <h2 class="text-center">Data Siswa</h2>
      <h4 class="text-center">SMKN 7 KOTA SERANG</h4>
      <a class="btn btn-primary mb-2" href="index.php"> << Kembali Ke Halaman Utama</a>
        <div class="data-tables datatable-dark">
          
             <table class="table" id="mauexport">
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
        
                            echo "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
          
        </div>
</div>
  
<script>
$(document).ready(function() {
    $('#mauexport').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy','csv','excel', 'pdf', 'print'
        ]
    } );
} );

</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

  

</body>

</html>