<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/dashboard-occasions.css">
    <title>occasions</title>
</head>

<div class="occasions-container">
    <div class="vehicules-container">
        <div class="vehicules-imgs" id="vehicules-imgs">

            <!-- Script d'affichage du véhicule -->
            <?php
                $db_host = "localhost";
                $db_user = "root";
                $db_pass = "";
                $db_name = "garage_v_parrot";
                $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
                // Vérification de la connection
                if ($conn->connect_error) {
                    die("La connexion à la base de données a échoué : " . $conn->connect_error);
                }
                // Récupération de tout les éléments de la table
                $sql = "SELECT id, image FROM vehicules";
                // Exécution de la requete
                $result = $conn->query($sql);

                // Si résultat plus grand que 0 lignes
                if ($result->num_rows > 0) {
                    // Crée un var a chaque éléments
                    while ($row = $result->fetch_assoc()) {
                        $id = $row["id"];
                        $image = $row["image"]; ?>

                        <div class="vehicules">
                            <svg viewBox="-102.4 -102.4 1228.80 1228.80" fill="#ffffff" class="delete" version="1.1" xmlns="http://www.w3.org/2000/svg" transform="matrix(1, 0, 0, 1, 0, 0)"><g stroke-width="0"></g><g stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="6.144"></g><path d="M512 897.6c-108 0-209.6-42.4-285.6-118.4-76-76-118.4-177.6-118.4-285.6 0-108 42.4-209.6 118.4-285.6 76-76 177.6-118.4 285.6-118.4 108 0 209.6 42.4 285.6 118.4 157.6 157.6 157.6 413.6 0 571.2-76 76-177.6 118.4-285.6 118.4z m0-760c-95.2 0-184.8 36.8-252 104-67.2 67.2-104 156.8-104 252s36.8 184.8 104 252c67.2 67.2 156.8 104 252 104 95.2 0 184.8-36.8 252-104 139.2-139.2 139.2-364.8 0-504-67.2-67.2-156.8-104-252-104z" fill=""></path><path d="M707.872 329.392L348.096 689.16l-31.68-31.68 359.776-359.768z" fill=""></path><path d="M328 340.8l32-31.2 348 348-32 32z" fill=""></path></svg>
                            <p class="id-vehicule"><?php echo $id ?></p>
                            <img class="vehicules-img" src="/Garage-V-Parrot/assets/images/images-vehicules/<?php echo $image ?>">
                        </div>
                        <?php
                    }
                } else {
                    echo "Aucun véhicule trouvé.";
                }
                $conn->close();
            ?>

            <script>
                document.querySelector("#vehicules-imgs").addEventListener("click", function(event) {
                // Vérifie si la target de l'event est un bouton .service-delete contenu dans #services-section
                if (event.target.classList.contains("delete")) {
                    var id = event.target.nextElementSibling.textContent;
                    var vehiculesElement = event.target.closest(".vehicules");

                    // Demande confirmation à l'utilisateur
                    if (confirm("Êtes-vous sûr de vouloir supprimer cet élément ?")) {
                        // Effectue une requête AJAX pour supprimer l'élément
                        var xhr = new XMLHttpRequest();
                        xhr.open("GET", "/Garage-V-Parrot/includes/dashboard-occasions.php?execute_script=true&id=" + id, true);
                        xhr.send();

                        vehiculesElement.remove();
                    }
                }
            });
            </script>

            <?php
            // Script de supression du vehicule
            // Vérifie si la requete a été efectuée
            if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"])) {
        
                $db_host = "localhost";
                $db_user = "root";
                $db_pass = "";
                $db_name = "garage_v_parrot";
                $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

                if ($conn->connect_error) {
                    die("La connexion à la base de données a échoué : " . $conn->connect_error);
                }

                // Récupére l'ID de la ligne de l'élément à supprimer depuis la requête GET
                $id = $_GET["id"];

                // Recupere l'image a suprrimer dans les fichiers
                $imageQuery = "SELECT image FROM vehicules WHERE id = $id";
                $imageResult = $conn->query($imageQuery);

                if ($imageResult->num_rows === 1) {
                    $imageRow = $imageResult->fetch_assoc();
                    $image = $imageRow["image"];
                    $imageLink = $_SERVER['DOCUMENT_ROOT'] . "/Garage-V-Parrot/assets/images/images-vehicules/" . $image; 
                    unlink($imageLink);
                }

                $sql = "DELETE FROM vehicules WHERE id = $id";
                $conn->query($sql);
            
                $conn->close();
            }
            ?>
        </div>


            <!-- Script de soumission du formulaire -->
            <?php
                $validation = "";
                // Vérifie si le formulaire a été soumis
                if (isset($_POST["submit_occasions"])) { 

                    $db_host = "localhost";
                    $db_user = "root";
                    $db_pass = "";
                    $db_name = "garage_v_parrot";
                    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

                    if ($conn->connect_error) {
                        die("La connexion à la base de données a échoué : " . $conn->connect_error);
                    }
    
                    // Vérifie si un fichier a été téléchargé
                    if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
                        $target_directory =  $_SERVER['DOCUMENT_ROOT'] . "/Garage-V-Parrot/assets/images/images-vehicules/"; // Le répertoire de destination de l'image
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
                                    $validation = "Le vehicule à été ajouté avec succès.";
                                } else {
                                    $validation = "Une erreur est survenue lors de l'ajout du service." . $stmt->error;
                                }

                                // Ferme la connexion à la base de données
                                $stmt->close();
                                $conn->close();
                                ?>

                            <?php
                            } else {
                                echo "Une erreur est survenue lors de l'upload de l'image.";
                            }
                        }
                    }
                }
                ?>
                
                
        <div class="validation-message">
            <?php echo $validation; ?>
        </div>
        <form class="occasions-form" method="post" enctype="multipart/form-data">
            <h3>Ajouter un véhicule :</h3>
            <div class="occasions-form1">
                <input placeholder="Modèle" type="text" name="modele" id="occasions-modele" required>
                <input placeholder="Année" type="number" name="annee" id="occasions-annee" min="1900" max="2099" required>
                <input placeholder="Kilométrage" type="number" name="kilometrage" id="occasions-kilometrage" required>
                <input placeholder="Prix" type="number" name="prix" id="occasions-prix" step="0.01" required>
            </div>
            <br>
            <div class="occasions-form2">
                <input type="file" name="image" id="occasions-image" accept="image/*" required>
                <textarea placeholder="Description" name="description" id="occasions-description" rows="4" required></textarea>
            </div>
            <br>

            <input class="occasions-submit" type="submit" name="submit_occasions" value="Ajouter le véhicule">
        </form>
    </div>
</div>

<script src="/Garage-V-Parrot/assets/js/script-dashboard.js"></script>

</html>