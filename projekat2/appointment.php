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
      <a href="index.html" class="logo">Servis automobila</span></a>

      <nav class="nav">
            <a href="index.html">Pocetna</a>
            <a href="about.html">O nama</a>
            <a href="services.html">Usluge</a>
          
      </nav>

      <a href="appointment.html" class="link-btn">Zakazi servis</a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</div>

<section class="contact" id="contact">

   <h1 class="heading">Zakazi termin</h1>

   <form action="services.php" method="post">
      <span>Ime:</span>
      <input type="text" id="ime" name="ime" placeholder="Unesite ime" class="box" required>
      <span>Prezime :</span>
      <input type="text" id="prezime" name="prezime" placeholder="Unesite prezime" class="box" required>
      <span>Broj telefona :</span>
      <input type="number"  id="broj_telefona" name="broj_telefona" placeholder="Unesite broj telefona" class="box" required>
      <label for="majstor">Majstor: </label>
      <select id="majstor" name="majstor" class="box">
        <option value="Nikola Petrovic" name="majstor" class="box"> Nikola Petrovic</option>
        <option value="Jovan Markovic" name="majstor" class="box"> Jovan Markovic</option>
        <option value="Maja Jankovic" name="majstor" class="box"> Maja Jankovic</option>
        <option value="Milica Djordjevic" name="majstor" class="box"> Milica Djordjevic</option>
    </select>
    
    <label for="usluga">Usluga: </label>
    <select id="usluga" name="usluga" class="box">
        <option value="Veliki servis" name="usluga" class="box"> Veliki servis</option>
        <option value="Popravka trapa" name="usluga" class="box"> Popravka trapa</option>
        <option value="Elektronska dijagnostika" name="usluga" class="box"> Elektronska dijagnostika</option>
        <option value="Zamena kocionih diskova" name="usluga" class="box">Zamena kocionih diskova</option>
    </select>

      <span>Datum :</span>
      <input type="datetime-local"  id="datum" name="datum" class="box" required>
      <input type="submit" value="Zakazi" name="submit" class="link-btn">
   </form>  

</section>

<section class="footer">


    <div class="credit"> &copy; copyright <span>Servis Automobila</span>  </div>
 
 </section>
    
</body>
</html>