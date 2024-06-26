<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/index.css">
    <script src="/telleshairstyling/java/telles.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/f476c3b64c.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <title>Telles Hairstyling</title>
    <?php
    include '../conn.php';

    
    ?>
</head>
<body>
    <div class="header">
        <div class="navbar">
            <a href="../index.php"><img class="logo" src="../images/TellesHairstyling-logozwart.webp"></a>
            <a href="../index.php" class="home">Home</a>
            <a href="../pages/gallery.php" class="gallery">Gallerij</a>
            <a href="../pages/about.php" class="about">About</a>
            <a href="../pages/contact.php" class="contact">Contact</a>
            <a href="../pages/booking.php" class="contact">Boeken</a>
            <a href="../pages/login.php" class="contact">Login</a>
        </div>
    </div>
    <div class="headblock8">
        
        <div class="block9">
            <div class="woman">
             <div class="vrouw"><h2>Boek hier uw afspraak</h2></div>
             <?php
             $stmt = $connection->query("SELECT * FROM booking2");
             while ($row = $stmt->fetch()){
                echo "<div class='products2'";
                echo "<h2>" . $row["behandeling"] . "</h2>";
                echo "<p>" . $row["prijs"] . "</p>";
                echo "</div>";
             }
            ?>
            </div>
            
        </div>
    </div>
    
    <div class="line2"></div>
    <div class="footer1">
        <div class="footernav1">
            <h4>©2024 - telleshairstyling</h4>
            <div class="socials">
                <div class="insta">
                 <i class="fa fa-instagram" style="font-size: 24px;"></i>
                 <h4>@telleshairstyling</h4>
                </div>
                <div class="facebook">
                 <i class="fa fa-facebook" style="font-size: 24px;"></i>
                 <h4>@TellesHairstyling</h4>
                </div>
            </div>
            <div class="kvkbtw">
                <h4>K.v.K nr 09196812</h4>
                <h4>B.T.W id NL001877111B79</h4>
            </div>
        </div>
    </div>
</body>
</html>