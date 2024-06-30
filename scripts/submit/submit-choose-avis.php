<?php
    session_set_cookie_params(3600);
    session_start();
    $includeFile = "../../config/db.php";
    if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    if (isset($_POST['avis_id'])) {
        $id = $_POST['avis_id'];
    
        if (isset($_POST['submit_valid'])) {
            // Si le bouton "Valider" a été cliqué, met à jour la colonne "state" à "valid"
            $sql = "UPDATE reviews SET state='valid' WHERE id=$id";

            if ($conn->query($sql) === TRUE)  {
                $_SESSION["success"] = "<p class='validation'>Avis validé.</p>";
                $conn->close();
                header("Location: ../../pages/dashboard-admin.php");
                exit();
            } else {
                $_SESSION["error"] = "<p class='error'>L'avis n'a pas pu etre validé.</p>";
                $conn->close();
                header("Location: ../../pages/dashboard-admin.php");
                exit();
            }

        } elseif (isset($_POST['submit_delete'])) {
            // Si le bouton "Refuser" a été cliqué, supprimez l'avis de la base de données
            $sql = "DELETE FROM reviews WHERE id=$id";

            if ($conn->query($sql) === TRUE)  {
                $_SESSION["success"] = "<p class='validation'>Avis refusé.</p>";
                $conn->close();
                header("Location: ../../pages/dashboard-admin.php");
                exit();
            } else {
                $_SESSION["error"] = "<p class='error'>L'avis n'a pas pu etre refusé.</p>";
                $conn->close();
                header("Location: ../../pages/dashboard-admin.php");
                exit();
            }
        }
    }

    $conn->close();
?>