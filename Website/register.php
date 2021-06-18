<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <title>Account erstellen</title>
    <link rel="stylesheet" href="stylesheet/register.css">
  </head>
  <body>
    <?php
    if(isset($_POST["submit"])){
      require("mysql.php");
      $stmt = $mysql->prepare("SELECT * FROM accounts WHERE USERNAME = :user"); //Username überprüfen
      $stmt->bindParam(":user", $_POST["username"]);
      $stmt->execute();
      $count = $stmt->rowCount();
      if($count == 0){
        //Username ist freit
        if($_POST["pw"] == $_POST["pw2"]){
          //User anlegen
          $stmt = $mysql->prepare("INSERT INTO accounts (USERNAME, PASSWORD) VALUES (:user, :pw)");
          $stmt->bindParam(":user", $_POST["username"]);
          $hash = password_hash($_POST["pw"], PASSWORD_BCRYPT);
          $stmt->bindParam(":pw", $hash);
          $stmt->execute();
          echo "Dein Account wurde angelegt";
		  header("Location: login.php");
        } else {
          echo "Die Passwörter stimmen nicht überein";
        }
      } else {
        echo "Der Username ist bereits vergeben";
      }
    }
     ?>
	<div class="bild_login">
		<div class="Img_Login"><img src="bilder/frosch.png" alt="Login Logo"></div>
	</div>
    <form action="register.php" method="post" class="box">
	  <h1>Account erstellen</h1>
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="pw" placeholder="Passwort" required>
      <input type="password" name="pw2" placeholder="Passwort wiederholen" required>
      <input type="submit" name="submit" value="Account erstellen" >
	  <br><br>
	  <a href="login.php">Hast du bereits einen Account?</a>
    </form>
  </body>
</html>
