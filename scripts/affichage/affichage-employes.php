<?php
    $includeFile = "../../config/db.php";
    if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
                
    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    $sql = "SELECT id, role, first_name, name, code FROM users";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $role = $row["role"];
            $first_name = $row["first_name"];
            $name = $row["name"];
            $code = $row["code"]; ?>

            <div class="employe">
                <svg viewBox="-102.4 -102.4 1228.80 1228.80" fill="#ffffff" class="delete" version="1.1" xmlns="http://www.w3.org/2000/svg" transform="matrix(1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="6.144"></g><g id="SVGRepo_iconCarrier"><path d="M512 897.6c-108 0-209.6-42.4-285.6-118.4-76-76-118.4-177.6-118.4-285.6 0-108 42.4-209.6 118.4-285.6 76-76 177.6-118.4 285.6-118.4 108 0 209.6 42.4 285.6 118.4 157.6 157.6 157.6 413.6 0 571.2-76 76-177.6 118.4-285.6 118.4z m0-760c-95.2 0-184.8 36.8-252 104-67.2 67.2-104 156.8-104 252s36.8 184.8 104 252c67.2 67.2 156.8 104 252 104 95.2 0 184.8-36.8 252-104 139.2-139.2 139.2-364.8 0-504-67.2-67.2-156.8-104-252-104z" fill=""></path><path d="M707.872 329.392L348.096 689.16l-31.68-31.68 359.776-359.768z" fill=""></path><path d="M328 340.8l32-31.2 348 348-32 32z" fill=""></path></g></svg>
                <p class="hide"><?php echo $id ?></p>
                <div class="role-employe">
                    <h3>Role</h3>
                    <p><?php echo $role ?></p>
                </div>
                <div class="code-employe">
                    <h3>Code</h3>
                    <p><?php echo $code ?></p>
                </div>
                <div class="nom-employe">
                    <h3>Nom</h3>
                    <p><?php echo $name ?></p>
                </div>
                <div class="prenom-employe">
                    <h3>Prénom</h3>
                    <p><?php echo $first_name ?></p>
                </div>
            </div>
            <?php
        }
    } else {
        echo "Aucun utilisateur trouvé.";
    }
    $conn->close();
?>



<script> // Script de sélection de la croix de supression (en AJAX)
    document.querySelector(".dashboard-employes").addEventListener("click", function(event) {
    // Vérifie si la target de l'event est un bouton .service-delete contenu dans #services-section
    if (event.target.classList.contains("delete")) {
        var id = event.target.nextElementSibling.textContent;
        var employe = event.target.closest(".employe");

        // Demande confirmation à l'utilisateur
        if (confirm("Êtes-vous sûr de vouloir supprimer cet élément ?")) {
            // Effectue une requête AJAX pour supprimer l'élément
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "../scripts/affichage/affichage-employes.php?action=delete-employe&id=" + id, true);
            xhr.send();

            employe.remove();
        }
    }
});
</script>

<?php // Script de supression employes
    if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["action"]) && $_GET["action"] === "delete-employe" && isset($_GET["id"])) {
        
        $includeFile = "../../config/db.php";
        if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
        $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

        if ($conn->connect_error) {
            die("La connexion à la base de données a échoué : " . $conn->connect_error);
        }

        // Récupére l'ID de la ligne de l'élément à supprimer depuis la requête GET
        $id = $_GET["id"];

        $sql = "DELETE FROM users WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            echo "requete effectuée";
            $conn->close();
        }
    }

?>