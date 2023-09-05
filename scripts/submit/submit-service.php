<?php
// Vérifie si le formulaire a été soumis
if (isset($_POST["submit_service"])) { 

    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "garage_v_parrot";
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    // Vérifie si un fichier a été téléchargé
    if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        $target_directory =  $_SERVER['DOCUMENT_ROOT'] . "/Garage-V-Parrot/assets/images/images-services/"; // Le répertoire de destination de l'image
        $target_file = $target_directory . basename($_FILES["image"]["name"]);
        $imageFileName = basename($_FILES["image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
        // Vérifie si le fichier est une image
        $valid_extensions = array("jpg", "jpeg", "png", "gif");
        if(in_array($imageFileType, $valid_extensions)) {

            // Déplace l'image téléchargée vers le répertoire de destination
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                
                // Récupère les données du formulaire
                $image_path = $imageFileName;
                $nom = $_POST["titre"];
                $description = $_POST["texte"];

                // Prépare et exécute la requête SQL pour insérer les données (les marqueurs de position servent a éviter les injections SQL)
                $sql = "INSERT INTO services (image, nom, description) VALUES (?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sss", $image_path, $nom, $description);
                // Si insertion
                if ($stmt->execute()) {
                    ?> <span class="validation">Le service a été ajouté avec succès.</span> <?php ;
                } else {
                    ?> <span class="error">Erreur</span> <?php $stmt->error;
                }

                // Ferme la connexion à la base de données
                
                $stmt->close();
                $conn->close();
                header('Location: /Garage-V-Parrot/pages/dashboard-admin.php');
                exit;

            } else {
                echo "Une erreur est survenue lors de l'upload de l'image.";
            }
        }
    }
}
?>
