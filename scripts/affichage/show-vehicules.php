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
$result = $conn->query($sql);
$data = array();

// Si résultat plus grand que 0 lignes
if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $modele = $row["modele"];
            $annee = $row["annee"];
            $kilometrage = $row["kilometrage"];
            $prix = $row["prix"];
            $image = $row["image"];
            $description = $row["description"]; ?>

            <div class="vehicules">
                <img class="vehicules-img" src="<?php
                        $current_page = $_SERVER['REQUEST_URI'];
                        $page_name = basename($current_page);
                        if ($page_name == "index.php") {
                            echo 'assets/images/images-vehicules/' . $image;
                        } else {
                            echo '../assets/images/images-vehicules/' . $image;
                        } ?>">
                    <div class="hided-infos" style="display: none;">
                        <span class="vehicules-model"><?php echo $modele ?></span>
                        <span class="vehicules-infos vehicules-year"><?php echo $annee ?></span>
                        <span class="vehicules-infos vehicules-km"><?php echo $kilometrage ?> km</span>
                        <span class="vehicules-description"><?php echo $description ?></span>
                        <span class="vehicules-price"><?php echo $prix ?> €</span>
                    </div>
            </div>
            <?php
        }
} else {
    echo "Aucun véhicule trouvé.";
}
$conn->close();
?>
