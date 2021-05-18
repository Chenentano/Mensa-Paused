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
	<link rel="stylesheet" href="stylesheet/mensa.css">
	<!-- <meta http-equiv="refresh" content="1" > -->
    <title>Titel der Seite | Name der Website</title>
  </head>
  <body>
  
<!-- Header / MENÜ -->
<div class="grid-container">

<!-- Header -->

  <div class="Header">
		<h1> Toller Header wie beim Fußball </h1>
  </div>
  <div class="Navigation">
    <div class="home">
		<div class="pfeil"><a href="index.php"><img src="bilder/home.png" alt="home"></div></a>
	</div>
    <div class="support">
		<div class="pfeil"><a href="https://www.md-systemhaus.de/kontakt"><img src="bilder/support.png" alt="support"></div></a>
	</div>
    <div class="logout">
		<div class="pfeil"><a href="logout.php"><img src="bilder/logout.png" alt="logout"></div></a>
	</div>
  </div>
  
  <!-- Header ende-->
  
  <!-- Header -->
  
   <!-- KW -->
  
  <div class="KW">
	<p>Kalenderwoche</p>
  </div>
    <div class="KW_Auswahl">
    <div class="KW_Z">
		<div class="pfeil"><img src="bilder/p_links.png" alt="pfeil_links"></div>
	</div>
    <div class="KW_A">
		<div class="pfeil"><img src="bilder/kwicon.png" alt="kwicon"></div>
	</div>
    <div class="KW_V">
		<div class="pfeil"><img src="bilder/p_rechts.png" alt="pfeil_rechts"></div>
	</div>
  </div>
  
    <!-- KW ende-->
	
	<!-- Bilder essen-->
  
  <div class="Vorspeise_Bild">
		<div class="pfeil"><img src="bilder/frosch.png" alt="pepe"></div>
  </div>
  <div class="Hauptgang_Bild">
		<div class="pfeil"><img src="bilder/frosch.png" alt="pepe"></div>
  </div>
  <div class="Nachspeise_Bild">
		<div class="pfeil"><img src="bilder/frosch.png" alt="pepe"></div>
  </div>
  <div class="Getränk_Bild">
		<div class="pfeil"><img src="bilder/frosch.png" alt="pepe"></div>
  </div>

  
  <!-- Bilder essen ende-->
  
  <!-- Pfeile-->
  
  <div class="P_V">
		<!-- <p>Pfeil</p> -->
		<div class="pfeil"><img src="bilder/pfeil.png" alt="pfeil"></div>
  </div>
  <div class="P_H">
		<div class="pfeil"><img src="bilder/pfeil.png" alt="pfeil"></div>		
  </div>
  <div class="P_N">
		<div class="pfeil"><img src="bilder/pfeil.png" alt="pfeil"></div>
  </div>
  <div class="P_G">
		<div class="pfeil"><img src="bilder/pfeil.png" alt="pfeil"></div>
  </div>
  
  <!-- pfeile ende-->
  
  <!-- warenkorb-->
  
  <div class="Warenkorb_Bild">
  	<p>Warenkorb_Bild</p>
  </div>
  <div class="Warenkorb">
    <div class="Heute_W">
      <p>Heute_W</p>
    </div>
    <div class="Vorpeise_W">
       <p>Vorspeise_W</p>     
    </div>
    <div class="Hauptspeise_W">
       <p>Hauptspeise_W</p>     
    </div>
    <div class="Nachspeise_W">
        <p>Nachspeise_W</p>    
    </div>
    <div class="Getränk_W">
        <p>Getränk_W</p>      
    </div>
  </div>
  <div class="Summe">
 		<p>Summe</p>   
  </div>
  <!-- warenkorb ende-->
  
  <!-- Platzhalter-->
  
  <div class="Platzhalter">
 		<p>Platzhalter</p> 
  </div>
  
  <!-- Platzhalter ende-->
  
  <!-- Dropmenu-->
  
  <div class="Drop_V">
		<p>Drop</p>  
  </div>
  <div class="Drop_H">
 		<p>Drop</p>   
  </div>
  <div class="Drop_N">
		<p>Drop</p>    
  </div>
  <div class="Drop_G">
		<p>Drop</p>    
  </div>
  
  <!-- Drop ende-->
  
  <!-- Footer-->
  
  <div class="Footer">
    <div class="Impressum">
		<p><a href="https://www.md-systemhaus.de/impressum">Impressum</a></p> 	
	</div>
    <div class="FAQ">
		<p><a href="https://www.md-systemhaus.de/datenschutz">Datenschutz</a></p> 	
	</div>
    <div class="Copyright">
		<p>&#169; Özkan & Bastian</p>
	</div>
  </div>
  
    <!-- Footer ende-->
  
</div>

  </body>
</html>
