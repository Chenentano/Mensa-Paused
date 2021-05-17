<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="stylesheet/login.css">
  </head>
  <body>
    <?php
    if(isset($_POST["submit"])){
      require("mysql.php");
      $stmt = $mysql->prepare("SELECT * FROM accounts WHERE USERNAME = :user"); //Username überprüfen
      $stmt->bindParam(":user", $_POST["username"]);
      $stmt->execute();
      $count = $stmt->rowCount();
      if($count == 1){
        //Username ist frei
        $row = $stmt->fetch();
        if(password_verify($_POST["pw"], $row["PASSWORD"])){
          session_start();
          $_SESSION["username"] = $row["USERNAME"];
          header("Location: index.php");
        } else {
          echo "Der Login ist fehlgeschlagen";
        }
      } else {
        echo "Der Login ist fehlgeschlagen";
      }
    }
     ?>

  
   <div class="bild_login">
	<div class="Img_Login"><img src="bilder/frosch.png" alt="Login Logo"></div>
  </div>

  <form class="box" action="login.php" method="post">
	<h1>Mensa+ Login</h1>
	<input type="text" name="username" placeholder="Benutzername/Email">
	<input type="password" name="pw" placeholder="Passwort">
	<input type="submit" name="submit" value="Einloggen">
    <a href="register.php">Noch keinen Account?</a>
  </form>
  
</html>
