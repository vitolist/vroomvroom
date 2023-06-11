<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
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
                <li><a href="#">HOME</a></li>
                <li><a href="about.php">O NAMA</a></li>
                <li><a href="#cars">AUTI</a></li>
                <li><a href="#lokacije">LOKACIJE</a></li>
                <li><a href="contact.php">KONTAKT</a></li>
            </ul>
        </div>
        <ul class="navbar">
            <li><a href="#">HOME</a></li>
            <li><a href="about.php">O NAMA</a></li>
            <li><a href="#cars">AUTI</a></li>
            <li><a href="#lokacije">LOKACIJE</a></li>
            <li><a href="contact.php">KONTAKT</a></li>
        </ul>
    </div>

    <div class="spacer" id="spacer"></div>

    <div class="container">
        <div id="cars">
            <h1>AUTI</h1>
            <div class="desc">
                <div>
                    <p>
                        Dobrodošli na našu stranicu za iznajmljivanje automobila! Bez obzira na vaše potrebe
                        prijevoza, mi vam pružamo idealno vozilo. Suradnja s vodećim rent-a-car tvrtkama osigurava
                        širok izbor automobila. Pronađite vozilo koje vam savršeno odgovara.
                        <br>
                        <br>
                        Naša platforma omogućava jednostavno pretraživanje, usporedbu cijena i rezervaciju vozila.
                        Pružamo konkurentne cijene, fleksibilne uvjete najma i vrhunsku uslugu. Iznajmite automobil
                        danas i uživajte u slobodi putovanja!
                        <br>
                        <br>
                        Vaše zadovoljstvo je naša misija, pridružite se tisućama zadovoljnih korisnika koji su iskusili
                        našu iznimnu uslugu iznajmljivanja automobila.
                    </p>
                    <a href="contact.html" class="contact-button"><span>Kontaktirajte nas</span></a>
                </div>
            </div>

            <h2 id="lokacije">HRVATSKA</h2>
            <div class="lista croatia">
                <img src="cars/croatia/Audi RS3 Vag Performance-1.jpg" alt="">
                <img src="cars/croatia/BMW E36 -14.jpg" alt="">
                <img src="cars/croatia/BMW E39-8.jpg" alt="">
                <img src="cars/croatia/BMW E60-2.jpg" alt="">
                <img src="cars/croatia/BMW M3C-12.jpg" alt="">
                <img src="cars/croatia/BMW M4 Blue-4.jpg" alt="">
                <img src="cars/croatia/C43 AMG-4.jpg" alt="">
                <img src="cars/croatia/E30 Aplina-11.jpg" alt="">
                <img src="cars/croatia/M2 Black-1.jpg" alt="">
                <img src="cars/croatia/SupraMK5-4.jpg" alt="">
            </div>

            <h2>IRSKA</h2>
            <div class="lista ireland">
                <img src="cars/ireland/Audi RS3 White-47.jpg" alt="">
                <img src="cars/ireland/BMW M3 F80 Comp (9 of 10).jpg" alt="">
                <img src="cars/ireland/E24 635 CSi (3 of 6).jpg" alt="">
                <img src="cars/ireland/Porsche Carrera 4S (3 of 11).jpg" alt="">
            </div>
        </div>
    </div>


    <?php
    include 'footer.php';
    ?>
</body>

<script src="scripts/color_on_scroll.js"></script>

</html>