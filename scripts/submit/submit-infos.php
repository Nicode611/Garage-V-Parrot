<?php
    session_start();
            if (isset($_POST["submit_infos"])) {

                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "garage_v_parrot";
                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("La connexion à la base de données a échoué : " . $conn->connect_error);
                }
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

                        $_SESSION["user_prénom"] = $prenom;
                        $_SESSION["user_nom"] = $nom;
                        $_SESSION["user_email"] = $email;
                        $_SESSION["user_mdp"] = $hash_mdp;
                        $_SESSION["user_telephone"] = $telephone;
                        
                        $_SESSION["success"] = "<p class='validation'>Le formulaire a été soumis avec succès.</p>";
                        $conn->close();
                        header("Location: /Garage-V-Parrot/pages/dashboard-admin.php");
                        exit();
                    } else {
                        $_SESSION["error"] = "<p class='error'>Le formulaire n'a pas été soumis avec succès.</p>";
                        $conn->close();
                        header("Location: /Garage-V-Parrot/pages/dashboard-admin.php");
                        exit();
                    }

                    } else {
                        $_SESSION["error_message"] = "<p class='error'>Le formulaire n'a pas été soumis avec succès.</p>";
                        $conn->close();
                        header("Location: /Garage-V-Parrot/pages/dashboard-admin.php");
                        exit();
                    }
            }
            
        ?>

