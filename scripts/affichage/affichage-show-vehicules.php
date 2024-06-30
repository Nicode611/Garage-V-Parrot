<?php
    
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    $sql = "SELECT id, model, year, kilometrage, price, image, description FROM vehicules";
    $result = $conn->query($sql);
    $data = array();

    if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $id = $row["id"];
                $model = $row["model"];
                $year = $row["year"];
                $kilometrage = $row["kilometrage"];
                $price = $row["price"];
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
                            <span class="vehicules-model"><?php echo $model ?></span>
                            <span class="vehicules-infos vehicules-year"><?php echo $year ?></span>
                            <span class="vehicules-infos vehicules-km"><?php echo $kilometrage ?> km</span>
                            <span class="vehicules-description"><?php echo $description ?></span>
                            <span class="vehicules-price"><?php echo $price ?> €</span>
                        </div>
                </div>
                <?php
            }
    } else {
        echo "Aucun véhicule trouvé.";
    }
    $conn->close();
?>

