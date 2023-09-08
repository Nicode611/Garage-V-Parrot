<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/occasions.css">
        <title>Occasions</title>
    </head>    
    <div class="section-vehicules-occasions">
        <div class="occasions-glow"></div>
            <div class="vehicules">
                <div>
                    <h2>Véhicules d'occasions</h2>
                    <p>Nos véhicules d’occasion disponibles à l’achat.</p>
                </div>
                <div class="vehicules-imgs">
                    
                    <?php
                        $current_page = $_SERVER['REQUEST_URI'];
                        $page_name = basename($current_page);
                        if ($page_name == "index.php") {
                            $includeFile = ("scripts/affichage/show-vehicules.php");
                            if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
                        } else {
                            $includeFile = ("../scripts/affichage/show-vehicules.php");
                            if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
                        }
                        
                    ?>     
                </div>
            </div>
            <div class="vehicule-card">
                <img class="vehicule-img" src="../assets/images/images-vehicules/<?php echo $image ?>" alt="">
                <div class="card-bottom">
                    <div>
                        <h3 class="vehicule-model"><?php echo $modele ?></h3>
                        <div>
                            <h4 class="vehicule-infos vehicule-year"><?php echo $annee ?></h4>
                            <h4 class="vehicule-infos vehicule-km"><?php echo $kilometrage ?> km</h4>
                        </div>
                    </div>
                    <p class="vehicule-description"><?php echo $description ?></p>
                    <h3 class="vehicule-price"><?php echo $prix ?> €</h3>
                </div>
            </div>
        </div>
    </div>

    <script src="/Garage-V-Parrot/assets/js/script-selection-vehicule.js"></script>
</html>