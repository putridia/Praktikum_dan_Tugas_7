<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_DB";

//Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//Create table
$sql = "INSERT INTO liga(kode, negara, champion)
	VALUES ('Jer', 'Jerman', '4')";

	if (mysqli_query($conn, $sql)){
		echo "New record created successfully";
	} else {
		echo "Error: ". $sql ."<br". mysqli_error($conn);
	}
$sql = "INSERT INTO liga(kode, negara, champion)
	VALUES ('Spa', 'Spanyol', '3')";

	if (mysqli_query($conn, $sql)){
		echo "New record created successfully";
	} else {
		echo "Error: ".$sql."<br".mysqli_error($conn);
	}

$sql = "INSERT INTO liga(kode, negara, champion)
	VALUES ('Eng', 'English', '3')";

	if (mysqli_query($conn, $sql)){
		echo "New record created successfully";
	} else {
		echo "Error: ".$sql."<br".mysqli_error($conn);
	}

mysqli_close($conn);
?>