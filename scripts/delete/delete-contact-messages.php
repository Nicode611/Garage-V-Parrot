<?php // Script de supression des messages de contact
    if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"])) {
        
        $includeFile = "../../config/db.php";
        if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
        $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

        if ($conn->connect_error) {
            die("La connexion à la base de données a échoué : " . $conn->connect_error);
        }

        // Récupére l'ID de la ligne de l'élément à supprimer depuis la requête GET
        $id = $_GET["id"];

        $sql = "DELETE FROM contacts WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            echo "requete effectuée";
            $conn->close();
        }
    }