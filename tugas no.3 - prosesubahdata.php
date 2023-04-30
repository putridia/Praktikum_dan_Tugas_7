<?php
include("tugas no.3 - koneksi.php");

if (isset($_POST['ubah'])) {
    $id_pg = $_POST['idpegawai'];
    $nama_pg = $_POST['namapegawai'];
    $no_pg = $_POST['nopegawai'];
    $email_pg = $_POST['email'];
    $jk_pg = $_POST['jkelamin'];
    $alamat_pg = $_POST['alamat'];
    $jabatan_pg = $_POST['jabatan'];

    //query insert
    $sql = "UPDATE datapegawai_revostore SET id_pg='$id_pg', nama_pg='$nama_pg', no_pg='$no_pg', email_pg='$email_pg', jk_pg='$jk_pg', alamat_pg='$alamat_pg', jabatan_pg='$jabatan_pg' WHERE id_pg='$id_pg'";
    $pegawai = mysqli_query($conn, $sql);

    //cek query
    if( $pegawai ) {
        echo "<script>alert('Data Karyawan Berhasil Di Ubah!'); window.location.href='tugas no.3 - awal.php'</script>";
    } else {
        echo "<script>alert('Data Karyawan Gagal Di Ubah!!'); window.location.href='tugas no.3 - awal.php'</script>";
       die("Gagal Menyimpan Data");
    }
} else {
    header('Location: tugas no.3 - awal.php');
}
?>