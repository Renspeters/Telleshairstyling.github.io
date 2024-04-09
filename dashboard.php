<?php
session_start();

    if (!isset($_SESSION["username"])){
        header("Location: login.php");
        exit();
    }
    echo "Welkom op het dashboard " . ($_SESSION["username"]);

include 'conn.php';
    $stmt = $connection->prepare("SELECT * FROM booking2");
    $stmt->execute();
    $data = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <script src="/telleshairstyling/java/telles.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/f476c3b64c.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <title>Telles Hairstyling</title>
</head>
<body>
<div class="header">
        <div class="navbar">
            <a href="index.php"><img class="logo" src="images/TellesHairstyling-logozwart.webp"></a>
            <a href="index.php" class="home">Home</a>
            <a href="gallery.php" class="gallery">Gallerij</a>
            <a href="about.php" class="about">About</a>
            <a href="contact.php" class="contact">Contact</a>
            <a href="booking.php" class="contact">Boeken</a>
            <a href="login.php" class="contact">Login</a>
        </div>
    </div>
    <div class="update">
    <?php
    // $stmt = $connection->prepare("SELECT * FROM booking2");
    // $stmt->execute();
    // $data = $stmt->fetch();

    foreach ($data as $row){
        echo $row['behandeling'];
        echo "<a href='product_update.php?id=".$row['id']."'>Update</a>";
        echo "<a href='product_delete.php?id=".$row['id']."'>Delete</a>";
    }
    

    ?>
</div>
</body>
</html>