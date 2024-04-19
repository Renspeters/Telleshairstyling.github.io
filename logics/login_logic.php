<?php 
session_start();
include '../conn.php';


$gebruikersnaam = $_POST["gebruikersnaam"];
$wachtwoord = $_POST["wachtwoord"];




$stmt = $connection->prepare("SELECT * FROM users WHERE gebruikersnaam=:user AND wachtwoord=:pass");
$stmt->execute(['user' => $gebruikersnaam, 'pass' => $wachtwoord]);
$user = $stmt->fetch();


if ($user){
    $_SESSION["username"] = $gebruikersnaam;
    header("Location: ../dashboard.php");

}
    else{
        header("Location: x.php");
    }
    
?>
