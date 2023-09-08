
<?php
                if (isset($_POST["submit_occasions"])) { 

                    session_start();
                    $db_host = "mysql-garage-v-parrot.alwaysdata.net";
                    $db_user = "326283";
                    $db_pass = "Beta2k15";
                    $db_name = "garage-v-parrot_ecf";
                    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

                    if ($conn->connect_error) {
                        die("La connexion à la base de données a échoué : " . $conn->connect_error);
                    }
    
                    // Vérifie si un fichier a été téléchargé
                    if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
                        $target_directory =  "../../assets/images/images-vehicules/"; // Le répertoire de destination de l'image
                        $target_file = $target_directory . basename($_FILES["image"]["name"]);
                        $imageFileName = basename($_FILES["image"]["name"]);
                        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                    
                        // Vérifie si le fichier est une image
                        $valid_extensions = array("jpg", "jpeg", "png", "gif");
                        if(in_array($imageFileType, $valid_extensions)) {

                            // Déplace l'image téléchargée vers le répertoire de destination
                            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                                
                                // Récupère les données du formulaire
                                $modele = $_POST["modele"];
                                $annee = $_POST["annee"];
                                $kilometrage = $_POST["kilometrage"];
                                $prix = $_POST["prix"];
                                $image = $imageFileName;
                                $description = $_POST["description"];

                                // Prépare et exécute la requête SQL pour insérer les données
                                $sql = "INSERT INTO vehicules (modele, annee, kilometrage, prix, image, description) VALUES (?, ?, ?, ?, ?, ?)";
                                $stmt = $conn->prepare($sql);
                                $stmt->bind_param("ssssss", $modele, $annee, $kilometrage, $prix, $image, $description);
                                // Si insertion
                                if ($stmt->execute()) {
                                    $_SESSION["success"] = "<p class='validation'>Le véhicule a bien été ajouté.</p>";
                                    $stmt->close();
                                    $conn->close();
                                    if ($_SESSION["user_role"] == "Admin") {
                                        header("Location: ../../pages/dashboard-admin.php");
                                    } else {
                                        header("Location: ../../pages/dashboard-employes.php");
                                    }
                                } else {
                                    $_SESSION["error"] = "<p class='error'>Le véhicule n'a pas été ajouté.</p>";
                                    $stmt->close();
                                    $conn->close();
                                    if ($_SESSION["user_role"] == "Admin") {
                                        header("Location: ../../pages/dashboard-admin.php");
                                    } else {
                                        header("Location: ../../pages/dashboard-employes.php");
                                    }
                                }
                            } else {
                                
                                if ($_SESSION["user_role"] == "Admin") {
                                    $_SESSION["error"] = "<p class='error'>Une erreur est survenue lors de l'upload de l'image</p>";
                                    $conn->close();
                                    header("Location: ../../pages/dashboard-admin.php");
                                } else {
                                    $_SESSION["error"] = "<p class='error'>Une erreur est survenue lors de l'upload de l'image</p>";
                                    $conn->close();
                                    header("Location: ../../pages/dashboard-employes.php");
                                }
                            }
                        } else {  
                            $_SESSION["error"] = "<p class='error'>Une erreur est survenue lors de l'upload de l'image</p>";
                            $conn->close();
                            if ($_SESSION["user_role"] == "Admin") {
                                header("Location: ../../pages/dashboard-admin.php");
                            } else {
                                header("Location: ../../pages/dashboard-employes.php");
                            }
                        }
                    }
                }
                ?>