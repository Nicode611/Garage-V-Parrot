<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/Garage-V-Parrot/assets/css/occasions.css">
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
                    <!-- Script d'affichage du véhicule -->
            <?php
                $db_host = "localhost";
                $db_user = "root";
                $db_pass = "";
                $db_name = "garage_v_parrot";
                $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
                // Vérification de la connection
                if ($conn->connect_error) {
                    die("La connexion à la base de données a échoué : " . $conn->connect_error);
                }
                // Récupération de tout les éléments de la table
                $sql = "SELECT id, modele, annee, kilometrage, prix, image, description FROM vehicules";
                // Exécution de la requete
                $result = $conn->query($sql);

                // Si résultat plus grand que 0 lignes
                if ($result->num_rows > 0) {
                    // Crée un var a chaque éléments
                    while ($row = $result->fetch_assoc()) {
                        $id = $row["id"];
                        $modele = $row["modele"];
                        $annee = $row["annee"];
                        $kilometrage = $row["kilometrage"];
                        $prix = $row["prix"];
                        $image = $row["image"];
                        $description = $row["description"]; ?>

                        <div class="vehicules">
                            <img class="vehicules-img" src="/Garage-V-Parrot/assets/images/images-vehicules/<?php echo $image ?>">
                        </div>
                        <?php
                    }
                } else {
                    echo "Aucun véhicule trouvé.";
                }
                $conn->close();
            ?>        
            </div>

            </div>
            <div class="vehicule-card">
                <img class="vehicule-img" src="/Garage-V-Parrot/assets/images/images-vehicules/skoda fabia.png" alt="">
                <div class="card-bottom">
                    <div>
                        <h3 class="vehicule-model">Skoda Fabia</h3>
                        <div>
                            <h4 class="vehicule-infos vehicule-year">2015</h4>
                            <h4 class="vehicule-infos vehicule-km">165 000 km</h4>
                        </div>
                    </div>
                    <p class="vehicule-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque libero urna, blandit pellentesque arcu at, ornare vehicula velit. Praesent tortor dolor, consequat at elementum ut, sollicitudin vitae enim.</p>
                    <h3 class="vehicule-price">12 500 €</h3>
                </div>
            </div>
        </div>
    </div>
</html>