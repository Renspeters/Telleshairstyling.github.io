<?php 
session_start();
// if($_POST["gebruikersnaam"] || $_POST["wachtwoord"] == ""){
//     header("Location: login.php");
//     exit();
// }

$gebruikersnaam = $_POST["gebruikersnaam"];
$wachtwoord = $_POST["wachtwoord"];

if ($gebruikersnaam == "admin" && $wachtwoord == "admin"){
    $_SESSION["username"] = $gebruikersnaam;
    header("Location: dashboard.php");

}
    else{
        header("Location: login.php");
    }
?>
