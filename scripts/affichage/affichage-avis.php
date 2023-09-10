<?php // Affichage nouveaux avis
    $db_host = "mysql-garage-v-parrot.alwaysdata.net";
    $db_user = "326283";
    $db_pass = "Beta2k15";
    $db_name = "garage-v-parrot_ecf";
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
                
    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    $sql = "SELECT id, avis, nom, statut FROM avis";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $avis = $row["avis"];
            $nom = $row["nom"];
            $statut = $row["statut"];?>

            <div class="avis">
                <div class="avis-container">
                    <span class="message"><?php echo $avis ?></span><br>
                    <span class="nom"><?php echo $nom ?></span>
                </div>
                <form class="form-avis" action="../scripts/submit/submit-choose-avis.php" method="POST">
                    <input type="hidden" name="avis_id" value="<?php echo $id ?>">

                    <input class="choose-valid" type="submit" name="submit_valid" value="Valider">
                    <input class="choose-delete" type="submit" name="submit_delete" value="Refuser">
                </form>
            </div><?php
        }

        $conn->close();
    } else {
        echo "Pas d'avis";
    }
?>