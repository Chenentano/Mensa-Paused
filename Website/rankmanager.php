<?php

define("USER", 0);
define("MOD", 1);
define("ELTERN",2);
define("ADMIN", 3);



/**
 * getRank
 *
 * @param  mixed $username
 * @return void
 */
function getRank($username){
    require("mysql.php");
    $stmt = $mysql->prepare("SELECT * FROM accounts WHERE USERNAME = :user");
    $stmt->bindParam(":user", $username, PDO::PARAM_STR);
    $stmt->execute();
    $row = $stmt->fetch();
    return $row["SERVERRANK"];
}

/**
 * isBanned
 *
 * @param  mixed $username
 * @return void
 */
function isBanned($username){
    if(getRank($username) == -1){
        return true;
    } else {
        return false;
    }
}

?>