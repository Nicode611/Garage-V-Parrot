
            <?php
                if (isset($_POST["submit_occasions"])) { 

                    session_set_cookie_params(3600);
                    session_start();
                    $includeFile = "../../config/db.php";
                    if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
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
                                $model = $_POST["modele"];
                                $year = $_POST["annee"];
                                $kilometrage = $_POST["kilometrage"];
                                $price = $_POST["prix"];
                                $image = $imageFileName;
                                $description = $_POST["description"];


                                $sql = "INSERT INTO vehicules (model, year, kilometrage, price, image, description) VALUES (?, ?, ?, ?, ?, ?)";
                                $stmt = $conn->prepare($sql);
                                $stmt->bind_param("ssssss", $model, $year, $kilometrage, $price, $image, $description);
                                
                                if ($stmt->execute()) {
                                    $_SESSION["success"] = "<p class='validation'>Le véhicule a bien été ajouté.</p>";
                                    $stmt->close();
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
                                    $_SESSION["error"] = "<p class='error'>Le véhicule n'a pas été ajouté.</p>";
                                    $stmt->close();
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
                                $_SESSION["error"] = "<p class='error'>Erreur lors de l'upload de l'image</p>";
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
                            $_SESSION["error"] = "<p class='error'>Le format de l'image n'est pas valide</p>";
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
                }
                ?>