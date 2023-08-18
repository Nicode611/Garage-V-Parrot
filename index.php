<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="footer/footer.css">
    <link rel="stylesheet" href="index.css">
    <title>Garage V. Parrot</title>
</head>
<body>
<header>
    <div class="logo-container">
        <a href="#">
            <img class="logo" src="header/logo.png">
        </a>
    </div>
    <div class="nav-container">
        <nav>
            <ul class="nav-ul">
                <a href="#"><li class="active">ACCUEIL</li></a>
                <a href="#"><li>SERVICES</li></a>
                <a href="#"><li>OCCASIONS</li></a>
                <a href="#"><li>CONTACT</li></a>
            </ul>
        </nav>
    </div>
    <div class="connect-container">
        <a href="#">
            <p class="connect">Se connecter</p>
            <img class="connect-icon" src="header/user-icon.png">
        </a>
    </div>
</header>
<main>
    <div class="qui-sommes-nous">
        <h2>Qui Sommes-nous ?</h2>
        <div class="crew-sections">
            <div class="crew-section">
                <img class="crew-img" src="img/V.Parrot.jpg">
                <h3>V. Parrot</h3>
                <p>Gérant et créateur du garage depuis 2017.</p>
            </div>
            <div class="crew-section">
                <img class="crew-img" src="img/Lucie.jpg">
                <h3>V. Parrot</h3>
                <p>
                    Employée depuis 2018, s’occupe de la vente de 
                    véhicules d’occasions et des réparations moto.
                </p>
            </div>
            <div class="crew-section">
                <img class="crew-img" src="img/Christian.jpg">
                <h3>V. Parrot</h3>
                <p>
                Employé depuis 2017, s’occupe de la réparation 
                automobile et la vente de véhicules d’occasions.
                </p>
            </div>
        </div>
    </div>
    <div class="dividing-bar"></div>
    <div class="vehicules-occasions">
        <div class="vehicules">
            <h2>Véhicules d'occasions</h2>
            <p>Nos véhicules d’occasion disponibles à l’achat.</p>
            <div class="vehicules-imgs">
                <a href="#"><img class="vehicules-img" src="img/peugeot 308.png"></a>
                <a href="#"><img class="vehicules-img" src="img/audi rs4.png"></a>
                <a href="#"><img class="vehicules-img" src="img/audi tt.png"></a>
                <a href="#"><img class="vehicules-img" src="img/lamborghini urus.png"></a>
                <a href="#"><img class="vehicules-img" src="img/mercedes amg.png"></a>
                <a href="#"><img class="vehicules-img" src="img/skoda fabia.png"></a>
            </div>
        </div>
        <div class="vehicule-card">
            <img class="vehicule-img" src="img/skoda fabia.png" alt="">
            <div class="card-bottom">
                <div class="topline">
                    <h3 class="vehicule-model">Skoda Fabia</h3>
                    <div>
                        <h4 class="vehicule-year">2015</h4>
                        <h4 class="vehicule-km">165 000 km</h4>
                    </div>
                </div>
                <p class="vehicule-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque libero urna, blandit pellentesque arcu at, ornare vehicula velit. Praesent tortor dolor, consequat at elementum ut, sollicitudin vitae enim.</p>
                <h3 class="vehicule-price">12 500 €</h3>

            </div>
        </div>
    </div>

</main>

    <?php
    require "footer/footer.html";
    ?>

</body>
</html>