<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/occasions.css">
        <link rel="stylesheet" href="assets/css/occasions.css">
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
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
                            <div>
                                <label for="price">Prix <br> maximum</label>
                                <input type="number" name="price" id="price">
                            </div>
                            <div>
                                <label for="year">Année <br> minimum</label>
                                <input type="number" name="year" id="year">
                            </div>
                            <div>
                                <label for="km">Kilometrage <br> maximum</label>
                                <input type="number" name="km" id="km">
                            </div>
                            <button type="button" id="filter">Appliquer le filtre</button>
                        </form>
                        <div class="show-vehicules"> <?php 
                            $includeFile = "../config/db.php";
                            if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
                            $includeFile = ("../scripts/affichage/affichage-show-vehicules.php");
                            if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; } ?> 
                        </div> 
                <?php } ?> 
                    
                <div class="vehicules-imgs" id="results">
                    
                    <?php
                        if ($page_name == "index.php" || $page_name == "") { ?> <script> console.log('validé'); </script> <?php
                            $includeFile = "config/db.php";
                            if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
                            $includeFile = ("scripts/affichage/affichage-show-vehicules.php");
                            if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
                        }
                    ?> 
                </div>
            </div>
            <div class="vehicule-card">
                <?php if ($page_name == "index.php") { ?> <button id="prevButton"><</button> <?php } ?>
                <img class="vehicule-img" 
                <?php 
                    if ($page_name == "index.php") { 
                        echo 'src="assets/images/images-vehicules/' . $image . '"'; 
                    } else { 
                        echo 'src="../assets/images/images-vehicules/' . $image . '"'; 
                    } 
                ?> 
                alt="">
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
                    <form class="vehicule-objet" 
                    <?php 
                        if ($page_name == "index.php") { 
                            echo 'action="pages/contact.php"'; 
                        } else { 
                            echo 'action="../pages/contact.php"'; 
                        } 
                    ?> 
                    method="POST">
                        <input class="vehicule-form-infos" type="text" id="vehiculeModel" name="model" value="<?php echo $model ?>">
                        <input class="vehicule-form-infos" type="text" id="vehiculeYear" name="year" value="<?php echo $year ?>">
                        <input class="vehicule-form-infos" type="text" id="vehiculeKm" name="km" value="<?php echo $kilometrage ?>">
                        <input type="submit" class="car-contact" name="car_contact" value="Contactez nous">
                    </form>
                </div>
                <?php if ($page_name == "index.php") { ?> <button id="nextButton">></button> <?php } ?>
            </div>
        </div>
    </div>
    
</html>