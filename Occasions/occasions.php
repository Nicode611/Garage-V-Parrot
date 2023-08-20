<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Occasions/occasions.css">
    <link rel="stylesheet" href="../Header/header.css">
    <title>Garage V. Parrot</title>
</head>
<body>
    
<?php
    require "../Header/header.html";
?>

<div class="section-vehicules-occasions">
        <div class="vehicules-container">
            <div>
                <h2>Véhicules d'occasions</h2>
                <p>Nos véhicules d’occasion disponibles à l’achat.</p>
            </div>
            <div class="vehicules-imgs">
                <img class="vehicules-img" src="../img/peugeot 308.png">
                <img class="vehicules-img" src="../img/audi rs4.png">
                <img class="vehicules-img" src="../img/audi tt.png">
                <img class="vehicules-img" src="../img/lamborghini urus.png">
                <img class="vehicules-img" src="../img/mercedes amg.png">
                <img class="vehicules-img vehicule-active" src="../img/skoda fabia.png">
            </div>
        </div>
        <div class="vehicule-card">
            <img class="vehicule-img" src="../img/skoda fabia.png" alt="">
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

<?php
    require "../Footer/footer.php";
?>

    <script src="../Scripts/script-selection-vehicule.js"></script>
</body>
</html>