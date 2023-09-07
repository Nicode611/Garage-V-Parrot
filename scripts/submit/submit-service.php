<?php
// Vérifie si le formulaire a été soumis
if (isset($_POST["submit_service"])) { 

    session_start();
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
        $target_directory = "/Applications/XAMPP/xamppfiles/htdocs/Garage-V-Parrot/assets/images/images-services";
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
                    $_SESSION["success"] = "<p class='validation'>Le service a été ajouté.</p>";
                    $conn->close();
                    header("Location: /Garage-V-Parrot/pages/dashboard-admin.php");
                    exit();
                } else {
                    $_SESSION["error"] = "<p class='error'>Le service n'a pas été ajouté.</p>";
                    $conn->close();
                    header("Location: /Garage-V-Parrot/pages/dashboard-admin.php");
                    exit();
                }

            } else {
                $_SESSION["error"] = "<p class='error'>Une erreur est survenue lors de l'upload de l'image.</p>";
                $conn->close();
                header("Location: /Garage-V-Parrot/pages/dashboard-admin.php");
                exit();
            }
        } else {
            $_SESSION["error"] = "<p class='error'>Mauvais format de l'image.</p>";
            $conn->close();
            header("Location: /Garage-V-Parrot/pages/dashboard-admin.php");
            exit();
        }
    }
}
?>
