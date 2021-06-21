	<?php
		session_start();
		if(!isset($_SESSION["username"])){
		  header("Location: login.php");
		exit;
		}
	 ?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="stylesheet/Adminpanel.css">
	<!-- <meta http-equiv="refresh" content="1" > -->
    <title>Adminpanel</title>
  </head>
  <body>
  
<div class="grid-container">

<!-- header -->
  <div class="Header">
      <p> Header </p>
  </div>
  <div class="Navigation">
    <div class="Bestellungen">
      <p> Bestellung </p>

    </div>
    <div class="Produkte">
      <p> Produkte </p>

    </div>
    <div class="Benutzer">
      <p> Benutzer </p>

    </div>
    <div class="Kantinen">
      <p> Kantinen </p>

    </div>
    <div class="Abrechnungen">
      <p> Abrechnungen </p>

    </div>
    <div class="Allgemein">
      <p> Allgemein </p>

    </div>
    <div class="Logout">
      <p> Logout </p>

    </div>
  </div>
<!-- header ende -->


<!-- Oberfläche ende -->
  <div class="Oberfläche">
    
      <p> Oberfläche </p>
  </div>
<!-- Oberfläche ende -->


<!-- Footer ende -->
  <div class="Footer">
    <div class="Impressum">
      <p> Impressum </p>

    </div>
    <div class="Kontakt">
      <p> Kontakt </p>

    </div>
    <div class="Copyright">
      <p> Copyright </p>

    </div>
  </div>
<!-- Footer ende -->

<!-- Abstand_Leer -->
  <div class="Abstand_Links">
    

  </div>
  <div class="Abstand_Rechts">
    

  </div>
</div>
<!-- Abstand_Leer ende -->



  </body>
</html>
