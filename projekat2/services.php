<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "servis";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
  die("Povezivanje sa bazom podataka nije uspelo: " . mysqli_connect_error());
}

session_start();

$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$broj_telefona = $_POST['broj_telefona'];
$majstor = $_POST['majstor'];
$usluga = $_POST['usluga'];
$datum = $_POST['datum'];


$_SESSION['broj_telefona'] = $_POST['broj_telefona'];


$upit = "SHOW TABLES LIKE 'termini'";
    $rezultat = mysqli_query($conn, $upit);


    if (mysqli_num_rows($rezultat) == 0) {
        $upit = "CREATE TABLE termini (
            id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            ime VARCHAR(50) NOT NULL,
            prezime VARCHAR(50) NOT NULL,
            broj_telefona VARCHAR(20) NOT NULL,
            majstor VARCHAR(50) NOT NULL,
            usluga VARCHAR(50) NOT NULL,
            datum DATE NOT NULL
        )";
        mysqli_query($conn, $upit);
    }


    $upit = "INSERT INTO termini (ime, prezime, broj_telefona, majstor, usluga, datum)
             VALUES ('$ime', '$prezime', '$broj_telefona', '$majstor', '$usluga', '$datum')";
    mysqli_query($conn, $upit);

    mysqli_close($conn);

header("Location: http://localhost/klk2/confirmation.html");
exit();


?>
