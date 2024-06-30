<!DOCTYPE html>
<html lang="fr">

    <p class="footer-horaires">
    <ul>
            <li>Lundi : <span id="lundi"></span></li>
            <li>Mardi : <span id="mardi"></span></li>
            <li>Mercredi : <span id="mercredi"></span></li>
            <li>Jeudi : <span id="jeudi"></span></li>
            <li>Vendredi : <span id="vendredi"></span></li>
        </ul>
    </p>

    <?php
        $db_host = "mysql-garage-v-parrot.alwaysdata.net";
        $db_user = "326283";
        $db_pass = "Beta2k15";
        $db_name = "garage-v-parrot_ecf";
        $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

        if ($conn->connect_error) {
            die("La connexion à la base de données a échoué : " . $conn->connect_error);
        }

        // Jours de la semaine
        $jours = array("lundi", "mardi", "mercredi", "jeudi", "vendredi");

        // Récupération des horaires pour chaque jour
        foreach ($jours as $jour) {
            $sql = "SELECT $jour FROM horaires WHERE $jour IS NOT NULL";
            $result = $conn->query($sql);
    
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $horaires = $row[$jour];
                echo "<script>document.getElementById('$jour').textContent = '$horaires';</script>";
            } else {
                echo "Aucun horaire trouvé pour $jour.";
            }
        }

        $conn->close();
    ?>


</html>