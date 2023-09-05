<?php // Soumission du formulaire
if (isset($_POST["submit_employe"])) { 

    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "garage_v_parrot";
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    $role = $_POST["role"];
    $code = $_POST["code"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];

    // Prépare et exécute la requête SQL pour insérer les données (les marqueurs de position servent a éviter les injections SQL)
    $sql = "INSERT INTO users (role, prénom, nom, code_employé) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $role, $prenom, $nom, $code);
    // Si insertion
    if ($stmt->execute()) {
        ?> <span class="validation">L'employé à été ajouté avec succès.</span> <?php ;
    } else {
        ?> <span class="error">Erreur</span> <?php $stmt->error;
    }

    // Ferme la connexion à la base de données
    $stmt->close();
    $conn->close();
    header('Location: ../pages/dashboard-admin.php');
    exit;
    }
?>