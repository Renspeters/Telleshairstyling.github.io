<?php
include 'conn.php';
$data = [
    'behandeling' => $_POST['behandeling'],
    'prijs' => $_POST['prijs'],
    'id' => $_POST['id_product']
];
$sql = "UPDATE booking2 SET behandeling=:behandeling, prijs=:prijs where id=:id";
$stmt= $connection->prepare($sql);
$stmt->execute($data);

header('Location: dashboard.php');
?>