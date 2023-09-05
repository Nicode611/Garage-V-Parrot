<?php // Affichage contacts
$db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "garage_v_parrot";
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
                
    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    $sql = "SELECT date, message, nom, telephone, email FROM contacts";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $date = $row["date"];
            $message = $row["message"];
            $nom = $row["nom"];
            $telephone = $row["telephone"];
            $email = $row["email"]; ?>

            <div class="dashboard-contact">
                <svg viewBox="-102.4 -102.4 1228.80 1228.80" fill="#ffffff" class="delete" version="1.1" xmlns="http://www.w3.org/2000/svg" transform="matrix(1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="6.144"></g><g id="SVGRepo_iconCarrier"><path d="M512 897.6c-108 0-209.6-42.4-285.6-118.4-76-76-118.4-177.6-118.4-285.6 0-108 42.4-209.6 118.4-285.6 76-76 177.6-118.4 285.6-118.4 108 0 209.6 42.4 285.6 118.4 157.6 157.6 157.6 413.6 0 571.2-76 76-177.6 118.4-285.6 118.4z m0-760c-95.2 0-184.8 36.8-252 104-67.2 67.2-104 156.8-104 252s36.8 184.8 104 252c67.2 67.2 156.8 104 252 104 95.2 0 184.8-36.8 252-104 139.2-139.2 139.2-364.8 0-504-67.2-67.2-156.8-104-252-104z" fill=""></path><path d="M707.872 329.392L348.096 689.16l-31.68-31.68 359.776-359.768z" fill=""></path><path d="M328 340.8l32-31.2 348 348-32 32z" fill=""></path></g></svg>
                <span class="contact-date">01 / 01 / 2023</span>
                <span class="contact-message">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tempus, metus nec aliquam ornare, ipsum lacus hendrerit risus, quis lacinia orci neque ac ipsum. Nullam non tempor urna. Maecenas consectetur elit nec velit interdum, ac bibendum odio vehicula. 
                </span>
                <div class="contact-infos">
                    <span class="contact-nom">Monique Loubiere</span>
                    <span class="contect-telephone">0628741544</span>
                    <span class="cobtact-email">monique loubiere@gamil.com</span>
                </div>
            </div> <?php
        }
    } else {
        echo "Pas de messages";
    }
?>
