<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_revostore";

$conn = mysqli_connect($servername, $username, $password, $dbname);
//Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// CREATE TABLE
$sql = "CREATE TABLE datapegawai_revostore (
    id_pg VARCHAR(4) PRIMARY KEY,
    nama_pg VARCHAR(40) NOT NULL,
    jk_pg VARCHAR(20) NOT NULL,
    email_pg VARCHAR(50) NOT NULL,
    no_pg CHAR(15) NOT NULL,
    alamat_pg VARCHAR(50) NOT NULL,
    jabatan_pg VARCHAR(50) NOT NULL
)";
if(mysqli_query($conn, $sql)){
    echo "Database created successfully";
} else {
    echo "Error creating database: ".mysqli_error($conn);
}

mysqli_close($conn);
?>