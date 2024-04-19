<?php
session_start();
include 'conn.php';

$stmt = $connection->prepare("SELECT * FROM booking2 WHERE id=:id");
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
    <form action='../logics/product_update_logic.php' name='product_update_logic.php' method="POST">
        <label>Id van product: </label>
        <input type="text" name="id_product" value="<?php echo $product['id']; ?>" requierd>
        <label>Naam van product: </label>
        <input type="text" name="behandeling" value="<?php echo $product['behandeling']; ?>" requierd>
        <label>Prijs van product: </label>
        <input type="text" name="prijs" value="<?php echo $product['prijs']; ?>" requierd>
        <input type="submit" value="update product">
    </form>
</body>
</html>