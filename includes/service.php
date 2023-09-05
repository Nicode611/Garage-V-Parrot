        <div class="services-main">
            <div class="glow"></div>
            <h2 class="main-title">Nos services</h2>
            <div class="services-section" id="services-section">

            <!-- Script d'affichage du service -->
            <?php
                $db_host = "localhost";
                $db_user = "root";
                $db_pass = "";
                $db_name = "garage_v_parrot";
                $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

                if ($conn->connect_error) {
                    die("La connexion à la base de données a échoué : " . $conn->connect_error);
                }
                // Récupération de tout les éléments de la table
                $sql = "SELECT id, image, nom, description FROM services";
                // Exécution de la requete
                $result = $conn->query($sql);

                // Si résultat plus grand que 0 lignes
                if ($result->num_rows > 0) {
                    // Crée un var a chaque éléments
                    while ($row = $result->fetch_assoc()) {
                        $id = $row["id"];
                        $image = $row["image"];
                        $nom = $row["nom"];
                        $description = $row["description"]; ?>

                        <div class="service">
                            <?php if ($_SERVER['SCRIPT_NAME'] == '/Garage-V-Parrot/pages/dashboard-admin.php') { ?>
                                <svg viewBox="-102.4 -102.4 1228.80 1228.80" fill="#ffffff" class="service-delete" version="1.1" xmlns="http://www.w3.org/2000/svg" transform="matrix(1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="6.144"></g><g id="SVGRepo_iconCarrier"><path d="M512 897.6c-108 0-209.6-42.4-285.6-118.4-76-76-118.4-177.6-118.4-285.6 0-108 42.4-209.6 118.4-285.6 76-76 177.6-118.4 285.6-118.4 108 0 209.6 42.4 285.6 118.4 157.6 157.6 157.6 413.6 0 571.2-76 76-177.6 118.4-285.6 118.4z m0-760c-95.2 0-184.8 36.8-252 104-67.2 67.2-104 156.8-104 252s36.8 184.8 104 252c67.2 67.2 156.8 104 252 104 95.2 0 184.8-36.8 252-104 139.2-139.2 139.2-364.8 0-504-67.2-67.2-156.8-104-252-104z" fill=""></path><path d="M707.872 329.392L348.096 689.16l-31.68-31.68 359.776-359.768z" fill=""></path><path d="M328 340.8l32-31.2 348 348-32 32z" fill=""></path></g></svg>
                                <p class="id-service"><?php echo $id ?></p>
                                <?php } ?>
                                <img class="service-img" src="/Garage-V-Parrot/assets/images/images-services/<?php echo $image ?>" alt="">
                                <div class="service-infos">
                                    <h3 class="service-title"><?php echo $nom ?></h3>
                                    <p class="service-description"><?php echo $description ?></p>
                                </div>
                            </div>
                        <?php
                    }
                } else {
                    echo "Aucun service trouvé.";
                }
                $conn->close();
            ?>

            <script>
                document.querySelector("#services-section").addEventListener("click", function(event) {
                // Vérifie si la target de l'event est un bouton .service-delete contenu dans #services-section
                if (event.target.classList.contains("service-delete")) {
                    var id = event.target.nextElementSibling.textContent;
                    var serviceElement = event.target.closest(".service");

                    // Demande confirmation à l'utilisateur
                    if (confirm("Êtes-vous sûr de vouloir supprimer cet élément ?")) {
                        // Effectue une requête AJAX pour supprimer l'élément
                        var xhr = new XMLHttpRequest();
                        xhr.open("GET", "/Garage-V-Parrot/includes/service.php?execute_script=true&id=" + id, true);
                        xhr.send();

                        serviceElement.remove();
                    }
                }
            });
            </script>

        <?php
            // Script de supression du service
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

                $imageQuery = "SELECT image FROM services WHERE id = $id";
                $imageResult = $conn->query($imageQuery);

                if ($imageResult->num_rows === 1) {
                    $imageRow = $imageResult->fetch_assoc();
                    $image = $imageRow["image"];
                    $imageLink = $_SERVER['DOCUMENT_ROOT'] . "/Garage-V-Parrot/assets/images/images-services/" . $image; 
                    unlink($imageLink);
                }

                $sql = "DELETE FROM services WHERE id = $id";
                $conn->query($sql);
            
                $conn->close();
            }
        ?>

            </div>


                <!-- Script de soumission du formulaire -->
                <div class="service-form-container">
                
                
                    <form class="service-form" action="../config/script-submit-service.php" method="post" enctype="multipart/form-data">
                        <h3>Ajouter un service :</h3>
                        <div class="service-form1">
                            <input type="file" name="image" id="service-image" accept="image/*" required>
                            <input placeholder="Titre" type="text" name="titre" id="service-titre" required>
                            <textarea placeholder="Texte" name="texte" id="service-texte" rows="4" cols="50" required></textarea>
                        </div>
                        <input class="service-submit" type="submit" name="submit_service" value="Valider">
                    </form>
                </div>
                
                
            </div>
            </div>
</html>



