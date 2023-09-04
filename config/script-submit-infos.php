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
            if (isset($_POST["submit_infos"])) {
                // Récupération des valeurs du formulaire
                $id = $_SESSION["user_id"];
                $prenom = $_POST["prenom"];
                $nom = $_POST["nom"];
                $telephone = $_POST["telephone"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $confirmPassword = $_POST["confirm_password"];

                if ($password == $confirmPassword) {
                    $validPassword = $password;

                    $hash_mdp = password_hash($validPassword, PASSWORD_DEFAULT);

                    // Préparation de la requête SQL d'insertion
                    $sql = "UPDATE users SET prénom = '$prenom', nom = '$nom', telephone = '$telephone', email = '$email', mdp = '$hash_mdp' WHERE id = $id";

                    // Exécution de la requête
                    if ($conn->query($sql) === TRUE) {
                        ?> <span class="validation">Infos modifiées</span> <?php

                        $_SESSION["user_prénom"] = $prenom;
                        $_SESSION["user_nom"] = $nom;
                        $_SESSION["user_email"] = $email;
                        $_SESSION["user_mdp"] = $hash_mdp;
                        $_SESSION["user_telephone"] = $telephone;

                    } else {
                        ?> <span class="error">Erreur</span> <?php $conn->error;
                    }

                    } else {
                        ?> <span class="error">Les MDP ne correspondent pas</span> <?php
                    }
            }

            // Fermeture de la connexion à la base de données
            $conn->close();
        ?>