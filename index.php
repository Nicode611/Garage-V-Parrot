<?php 
if ($_SERVER['REQUEST_URI'] == "/") {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="icon" href="logo.ico" type="image/x-icon">
    <title>Garage V. Parrot</title>
</head>
<body>
    

<?php
    $includeFile = "includes/header-index.php";
    if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
?>

<main>
    
    <!-- Présentation -->
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
    <!-- Occasions -->
    <?php
        $includeFile = "includes/vehicules.php";
        if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
    ?>
    <div class="dividing-bar"></div>
    <!-- Avis -->
    <div class="avis-container">
        <button id="prevBtn"><</button>
        <div class="shadow-left"></div>
        <div class="section-avis">
            <h2>Avis</h2>
            <p>Ils nous ont fait confiance</p>
            <div class="avis-caroussel">
                <?php
                    $includeFile = "scripts/affichage/affichage-index-avis.php";
                    if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
                ?>
            </div>
            <a href="pages/avis.php"><button id="ajoutAvis">Ajouter un avis</button></a>
        </div>
        <div class="shadow-right"></div>
        <button id="nextBtn">></button>
    </div>
</main>

<?php
    $includeFile = "includes/footer-index.php";
    if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
?>

<script src="assets/js/script-selection-vehicule-index.js"></script>
<script src="assets/js/script-avis-carousel.js"></script>
</body>
</html>