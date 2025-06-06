<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servis automobila</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    <script src="script.js"></script>

</head>
<body>

<header class="header">

   <div class="container">

      <div class="row align-items-center justify-content-between">
      <a href="index.html" class="logo">Servis automobila.</span></a>

      <nav class="nav">
            <a href="index.html">Pocetna</a>
            <a href="about.html">O nama</a>
            <a href="services.html">Usluge</a>
            
      </nav>

      <a href="appointment.php" class="link-btn">Zakazi servis</a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</div>

<?php


$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "servis";


$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit'])) {
    $broj_telefona = $_POST['broj_telefona'];
    
    $sql = "SELECT * FROM termini WHERE broj_telefona LIKE '$broj_telefona'";
    $result = mysqli_query($conn, $sql);
}

?>


<section class="contact" id="contact">

    <h1 class="heading" style='margin-top: 20px;'>Prikaz termina:</h1>


        <?php
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {

                    
                    echo "<table class = 'tabela' style='margin-bottom: 20px;'>";
                    echo "<tr><br>";
                    echo "<td><span><b>Broj termina: </b></br></span></td>"; 
                    echo "<td>".$row['id']."</td>";
                    echo "<td><span><b>Ime i prezime: </b></br></span></td>"; 
                    echo "<td>".$row['ime']." ".$row['prezime']."</td> <br>";
                    echo "<td><span><b>Broj telefona: </b><br></span></td>"; 
                    echo "<td>".$row['broj_telefona']."</td>";
                    echo "<td><span><b>Majstor: </b></span></td>"; 
                    echo "<td>".$row['majstor']."</td>";
                    echo "<td><span><b>Usluga: </b></span></td>"; 
                    echo "<td>".$row['usluga']."</td>";
                    echo "<td><span><b>Datum: </b><br></span></td>"; 
                    echo "<td>".$row['datum']."</td>";
                    echo "</tr>";
                    echo "</table>";
                    echo "<a href='izmena.html' class='link-btn1'>Izmeni termin</a>  ";
                    echo "<a href='delete.html' class='link-btn1'>Otkazi termin</a>  ";

                
                }
            } else {
                echo "<h1 class='heading'>Nema rezultata </h1>" ;
                echo "<a href='search.html' class='link-btn' style='margin-bottom: 225px; display: flex; justify-content: center; align-items: center;'>Nazad na pretragu</a>  ";
            }

        ?>
      
</section>
 

<section class="footer">

   
    <div class="credit"> &copy; copyright <span>Servis automobila</span>  </div>
 
 </section>
    
</body>
</html>