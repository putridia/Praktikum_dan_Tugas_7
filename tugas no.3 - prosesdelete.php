<?php
include("tugas no.3 - koneksi.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    //query hapus
    $sql = "DELETE FROM datapegawai_revostore WHERE id_pg = '$id'";
    $pegawai = mysqli_query($conn,$sql);

    //cek query
    if( $pegawai ){
        echo "<script>alert('Data Karyawan Berhasil Dihapus!'); window.location.href='tugas no.3 - awal.php'</script>";
    } else {
        echo "<script>alert('Data Karyawan Gagal Dihapus!!'); window.location.href='tugas no.3 - awal.php'</script>";
        die("gagal menghapus...");
    }
    }else {
    // jika coba akses langsung halaman ini akan diredirect ke halaman index
    header('Location: tugas no.3 - awal.php');
    }
?>