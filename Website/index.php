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
	  <link rel="stylesheet" href="stylesheet/index.css">
	   <!--  <meta http-equiv="refresh" content="1" >  Auto-refresh / Deaktiviert @Gerisbase -->
    <title>Mensa_Plus</title>
  </head>
  <body>
  
<!-- Header / MENÜ -->
<div class="grid-container">

<!-- Header -->
<script type="text/javascript">
<!--
  function PopUp()
  { 
    window.open('popup.html','PopUp','width=800,height=400'); 
  }
//-->
</script>
  <div class="Header">
	<!-- 	<img src="bilder/login_logo.gif"> -->
    <br>
    <br>
    <p class="Slogan">... Ihr IT-Systemhaus an der Nordseeküste</p>
  </div>
  <div class="Logo">
    <img src="bilder/schule.png" alt="Logo der Schule">
  </div>
  <div class="Navigation">
    <div class="home">
    <p>
      <?php
      if(isset($_SESSION['username'])){
      echo "Hallo {$_SESSION['username']}";
      }
      ?>
    <a href ="index.php"><p>Startseite</p></a>
    </p>
		<!-- <div class="pfeil"><p><a href="index.php"><img src="bilder/home.png" alt="home"></div></a></p> -->
	</div>
    <div class="support">
		<div class="pfeil"><p><a href="https://www.md-systemhaus.de/kontakt"><img src="bilder/support.png" alt="support">Support</div></a></p>
	</div>
    <div class="logout">
		<div class="pfeil"><p><a href="logout.php"><img src="bilder/logout.png" alt="logout">Logout</div></a></p>
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
		<div class="pfeil"><p><img src="bilder/p_links.png" alt="pfeil_links"></p></div>
	</div>
    <div class="KW_A">
		<div class="pfeil"><p><img src="bilder/kwicon.png" alt="kwicon"></p></div>
	</div>
    <div class="KW_V">
		<div class="pfeil"><p><img src="bilder/p_rechts.png" alt="pfeil_rechts"></div>
	</div>
  </div>
  
    <!-- KW ende-->
	
	<!-- 
    @@@@@
    TODO:@Gerisbase #5 Bilder einrichten/Anpassen
    @@@@@
    Bilder essen
    
    -->
  
  <div class="Vorspeise_Bild">
		<div class="essen"><img src="bilder/vorspeise.png" alt="pepe"></div>
  </div>
  <div class="Hauptgang_Bild">
		<div class="essen"><img src="bilder/vorspeise.png" alt="pepe"></div>
  </div>
  <div class="Nachspeise_Bild">
		<div class="essen"><img src="bilder/vorspeise.png" alt="pepe"></div>
  </div>
  <div class="Getränk_Bild">
		<div class="essen"><img src="bilder/vorspeise.png" alt="pepe"></div>
  </div>

  
  <!-- Bilder essen ende-->
  
  <!-- Pfeile-->
  
  <div class="P_V">
		<!-- <p>Pfeil</p> -->
		<div class="pfeil"><p><img src="bilder/pfeil.png" alt="pfeil"></p></div>
  </div>
  <div class="P_H">
		<div class="pfeil"><p><img src="bilder/pfeil.png" alt="pfeil"></p></div>		
  </div>
  <div class="P_N">
		<div class="pfeil"><p><img src="bilder/pfeil.png" alt="pfeil"></p></div>
  </div>
  <div class="P_G">
		<div class="pfeil"><p><img src="bilder/pfeil.png" alt="pfeil"></p></div>
  </div>
  
  <!-- pfeile ende-->
  
  <!-- warenkorb-->
  
  <div class="Warenkorb_Bild">
    <div class="Warenkorb_B"><p><img src="bilder/frosch.png" alt="warenkorb"></p></div>
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
  <body onload="PopUp()"> ... </body>

</html>
