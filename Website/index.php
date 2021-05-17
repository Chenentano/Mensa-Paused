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
	<link rel="stylesheet" href="stylesheet/Mensa.css">
	<meta http-equiv="refresh" content="5" >
    <title>Titel der Seite | Name der Website</title>
  </head>
  <body>
  
<!-- Header / MENÜ -->
<div class="grid-container">
  <div class="Header">
    <div class="Logout">
		<p><a href="logout.php">Logout</a></p>
	</div>
    <div class="Support">
		<p><a href="google">Support</a></p>
	</div>
    <div class="Home">
		<p><a href="google">Home</a></p>
	</div>
    <div class="Bild_Header">
		<h1>Tolles MD Logo.. WOW!</h1>
	</div>
  </div>
 <!-- Bilder / Menü ende  -->
  
  <!-- Kalenderwoche --> 
  <div class="KW">
    <div class="Icon_KW">
		<p>Icon für KW</p>
	</div>
    <div class="KW_Z">
		<p>Zurück_KW</p>
	</div>
    <div class="KW_A">
		<p>Auswahl_KW</p>
	</div>
    <div class="KW_V">
		<p>Vor_KW</p>
	</div>
  </div>
  <!-- Kalenderwoche -->
  
  
  <!-- Vorspeise --> 
  <div class="Vorspeise">
    <div class="Bild_V">
		<p>Vorpeise_Bild</p>
	</div>
    <div class="P_V">
		<p>Pfeil_V</p>
	</div>
  </div>
  <!-- Vorspeise ennde -->
  
  
  <!-- Hauptspeise -->
  <div class="Hauptspeise">
    <div class="Bild_H">
		<p>Bild_H</p>
	</div>
    <div class="P_H">
		<p>Pfeil_H</p>
	</div>
  </div>
  <!-- Hauptspeise ende -->
  
  <!-- Nachspeise -->
  <div class="Nachspeise">
    <div class="Bild_N">
		<p>Bild_N</p>
	</div>
    <div class="P_N">
		<p>Pfeil_N</p>
	</div>
  </div>
  <!-- Nachspeise ende -->
  
  <!-- Getränke -->
  <div class="Getränke">
    <div class="Bild_G">
		<p>Bild_G</p>
	</div>
    <div class="P_G">
		<p>Pfeil_G</p>
	</div>
  </div>
  <!-- Getränke ende -->
  
  <!-- Warenkorb header -->
  <div class="Warenkorb_Bild">
		<img src="bilder/warenkorb.png">
  </div>
  <!-- Warenkorb header ende -->
  
  <!-- Warenkorb -->
  <div class="Warenkorb">
	<p>Warenkorb Rechnung/Übersicht</p>
  </div>
  <!-- Warenkorb ende -->
  
  <!-- Summe  -->
  <div class="Summe">
	<p> Bezahlen </p>
  </div>
  <!-- Summe ende  -->
  
  <!-- Footer  -->
  <div class="Footer">
    <div class="Copyright">
		<p>&#169; Özkan & Bastian</p>
	</div>
    <div class="FAQ">
		<p><a href="google.com">Datenschutz</a></p>
	</div>
    <div class="Impressum">
		<p><a href="google.com">Impressum</a></p>
	</div>
  </div>
</div>
 <!-- Footer Ende  -->

  </body>
</html>
