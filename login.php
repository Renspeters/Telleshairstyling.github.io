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
    <div class="headblock7">
        <div class="block8">
            <form class='login'name='login' method="POST">
            <h3>Account maken</h3>
        <div class="row">
            <p>Gebruikersnaam: </p>
            <input type="text" name="naam" required/>
        </div>
        <div class="row">
            <p>Wachtwoord: </p>
            <input type="text" name="leeftijd" required/>
        </div>
        <div class="row">
            <p>Algemene voorwaarden: </p>
            <input type="checkbox" name="av" required/>
        </div>
        <div class="row">
            <input type="submit" name="submit" value='Inloggen' required/>
        </div>
            </form>
        </div>
    </div>
    
    <div class="line2"></div>
    <div class="footer">
        <div class="footernav">
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