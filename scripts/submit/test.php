<?php

    $db_host = "mysql-garage-v-parrot.alwaysdata.net";
    $db_user = "326283";
    $db_pass = "Beta2k15";
    $db_name = "garage-v-parrot_ecf";
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    $price = $_POST['price'];
    $year = $_POST['year'];
    $km = $_POST['km'];

    $sql = "SELECT * FROM vehicules WHERE 1=1"; // 1=1 est utilisé comme condition de base

    if (!empty($price)) {
        $sql .= " AND price <= $price";
    }

    if (!empty($year)) {
        $sql .= " AND year >= $year";
    }

    if (!empty($km)) {
        $sql .= " AND kilometrage <= $km";
    }

    // Exécuter la requête SQL
    $result = $conn->query($sql);

    // Créer un tableau pour stocker les résultats
    $resultsArray = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $resultsArray[] = $row;
        }
    }

    // Fermer la connexion à la base de données
    $conn->close();

    // Convertir les résultats en JSON
    $resultsJSON = json_encode($resultsArray);

    

    // Renvoyer les résultats au script JavaScript
    echo $resultsJSON;

    
?>