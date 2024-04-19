<?php
include '../conn.php';
$data = [
    'gebruikersnaam' => $_POST['gebruikersnaam'],
    'wachtwoord' => $_POST['wachtwoord'],
    'id' => $_POST['id_product']
];
$sql = "UPDATE users SET gebruikersnaam=:gebruikersnaam, wachtwoord=:wachtwoord where id=:id";
$stmt= $connection->prepare($sql);
$stmt->execute($data);

header('Location: ../dashboard.php');
?>