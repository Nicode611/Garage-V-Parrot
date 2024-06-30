<?php
            // Script de supression du vehicule
            if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"])) {
        
                $includeFile = "../../config/db.php";
                if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
                $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

                if ($conn->connect_error) {
                    die("La connexion à la base de données a échoué : " . $conn->connect_error);
                }

                // Récupére l'ID de la ligne de l'élément à supprimer depuis la requête GET
                $id = $_GET["id"];
                
                $imageQuery = "SELECT image FROM vehicules WHERE id = $id";
                $imageResult = $conn->query($imageQuery);

                if ($imageResult->num_rows === 1) {
                    $imageRow = $imageResult->fetch_assoc();
                    $image = $imageRow["image"];
                    $imageLink = "../../assets/images/images-vehicules/" . $image; 
                    unlink($imageLink);
                }

                $sql = "DELETE FROM vehicules WHERE id = $id";
                $conn->query($sql);
            
                $conn->close();
            }
            ?>