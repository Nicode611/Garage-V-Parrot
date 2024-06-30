<?php
if (isset($_POST["submit_avis"])) { 

    session_set_cookie_params(3600);
    session_start();
    $includeFile = "../../config/db.php";
    if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    $avis = $_POST["avis"];
    $nom = $_POST["nom"];
    $statut = "waiting";

    // Les marqueurs de position servent a éviter les injections SQL
    $sql = "INSERT INTO reviews (message, name, state) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $avis, $nom, $statut);

    if ($stmt->execute()) {
        $_SESSION["success"] = "<p class='validation'>Avis en attente de validation.</p>";
        $stmt->close();
        $conn->close();
        header("Location: ../../index.php");
        exit();
    } else {
        $_SESSION["success"] = "<p class='validation'>L'avis n'a pas été ajouté.</p>";
        $stmt->close();
        $conn->close();
        header("Location: ../../index.php");
        exit();
    }
}
?>