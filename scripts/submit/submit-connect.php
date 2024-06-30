<?php
if (isset($_POST["submit_connect"])) {
    
    $includeFile = "../../config/db.php";
    if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    $email = $_POST["email"];
    $mdp = $_POST["password"];
    // Sécurisation des données entrées par l'utilisateur pour éviter les injections SQL
    $email = mysqli_real_escape_string($conn, $email);

    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $hashMdp = $row["password"];

        if (password_verify($mdp, $hashMdp)) {

            session_start();

            // Stocker les informations de l'utilisateur dans la session
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["user_role"] = $row["role"];
            $_SESSION["user_prénom"] = $row["first_name"];
            $_SESSION["user_nom"] = $row["name"];
            $_SESSION["user_email"] = $row["email"];
            $_SESSION["user_mdp"] = $row["password"];
            $_SESSION["user_telephone"] = $row["phone"];
            $_SESSION["user_code_employé"] = $row["code"];
            
            $_SESSION["success"] = "<p class='validation'>Connecté !</p>";
            $conn->close();
            header("Location: ../../index.php");
            exit();
            
        } else {
            session_start();
            $_SESSION["error"] = "<p class='error'>Mot de passe incorect</p>";
            $conn->close();
            header("Location: ../../pages/connection.php");
            exit();
        }
    } else {
        session_start();
        $_SESSION["error"] = "<p class='error'>Mot de passe incorect</p>";
        $conn->close();
        header("Location: ../../pages/connection.php");
        exit();
    }
}
?>