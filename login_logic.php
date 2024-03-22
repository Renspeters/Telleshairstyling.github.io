<?php 
session_start();
include 'conn.php';

// if($_POST["gebruikersnaam"] || $_POST["wachtwoord"] == ""){
//      header("Location: login.php");
//      exit();
//  }

$gebruikersnaam = $_POST["gebruikersnaam"];
$wachtwoord = $_POST["wachtwoord"];




$stmt = $connection->prepare("SELECT * FROM users WHERE gebruikersnaam=:user AND wachtwoord=:pass");
$stmt->execute(['user' => $gebruikersnaam, 'pass' => $wachtwoord]);
$user = $stmt->fetch();


if ($gebruikersnaam == "admin" && $wachtwoord == "admin"){
    $_SESSION["username"] = $gebruikersnaam;
    header("Location: dashboard.php");

}
    else{
        header("Location: login.php");
    }
    
?>
