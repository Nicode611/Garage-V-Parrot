<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="Header/header.css">
    <link rel="stylesheet" href="Footer/footer.css">
    <title>Garage V. Parrot</title>
</head>
<body>

    <?php
        require "Header/header.html";
    ?>

<main>
    <div class="section-qui-sommes-nous">
        <h2>Qui Sommes-nous ?</h2>
        <div class="crew-sections">
            <div class="crew-section">
                <img class="crew-img" src="img/V.Parrot.jpg">
                <h3>V. Parrot</h3>
                <p>Gérant et créateur du garage depuis 2017.</p>
            </div>
            <div class="crew-section">
                <img class="crew-img" src="img/Lucie.jpg">
                <h3>Lucie</h3>
                <p>
                    Employée depuis 2018, s’occupe de la vente de 
                    véhicules d’occasions et des réparations moto.
                </p>
            </div>
            <div class="crew-section">
                <div class="background-glow"></div>
                <img class="crew-img" src="img/Christian.jpg">
                <h3>Christian</h3>
                <p>
                Employé depuis 2017, s’occupe de la réparation 
                automobile et la vente de véhicules d’occasions.
                </p>
            </div>
        </div>
    </div>

    <div class="dividing-bar"></div>

    <div class="section-vehicules-occasions">
        <div class="vehicules">
            <div>
                <h2>Véhicules d'occasions</h2>
                <p>Nos véhicules d’occasion disponibles à l’achat.</p>
            </div>
            <div class="vehicules-imgs">
                <a href="#"><img class="vehicules-img" src="img/peugeot 308.png"></a>
                <a href="#"><img class="vehicules-img" src="img/audi rs4.png"></a>
                <a href="#"><img class="vehicules-img" src="img/audi tt.png"></a>
                <a href="#"><img class="vehicules-img" src="img/lamborghini urus.png"></a>
                <a href="#"><img class="vehicules-img" src="img/mercedes amg.png"></a>
                <a href="#"><img class="vehicules-img vehicule-active" src="img/skoda fabia.png"></a>
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
    require "footer/footer.html";
    ?>

</body>
</html>