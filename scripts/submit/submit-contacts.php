<?php session_start();
            if (isset($_POST["submit_contact"])) {

                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "garage_v_parrot";
                $conn = new mysqli($servername, $username, $password, $dbname);
            
                if ($conn->connect_error) {
                    die("La connexion à la base de données a échoué : " . $conn->connect_error);
                }

                $date = date("d-m-Y H:i");
                $nom = $_POST["nom"];
                $telephone = $_POST["telephone"];
                $email = $_POST["email"];
                $message = $_POST["message"];

                $sql = "INSERT INTO contacts (date, message, nom, telephone, email) VALUES (?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssss", $date, $message, $nom, $telephone, $email);

                    
                if ($stmt->execute()) {

                    $_SESSION["success"] = "<p class='validation'>Votre message a été envoyé.</p>";
                    $conn->close();
                    header("Location: /Garage-V-Parrot/pages/contact.php");
                    exit();
                } else {
                    $_SESSION["error"] = "<p class='error'>Votre message n'a pas été envoyé.</p>";
                    $conn->close();
                    header("Location: /Garage-V-Parrot/pages/contact.php");
                    exit();
                }

            }
        ?>