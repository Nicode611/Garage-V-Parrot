<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="Header/header.css">
    <title>Garage V. Parrot</title>
</head>
<body>

<?php
    require "Header/header.html";
?>

<main>
    <div class="section-presentation">
        <div class="presentation-glow"></div>
        <h2>Bienvenue au Garage V. Parrot !</h2>
        <p class="presentation-text">
        Nous sommes votre destination de confiance pour tout ce qui concerne votre voiture.<br><br>
        Avec 15 ans d'expertise, nous offrons des services de réparation, d'entretien et de vente de véhicules d'occasion. Chez nous, votre voiture est entre de bonnes mains.<br><br>

        Explorez notre site pour en savoir plus sur ce que nous faisons et n'hésitez pas à nous contacter.<br>
        Nous sommes là pour vous et votre voiture.
        </p>
    </div>

    <div class="dividing-bar"></div>
    
    <div class="section-vehicules-occasions">
    <div class="occasions-glow"></div>
        <div class="vehicules">
            <div>
                <h2>Véhicules d'occasions</h2>
                <p>Nos véhicules d’occasion disponibles à l’achat.</p>
            </div>
            <div class="vehicules-imgs">
                <img class="vehicules-img" src="img/peugeot 308.png">
                <img class="vehicules-img" src="img/audi rs4.png">
                <img class="vehicules-img" src="img/audi tt.png">
                <img class="vehicules-img" src="img/lamborghini urus.png">
                <img class="vehicules-img" src="img/mercedes amg.png">
                <img class="vehicules-img vehicule-active" src="img/skoda fabia.png">
            </div>
        </div>
        <div class="vehicule-card">
            <img class="vehicule-img" src="img/skoda fabia.png" alt="">
            <div class="card-bottom">
                <div class="topline">
                    <h3 class="vehicule-model">Skoda Fabia</h3>
                    <div>
                        <h4 class="vehicule-year vehicule-infos">2015</h4>
                        <h4 class="vehicule-km vehicule-infos">165 000 km</h4>
                    </div>
                </div>
                <p class="vehicule-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque libero urna, blandit pellentesque arcu at, ornare vehicula velit. Praesent tortor dolor, consequat at elementum ut, sollicitudin vitae enim.</p>
                <h3 class="vehicule-price">12 500 €</h3>
            </div>
        </div>
    </div>

    <div class="dividing-bar"></div>

    <div class="avis-container">
        <div class="shadow-left"></div>
        <div class="section-avis">
            <h2>Avis</h2>
            <p>Ils nous ont fait confiance</p>
            <div class="avis-caroussel">
                <div class="avis">
                    <p class="avis-text">Super garage ils ont bien réparé ma voiture ! C’était pas gagné </p>
                    <p class="avis-name">Monique L.</p>
                </div>
                <div class="avis">
                    <p class="avis-text">Super garage ils ont bien réparé ma voiture ! C’était pas gagné </p>
                    <p class="avis-name">Monique L.</p>
                </div>
                <div class="avis">
                    <p class="avis-text">Super garage ils ont bien réparé ma voiture ! C’était pas gagné </p>
                    <p class="avis-name">Monique L.</p>
                </div>
            </div>
        </div>
        <div class="shadow-right"></div>
    </div>

    <div class="dividing-bar"></div>

</main>

<?php
    require "Footer/footer.php";
?>

<script src="/Garage-V-Parrot/Scripts/script-selection-vehicule.js"></script>
</body>
</html>