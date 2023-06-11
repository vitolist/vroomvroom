<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700;900&display=swap" rel="stylesheet">
    <title>Vroom Vroom</title>
    <link rel="icon" type="image/x-icon" href="Logo.png">

    <script src="scripts/smooth_scroll.js"></script>

</head>

<body>

    <div class="slika">
        <img src="cars/croatia/SupraMK5-1.jpg" alt="SupraMK5-4">
    </div>
    <div id="nav">
        <div class="dropdown">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="about.php">O NAMA</a></li>
                <li><a href="index.php#auti">AUTI</a></li>
                <li><a href="index.php#lokacije">LOKACIJE</a></li>
                <li><a href="#">KONTAKT</a></li>
            </ul>
        </div>
        <ul class="navbar">
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.php">O NAMA</a></li>
            <li><a href="index.php#auti">AUTI</a></li>
            <li><a href="index.php#lokacije">LOKACIJE</a></li>
            <li><a href="#">KONTAKT</a></li>
        </ul>
    </div>

    <div class="container">
        <div class="form">
            <form action="">
                <label for="">Ime</label>
                <input placeholder="Ime" type="text">
                <label for="">Prezime</label>
                <input placeholder="Prezime" type="text">
                <label for="">E-mail</label>
                <input placeholder="E-mail" type="text">
                <label for="">Poruka</label>
                <textarea placeholder="Ostavite poruku" name="" id="" cols="30" rows="10" style="resize: none;"></textarea>
                <input type="submit" value="SUBMIT" onclick="">
            </form>
        </div>
    </div>

    <?php
    include 'footer.php';
    ?>

</body>

<script src="scripts/color_on_scroll.js"></script>

</html>