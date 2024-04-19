<?php 
session_start();
include '../conn.php';

$gebruikersnaam = $_POST["gebruikersnaam"];
$wachtwoord = $_POST["wachtwoord"];
$email = $_POST["mail"];


$stmt = $connection->prepare("INSERT INTO users (email, wachtwoord, gebruikersnaam) VALUES(:email, :wachtwoord, :gebruikersnaam)");
$stmt->bindParam(":gebruikersnaam", $gebruikersnaam);
$stmt->bindParam(":wachtwoord", $wachtwoord);
$stmt->bindParam(":email", $email);
$stmt->execute();

header("Location: ../login.php");
?>
