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