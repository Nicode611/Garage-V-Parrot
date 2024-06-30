<?php
if (isset($_POST["submit_service"])) { 

    session_set_cookie_params(3600);
    session_start();
    $includeFile = "../../config/db.php";
    if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    // Vérifie si un fichier a été téléchargé
    if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        $target_directory = "../../assets/images/images-services/";
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
                $title = $_POST["titre"];
                $description = $_POST["texte"];

                //Les marqueurs de position servent a éviter les injections SQL
                $sql = "INSERT INTO services (image, title, description) VALUES (?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sss", $image_path, $title, $description);

                if ($stmt->execute()) {
                    $_SESSION["success"] = "<p class='validation'>Le service a été ajouté.</p>";
                    $conn->close();
                    header("Location: ../../pages/dashboard-admin.php");
                    exit();
                } else {
                    $_SESSION["error"] = "<p class='error'>Le service n'a pas été ajouté.</p>";
                    $conn->close();
                    header("Location: ../../pages/dashboard-admin.php");
                    exit();
                }

            } else {
                // Vérifie si le répertoire de destination existe
                if (!is_dir($target_directory)) {
                        $_SESSION["error"] = "<p class='error'>Le répertoire de destination existe.</p>";
                        $conn->close();
                        header("Location: ../../pages/dashboard-admin.php");
                        exit();
                    } else {
                        $_SESSION["error"] = "<p class='error'>Le répertoire de destination n'existe pas et n'a pas pu être créé.</p>";
                        $conn->close();
                        header("Location: ../../pages/dashboard-admin.php");
                        exit();
                    }
} 

            }
        } else {
            $_SESSION["error"] = "<p class='error'>Mauvais format de l'image.</p>";
            $conn->close();
            header("Location: ../../pages/dashboard-admin.php");
            exit();
        }
    }

?>
