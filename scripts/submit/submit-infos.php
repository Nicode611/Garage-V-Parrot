<?php
            if (isset($_POST["submit_infos"])) {

                $includeFile = "../../config/db.php";
                if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
                $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

                if ($conn->connect_error) {
                    die("La connexion à la base de données a échoué : " . $conn->connect_error);
                }
                
                session_set_cookie_params(3600);
                session_start();
                $id = $_SESSION["user_id"];
                $prenom = $_POST["prenom"];
                $nom = $_POST["nom"];
                $telephone = $_POST["telephone"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $confirmPassword = $_POST["confirm_password"];

                if (strlen($password) >= 8 && preg_match("/[0-9]/", $password) && preg_match("/[!@#$%^&*]/", $password)) { 

                if ($password == $confirmPassword) {
                    $validPassword = $password;
                    $hash_mdp = password_hash($validPassword, PASSWORD_DEFAULT);

                    $sql = "UPDATE users SET first_name = '$prenom', name = '$nom', phone = '$telephone', email = '$email', password = '$hash_mdp' WHERE id = $id";

                    if ($conn->query($sql) === TRUE) {
                        
                        $_SESSION["user_prénom"] = $prenom;
                        $_SESSION["user_nom"] = $nom;
                        $_SESSION["user_email"] = $email;
                        $_SESSION["user_mdp"] = $hash_mdp;
                        $_SESSION["user_telephone"] = $telephone;
                        
                        $_SESSION["success"] = "<p class='validation'>Les modifications ont été enregistrées.</p>";
                        $conn->close();
                        if ($_SESSION["user_role"] == "Admin") {
                            header("Location: ../../pages/dashboard-admin.php");
                        } else {
                            if ($_SESSION["user_role"] == "Employé") {
                                header("Location: ../../pages/dashboard-employes.php");
                            } else {
                                header("Location: ../../index.php");
                            }
                        }
                    } else {
                        $_SESSION["error"] = "<p class='error'>Les modifications n'ont pas été enregistrées.</p>";
                        $conn->close();
                        if ($_SESSION["user_role"] == "Admin") {
                            header("Location: ../../pages/dashboard-admin.php");
                        } else {
                            if ($_SESSION["user_role"] == "Employé") {
                                header("Location: ../../pages/dashboard-employes.php");
                            } else {
                                header("Location: ../../index.php");
                            }
                        }
                    }

                    } else {
                        $_SESSION["error"] = "<p class='error'>Les mdps ne correspondent pas.</p>";
                        $conn->close();
                        if ($_SESSION["user_role"] == "Admin") {
                            header("Location: ../../pages/dashboard-admin.php");
                        } else {
                            if ($_SESSION["user_role"] == "Employé") {
                                header("Location: ../../pages/dashboard-employes.php");
                            } else {
                                header("Location: ../../index.php");
                            }
                        }
                    }
                } else {
                    $_SESSION["error"] = "<p class='error'>Format incorrect.</p>";
                    $conn->close();
                    if ($_SESSION["user_role"] == "Admin") {
                        header("Location: ../../pages/dashboard-admin.php");
                    } else {
                        if ($_SESSION["user_role"] == "Employé") {
                            header("Location: ../../pages/dashboard-employes.php");
                        } else {
                            header("Location: ../../index.php");
                        }
                    }
                }
            }
            
        ?>

