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
$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$broj_telefona = $_POST['broj_telefona'];
$majstor = $_POST['majstor'];
$usluga = $_POST['usluga'];
$datum = $_POST['datum'];


$sql = "UPDATE termini SET ime='$ime', prezime='$prezime',broj_telefona='$broj_telefona', majstor='$majstor', usluga='$usluga', datum='$datum' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
	echo "Termin sa ID-jem " . $id . " je uspesno izmenjen!";
} else {
	echo "Greska prilikom izmene termina: " . mysqli_error($conn);
}

header("Location: http://localhost/klk2/izmena_conf.html");
mysqli_close($conn);


?>

