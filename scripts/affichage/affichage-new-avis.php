<?php
    $includeFile = "../config/db.php";
    if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
                
    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    $sql = "SELECT id, message, name, state FROM reviews";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $message = $row["message"];
            $name = $row["name"];
            $state = $row["state"];
            
            if ($state == "waiting") {
            ?>

            <div class="avis">
                <div class="avis-container">
                    <span class="message"><?php echo $message ?></span><br>
                    <span class="nom"><?php echo $name ?></span>
                </div>
                <form class="form-avis" action="../scripts/submit/submit-choose-avis.php" method="POST">
                    <input type="hidden" name="avis_id" value="<?php echo $id ?>">

                    <input class="choose-valid" type="submit" name="submit_valid" value="Valider">
                    <input class="choose-delete" type="submit" name="submit_delete" value="Refuser">
                </form>
            </div><?php
            }
        }

        $conn->close();
    } else {
        echo "Pas d'avis";
    }
?>