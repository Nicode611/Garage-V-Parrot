<?php
            if (isset($_POST["submit_infos"])) {

                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "garage_v_parrot";
                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("La connexion à la base de données a échoué : " . $conn->connect_error);
                }
                
                session_start();
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

                    // $sql = "UPDATE users SET prénom = '$prenom', nom = '$nom', telephone = '$telephone', email = '$email', mdp = '$hash_mdp' WHERE id = $id"; (en attendant de regler le password_verify())
                    $sql = "UPDATE users SET prénom = '$prenom', nom = '$nom', telephone = '$telephone', email = '$email', mdp = '$validPassword' WHERE id = $id";

                    if ($conn->query($sql) === TRUE) {
                        
                        $_SESSION["user_prénom"] = $prenom;
                        $_SESSION["user_nom"] = $nom;
                        $_SESSION["user_email"] = $email;
                        // $_SESSION["user_mdp"] = $hash_mdp; (en attendant de regler le password_verify())
                        $_SESSION["user_mdp"] = $validPassword;
                        $_SESSION["user_telephone"] = $telephone;
                        
                        $_SESSION["success"] = "<p class='validation'>Les modifications ont été enregistrées.</p>";
                        $conn->close();
                        if ($_SESSION["user_role"] == "Admin") {
                            header("Location: ../../pages/dashboard-admin.php");
                        } else {
                            header("Location: ../../pages/dashboard-employes.php");
                        }
                    } else {
                        $_SESSION["error"] = "<p class='error'>Les modifications n'ont pas été enregistrées.</p>";
                        $conn->close();
                        if ($_SESSION["user_role"] == "Admin") {
                            header("Location: ../../pages/dashboard-admin.php");
                        } else {
                            header("Location: ../../pages/dashboard-employes.php");
                        }
                    }

                    } else {
                        $_SESSION["error"] = "<p class='error'>Les mdps ne corrspondent pas.</p>";
                        $conn->close();
                        if ($_SESSION["user_role"] == "Admin") {
                            header("Location: ../../pages/dashboard-admin.php");
                        } else {
                            header("Location: ../../pages/dashboard-employes.php");
                        }
                    }
            }
            
        ?>

