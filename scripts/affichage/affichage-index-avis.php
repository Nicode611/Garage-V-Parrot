<?php
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    $sql = "SELECT message, name, state FROM reviews";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $state = $row["state"];
            $message = $row["message"];
            $name = $row["name"];

            if ($state == "valid") {  ?>
                <div class="avis">
                    <p class="avis-text"><?php echo $message ?></p><br>
                    <p class="avis-name"><?php echo $name ?></p>
                </div>
                <?php
            }
        }
    } else {
        echo "Aucun avis trouvé.";
    }
    $conn->close();
?>