<?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "garage_v_parrot";
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("La connexion à la base de données a échoué : " . $conn->connect_error);
            }

            // Traitement du formulaire lorsque l'utilisateur soumet les données
            if (isset($_POST["submit_horaires"])) {
                // Récupération des valeurs du formulaire
                $jour = $_POST["jour"];
                $ouvertureMatin = $_POST["heureOuvertureMatin"];
                $fermetureMatin = $_POST["heureFermetureMatin"];
                $ouvertureApresMidi = $_POST["heureOuvertureApresMidi"];
                $fermetureApresMidi = $_POST["heureFermetureApresMidi"];

                // Formatage des heures au format demandé
                $horaires = "$ouvertureMatin - $fermetureMatin / $ouvertureApresMidi - $fermetureApresMidi";

                // Préparation de la requête SQL d'insertion
                $sql = "UPDATE horaires SET $jour = '$horaires'";
                // $sql = "UPDATE horaires SET $jour = '$horaires'";

                // Exécution de la requête
                if ($conn->query($sql) === TRUE) {
                    ?> <span class="validation">Horaires inséré avec succés !</span> <?php
                } else {
                    ?> <span class="error">Erreur</span> <?php $conn->error;
                }
            }

            // Fermeture de la connexion à la base de données
            $conn->close();
        ?>