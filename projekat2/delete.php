<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "servis";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
	die("Neuspesna konekcija: " . mysqli_connect_error());
}


$id = $_POST['id'];


$sql = "DELETE FROM termini WHERE id=$id";


if (mysqli_query($conn, $sql)) {
	header("Location: http://localhost/klk2/confirmation_del.html");
} else {
	header("Location: http://localhost/klk2/confirmation_del_n.html");
}


mysqli_close($conn);
?>