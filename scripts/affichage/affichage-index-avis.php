<?php
    $db_host = "mysql-garage-v-parrot.alwaysdata.net";
    $db_user = "326283";
    $db_pass = "Beta2k15";
    $db_name = "garage-v-parrot_ecf";
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    $sql = "SELECT avis, nom FROM avis";
    $result = $conn->query($sql);

    // Si résultat plus grand que 0 lignes
    if ($result->num_rows > 0) {
        // Crée un var a chaque éléments
        while ($row = $result->fetch_assoc()) {
            $avis = $row["avis"];
            $nom = $row["nom"];?>

            <div class="avis">
                <p class="avis-text"><?php echo $avis ?></p><br>
                <p class="avis-name"><?php echo $nom ?></p>
            </div>
            <?php
        }
    } else {
        echo "Aucun avis trouvé.";
    }
    $conn->close();
?>