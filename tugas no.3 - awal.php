<?php
include 'tugas no.3 - koneksi.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROGRAM DATA PEGAWAI</title>
</head>
<body>
    <h1>PROGRAM DATA KEPEGAWAIAN</h1>
    <br>
    
    <a href="tugas no.3 - awal.php">
    <button class="button button">REFRESH</button>
    </a>
    
    <a href="tugas no.3 - inputdata.php">
    <button class="button button">INPUT DATA</button>
    </a>
    <br>
    <br>
    <p>DATA PEGAWAI :</p>
    <!-- Menampilkan Data -->
    <table border="1" width="100%">
        <th>No.</th> 
        <th>ID Pegawai</th>
        <th>Nama Pegawai</th>
        <th>Jenis Kelamin</th>
        <th>E-mail</th>
        <th>No. Telepon</th>
        <th>Alamat</th>
        <th>Jabatan</th>
        <th>Ubah Data</th>
        <th>Hapus Data</th>
        <?php
    $pegawai = mysqli_query($conn, "SELECT * from datapegawai_revostore");
    $no=1;
    foreach ($pegawai as $row){
        echo "<tr>";
        echo "<th>$no</th>";
        echo "<td align = 'center'>".$row['id_pg']."</td>";
        echo "<td align = 'center'>".$row['nama_pg']."</td>";
        echo "<td align = 'center'>".$row['no_pg']."</td>";
        echo "<td align = 'center'>".$row['email_pg']."</td>";
        echo "<td align = 'center'>".$row['jk_pg']."</td>";
        echo "<td align = 'center'>".$row['alamat_pg']."</td>";
        echo "<td align = 'center'>".$row['jabatan_pg']."</td>";
        echo "<td align = 'center'><a href='tugas no.3 - formubahdata.php?id=".$row['id_pg']."'>Edit</a></td>"; 
        echo "<td align = 'center'><a href='tugas no.3 - prosesdelete.php?id=".$row['id_pg']."'>Hapus</a></td>"; 
        "</tr>";
        $no++;
    }
    ?>
    </table>
</body>
</html>