<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/occasions.css">
        <title>Occasions</title>
    </head>
    <?php 
        $current_page = $_SERVER['REQUEST_URI'];
        $page_name = basename($current_page);
    ?>    
    <div class="section-vehicules-occasions">
        <div class="occasions-glow"></div>
            <div class="vehicules">
                <div>
                    <h2>Véhicules d'occasions</h2>
                    <p>Nos véhicules d’occasion disponibles à l’achat.</p>
                </div>
                <?php
                    if ($page_name == "occasions.php") { ?>
                        <form id="form-filter">
                            <div class="filter-options">
                                <div>
                                    <label for="price">Prix</label>
                                    <input type="range" min="0" max="100000" name="price" id="price">
                                </div>
                                <div>
                                    <label for="year">Année</label>
                                    <input type="number" name="year" id="year">
                                </div>
                                <div>
                                    <label for="km">Kilometrage</label>
                                    <input type="number" name="km" id="km">
                                </div>
                            </div>
                            <button type="button" id="filter">Appliquer le filtre</button>
                        </form>
                    <?php } ?>
                <div class="vehicules-imgs">
                    
                    <?php
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
                <button id="prevButton"><</button>
                <img class="vehicule-img" src="../assets/images/images-vehicules/<?php echo $image ?>" alt="">
                <div class="card-bottom">
                    <div>
                        <h3 class="vehicule-model"><?php echo $model ?></h3>
                        <div>
                            <h4 class="vehicule-infos vehicule-year"><?php echo $year ?></h4>
                            <h4 class="vehicule-infos vehicule-km"><?php echo $kilometrage ?> km</h4>
                        </div>
                    </div>
                    <p class="vehicule-description"><?php echo $description ?></p>
                    <h3 class="vehicule-price"><?php echo $price ?> €</h3>
                </div>
                <button id="nextButton">></button>
            </div>
        </div>
    </div>
</html>