<?php
            if (isset($_POST["submit_horaires"])) {

                session_start();
                $db_host = "mysql-garage-v-parrot.alwaysdata.net";
                $db_user = "326283";
                $db_pass = "Beta2k15";
                $db_name = "garage-v-parrot_ecf";
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