<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="services.css">
    <link rel="stylesheet" href="../Header/header.css">
    <link rel="stylesheet" href="../Footer/footer.css">
    <title>Garage V. Parrot</title>
</head>
<body>
    
<?php
    require "../Header/header.html";
?>

    <main>
    <div class="glow"></div>
        <h2 class="main-title">Nos services</h2>
        <div class="services-section">
            <div class="service">
                <img class="service-img" src="../img/réparation auto.jpg" alt="">
                <div class="service-infos">
                    <h3 class="service-title">Réparation auto</h3>
                    <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis euismod scelerisque faucibus. Curabitur vitae arcu id odio placerat rhoncus </p>
                </div>
            </div>
            <div class="service">
                <img class="service-img" src="../img/nettoyage voitures.jpg" alt="">
                <div class="service-infos">
                    <h3 class="service-title">Lavage intégral auto</h3>
                    <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis euismod scelerisque faucibus. Curabitur vitae arcu id odio placerat rhoncus </p>
                </div>
            </div>
            <div class="service">
                <img class="service-img" src="../img/vente de véhicule d'occasion.jpg" alt="">
                <div class="service-infos">
                    <h3 class="service-title">Véhicules d’occasion</h3>
                    <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis euismod scelerisque faucibus. Curabitur vitae arcu id odio placerat rhoncus </p>
                </div>
            </div>
        </div>
    </main>

<?php
    require "../Footer/footer.html";
?>

</body>
</html>