<?php
if (isset($_POST["submit_employe"])) { 

    session_start();
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

    // Les marqueurs de position servent a éviter les injections SQL
    $sql = "INSERT INTO users (role, prénom, nom, code_employé) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $role, $prenom, $nom, $code);

    if ($stmt->execute()) {
        $_SESSION["success"] = "<p class='validation'>Employé ajouté.</p>";
        $stmt->close();
        $conn->close();
        header("Location: /Garage-V-Parrot/pages/dashboard-admin.php");
        exit();
    } else {
        $_SESSION["success"] = "<p class='validation'>L'employé n'a pas été ajouté.</p>";
        $stmt->close();
        $conn->close();
        header("Location: /Garage-V-Parrot/pages/dashboard-admin.php");
        exit();
    }
}
?>