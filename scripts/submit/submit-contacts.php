<?php
            if (isset($_POST["submit_contact"])) {

                $includeFile = "../../config/db.php";
                if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
                $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
            
                if ($conn->connect_error) {
                    die("La connexion à la base de données a échoué : " . $conn->connect_error);
                }

                session_set_cookie_params(3600);
                session_start();
                $date = date("d-m-Y H:i");
                $objet = $_POST["objet"];
                $nom = $_POST["nom"];
                $telephone = $_POST["telephone"];
                $email = $_POST["email"];
                $message = $_POST["message"];

                $sql = "INSERT INTO contacts (date, message, name, phone, email, objet) VALUES (?, ?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssssss", $date, $message, $nom, $telephone, $email, $objet);

                    
                if ($stmt->execute()) {

                    $_SESSION["success"] = "<p class='validation'>Votre message a été envoyé.</p>";
                    $conn->close();
                    header("Location: ../../pages/contact.php");
                    exit();
                } else {
                    $_SESSION["error"] = "<p class='error'>Votre message n'a pas été envoyé.</p>";
                    $conn->close();
                    header("Location: ../../pages/contact.php");
                    exit();
                }

            }
        ?>