<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  die("Konekcija nije uspela: " . $conn->connect_error);
} 

$sql = "CREATE USER 'danilo'@'localhost' IDENTIFIED BY 'pass'";
if ($conn->query($sql) === TRUE) {
  echo "Korisnik je uspešno kreiran";
} else {
  echo "Greska prilikom kreiranja korisnika: " . $conn->error;
}


$sql = "GRANT ALL PRIVILEGES ON " . $dbname . ".* TO 'danilo'@'localhost'";
if ($conn->query($sql) === TRUE) {
  echo "Dozvole su uspešno dodeljene";
} else {
  echo "Greška prilikom dodeljivanja dozvola: " . $conn->error;
}

$conn->close();
?>