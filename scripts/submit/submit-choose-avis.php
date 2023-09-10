<?php
    session_set_cookie_params(3600);
    session_start();
    $db_host = "mysql-garage-v-parrot.alwaysdata.net";
    $db_user = "326283";
    $db_pass = "Beta2k15";
    $db_name = "garage-v-parrot_ecf";
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    if (isset($_POST['avis_id'])) {
        $id = $_POST['avis_id'];
    
        if (isset($_POST['submit_valid'])) {
            // Si le bouton "Valider" a été cliqué, mettez à jour la colonne "statut" à "valid"
            $sql = "UPDATE avis SET statut='valid' WHERE id=$id";

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
            $sql = "DELETE FROM avis WHERE id=$id";

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