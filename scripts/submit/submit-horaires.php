<?php
            if (isset($_POST["submit_horaires"])) {

                session_set_cookie_params(3600);
                session_start();
                $includeFile = "../../config/db.php";
                if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
                $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

                if ($conn->connect_error) {
                    die("La connexion à la base de données a échoué : " . $conn->connect_error);
                }

                $jour = $_POST["jour"];
                $ouvertureMatin = $_POST["heureOuvertureMatin"];
                $fermetureMatin = $_POST["heureFermetureMatin"];
                $ouvertureApresMidi = $_POST["heureOuvertureApresMidi"];
                $fermetureApresMidi = $_POST["heureFermetureApresMidi"];

                // Formatage des heures au format demandé
                $horaires = "$ouvertureMatin - $fermetureMatin / $ouvertureApresMidi - $fermetureApresMidi";

                $sql = "UPDATE horaires SET $jour = '$horaires'";

                if ($conn->query($sql) === TRUE) {
                    $_SESSION["success"] = "<p class='validation'>Les horaires ont été modifiés.</p>";
                    $conn->close();
                    header("Location: ../../pages/dashboard-admin.php");
                    exit();
                } else {
                    $_SESSION["error"] = "<p class='error'>Les horaires n'ont pas été modifiés.</p>";
                    $conn->close();
                    header("Location: ../../pages/dashboard-admin.php");
                    exit();
                }
            }
        ?>