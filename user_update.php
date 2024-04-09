<?php
session_start();
include 'conn.php';

$stmt = $connection->prepare("SELECT * FROM users WHERE id=:id");
$stmt->execute(['id' => $_GET['id']]);
$product = $stmt->fetch();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action='user_update_logic.php' name='product_update_logic.php' methode="POST">
        <label>Id van User: </label>
        <input type="text" name="id_product" value="<?php echo $product['id']; ?>" requierd>
        <label>Naam van User: </label>
        <input type="text" name="gebruikersnaam" value="<?php echo $product['gebruikersnaam']; ?>" requierd>
        <label>Wachtwoord: </label>
        <input type="text" name="wachtwoord" value="<?php echo $product['wachtwoord']; ?>" requierd>
        <input type="submit" value="update user">
    </form>
</body>
</html>