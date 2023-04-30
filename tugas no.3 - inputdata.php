<?php
    include 'tugas no.3 - koneksi.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU TAMBAH DATA PEGAWAI</title>
</head>
<body>
<form class="form" method="post" action="tugas no.3 - prosesinputdata.php">       
    <h1 class="form">Masukan Data Pegawai</h1>
    <br>
    <label>ID Pegawai :</label>
    <input class="kotakform" type="text" name="idpegawai" placeholder="DP01">
    <br>
    <br>
    <label>Nama Pegawai :</label>
    <input class="kotakform" type="text" name="namapegawai" placeholder="Masukan Nama Pegawai">
    <br>
    <br>
    <label>Jenis Kelamin :</label>
    <select name="jkelamin" class="kotakform">
        <option></option>
        <option>Laki-Laki</option>
        <option>Perempuan</option>
    </select>
    <br>
    <br>
    <label>E-mail :</label>
    <input class="kotakform" type="text" name="email" placeholder="pxxxxx0@gmail.com">
    <br>
    <br>
    <label>No HP :</label>
    <input class="kotakform" type="text" name="nopegawai" placeholder="08xxxxxxxxxx">
    <br>
    <br>
    <label>Alamat :</label>
    <input class="kotakform" type="text" name="alamat" placeholder="Masukkan Alamat Pegawai">
    <br>
    <br>
    <label>Jabatan :</label>
    <input class="kotakform" type="text" name="jabatan" placeholder="Masukkan Jabatan Pegawai">
    <br>
    <br>
    <button class="button" type="buttonsim" name="simpan">SIMPAN DATA</button>
    <br>
    <br>
    </form>
    <a href="tugas no.3 - awal.php"><button class="buttonadd" type="">HALAMAN UTAMA</button></a>
</body>
</html>