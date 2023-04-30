<?php
    include 'tugas no.3 - koneksi.php';
    if (isset($_POST['simpan'])) {
        $id_pg = $_POST['idpegawai'];
        $nama_pg = $_POST['namapegawai'];
        $no_pg = $_POST['nopegawai'];
        $email_pg = $_POST['email'];
        $jk_pg = $_POST['jkelamin'];
        $alamat_pg = $_POST['alamat'];
        $jabatan_pg = $_POST['jabatan'];

    // Menyimpan ke database
    $pegawai = mysqli_query($conn, "INSERT INTO datapegawai_revostore VALUES 
    ('$id_pg', '$nama_pg', '$jk_pg', '$email_pg', '$no_pg', '$alamat_pg', '$jabatan_pg')");
    if ($pegawai) {
        // pesan jika data tersimpan
        echo "<script>alert('Data Karyawan Berhasil Ditambahkan!'); window.location.href='tugas no.3 - awal.php'</script>";
      } else {
        // pesan jika data gagal disimpan
        echo "<script>alert('Data Karyawan Gagal Ditambahkan!!'); window.location.href='tugas no.3 - inputdata.php'</script>";
      }
    } else {
      // jika coba akses langsung halaman ini akan diredirect ke halaman index
      header('Location: tugas no.3 - awal.php');
    }
?>