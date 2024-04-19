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
            <a href="pages/gallery.php" class="gallery">Gallerij</a>
            <a href="pages/about.php" class="about">About</a>
            <a href="pages/contact.php" class="contact">Contact</a>
            <a href="pages/booking.php" class="contact">Boeken</a>
            <a href="pages/login.php" class="contact">Login</a>
        </div>
    </div>
    <div class="update">
   
   <?php
    // $stmt = $connection->prepare("SELECT * FROM booking2");
    // $stmt->execute();
    // $data = $stmt->fetch();

    foreach ($data as $row){
        echo "<div class='list-items'>";
        echo "<a class='update' href=''>" . $row['behandeling']. ': ' . "</a>";
        echo "<br>";
        echo "<br>";
        echo "<a class='button-list' href='product_update.php?id=".$row['id']."'>Update</a>";
        echo "<a class='space' >    </a>";
        echo "<a class='button-list' href='product_delete.php?id=".$row['id']."'>Delete</a>";
        echo "</div>";
    }
    ?>
    <form class='register_form' action='user_delete_logic.php' name='user_delete_logic'method="POST">
            <div class="back-sh">
                <a href="/index.php" class="backi"><-- Back</a>
            </div>
            <label>gebruiker verwijderen</label>
                <div class="row55">
                    <label>Id van user: </label>
                    <input type="text" name="id_user"placeholder="   id of user" required>
                </div>
                <div class="row55">
                    <input type="submit" value='delete user' class="button-log"/>
                </div>
            </form>
</div>
</body>
</html>