<?php
    $includeFile = "../../config/db.php";
    if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    $price = $_POST['price'];
    $year = $_POST['year'];
    $km = $_POST['km'];

    // On selectionne tous dans véhicule puis on ajuste
    $sql = "SELECT * FROM vehicules WHERE 1=1";

    if (!empty($price)) {
        $sql .= " AND price <= $price";
    }

    if (!empty($year)) {
        $sql .= " AND year >= $year";
    }

    if (!empty($km)) {
        $sql .= " AND kilometrage <= $km";
    }

    $result = $conn->query($sql);

    // Crée un tableau pour stocker les résultats
    $resultsArray = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $resultsArray[] = $row;
        }
    }

    $conn->close();

    // Converti les résultats en JSON
    $resultsJSON = json_encode($resultsArray);

    // Renvois les résultats au script JavaScript
    echo $resultsJSON;
?>