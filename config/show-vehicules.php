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
                $sql = "SELECT id, modele, annee, kilometrage, prix, image, description FROM vehicules";
                $result = $conn->query($sql);
                $data = array();
                
                // Si résultat plus grand que 0 lignes
                if ($result->num_rows > 0) {
                    // Crée un var a chaque éléments
                    while ($row = $result->fetch_assoc()) {
                        $data[] = array(
                            'id' => $row["id"],
                            'modele' => $row["modele"],
                            'annee' => $row["annee"],
                            'kilometrage' => $row["kilometrage"],
                            'prix' => $row["prix"],
                            'image' => "/Garage-V-Parrot/assets/images/images-vehicules/" . $row["image"],
                            'description' => $row["description"]
                        );
                        $id = $row["id"];
                        $modele = $row["modele"];
                        $annee = $row["annee"];
                        $kilometrage = $row["kilometrage"];
                        $prix = $row["prix"];
                        $image = $row["image"];
                        $description = $row["description"]; ?>

                        <div class="vehicules">
                            <img class="vehicules-img" src="/Garage-V-Parrot/assets/images/images-vehicules/<?php echo $image ?>">
                        </div>
                        <?php
                    }

                header('Content-Type: application/json');
                echo json_encode($data);
                
                } else {
                    echo "Aucun véhicule trouvé.";
                }
                $conn->close();
            ?>