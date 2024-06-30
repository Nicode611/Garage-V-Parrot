<?php 
    $includeFile = "../config/db.php";
    if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
                
    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    $sql = "SELECT id, message, name, state FROM reviews";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $message = $row["message"];
            $name = $row["name"];
            $state = $row["state"];
            
            if ($state == "valid") {
            ?>

            <div class="avis">
                <div class="avis-container">
                    <svg viewBox="-102.4 -102.4 1228.80 1228.80" fill="#ffffff" class="avis-delete" version="1.1" xmlns="http://www.w3.org/2000/svg" transform="matrix(1, 0, 0, 1, 0, 0)"><g stroke-width="0"></g><g stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="6.144"></g><path d="M512 897.6c-108 0-209.6-42.4-285.6-118.4-76-76-118.4-177.6-118.4-285.6 0-108 42.4-209.6 118.4-285.6 76-76 177.6-118.4 285.6-118.4 108 0 209.6 42.4 285.6 118.4 157.6 157.6 157.6 413.6 0 571.2-76 76-177.6 118.4-285.6 118.4z m0-760c-95.2 0-184.8 36.8-252 104-67.2 67.2-104 156.8-104 252s36.8 184.8 104 252c67.2 67.2 156.8 104 252 104 95.2 0 184.8-36.8 252-104 139.2-139.2 139.2-364.8 0-504-67.2-67.2-156.8-104-252-104z" fill=""></path><path d="M707.872 329.392L348.096 689.16l-31.68-31.68 359.776-359.768z" fill=""></path><path d="M328 340.8l32-31.2 348 348-32 32z" fill=""></path></svg>
                    <p class="hide"><?php echo $id ?></p>
                    <span class="message"><?php echo $message ?></span><br>
                    <span class="nom"><?php echo $name ?></span>
                </div>
            </div><?php
            }
        }

        $conn->close();
    } else {
        echo "Pas d'avis";
    }
?>

<script> // Script de sélection de la croix de supression (en AJAX)
    document.querySelector(".verified-avis").addEventListener("click", function(event) {
    // Vérifie si la target de l'event est un bouton .service-delete contenu dans #services-section
    if (event.target.classList.contains("avis-delete")) {
        var id = event.target.nextElementSibling.textContent;
        var avis = event.target.closest(".avis");

        if (confirm("Êtes-vous sûr de vouloir supprimer cet élément ?")) {

            // Effectue une requête AJAX pour supprimer l'élément
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "/Garage-v-parrot/scripts/delete/delete-avis.php?execute_script=true&id=" + id, true);
            xhr.send();

            avis.remove();
        }
    }
});
</script>

