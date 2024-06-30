<?php

    $includeFile = "../config/db.php";
    if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    $sql = "SELECT id, date, message, name, phone, email, objet FROM contacts";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $date = $row["date"];
            $message = $row["message"];
            $name = $row["name"];
            $phone = $row["phone"];
            $email = $row["email"];
            $objet = $row["objet"]; ?>

            <div class="dashboard-contact">
                <svg viewBox="-102.4 -102.4 1228.80 1228.80" fill="#ffffff" class="delete" version="1.1" xmlns="http://www.w3.org/2000/svg" transform="matrix(1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="6.144"></g><g id="SVGRepo_iconCarrier"><path d="M512 897.6c-108 0-209.6-42.4-285.6-118.4-76-76-118.4-177.6-118.4-285.6 0-108 42.4-209.6 118.4-285.6 76-76 177.6-118.4 285.6-118.4 108 0 209.6 42.4 285.6 118.4 157.6 157.6 157.6 413.6 0 571.2-76 76-177.6 118.4-285.6 118.4z m0-760c-95.2 0-184.8 36.8-252 104-67.2 67.2-104 156.8-104 252s36.8 184.8 104 252c67.2 67.2 156.8 104 252 104 95.2 0 184.8-36.8 252-104 139.2-139.2 139.2-364.8 0-504-67.2-67.2-156.8-104-252-104z" fill=""></path><path d="M707.872 329.392L348.096 689.16l-31.68-31.68 359.776-359.768z" fill=""></path><path d="M328 340.8l32-31.2 348 348-32 32z" fill=""></path></g></svg>
                <span class="hide"><?php echo $id ?></span>
                <span class="contact-objet"><?php echo $objet ?></span>
                <span class="contact-date"><?php echo $date ?></span>
                <span class="contact-message"><?php echo $message ?></span>
                <div class="contact-infos">
                    <span class="contact-nom"><?php echo $name ?></span>
                    <span class="contect-telephone"><?php echo $phone ?></span>
                    <span class="cobtact-email"><?php echo $email ?></span>
                </div>
            </div> <?php
        }

        $conn->close();
    } else {
        echo "Pas de messages";
    }
?>

<script> // Script de sélection de la croix de supression (en AJAX)
    document.querySelector(".dashboard-contacts").addEventListener("click", function(event) {

    if (event.target.classList.contains("delete")) {
        var id = event.target.nextElementSibling.textContent;
        var contact = event.target.closest(".dashboard-contact");

        // Demande confirmation à l'utilisateur
        if (confirm("Êtes-vous sûr de vouloir supprimer cet élément ?")) {

            // Effectue une requête AJAX pour supprimer l'élément
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "/Garage-v-parrot/scripts/delete/delete-contact-messages.php?execute_script=true&id=" + id, true);
            xhr.send();

            contact.remove();
        }
    }
});
</script>

