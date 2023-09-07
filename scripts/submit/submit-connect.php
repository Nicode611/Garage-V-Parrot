<?php
if (isset($_POST["submit_connect"])) {
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "garage_v_parrot";
    $conn = new mysqli($servername, $username, $password, $dbname);

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
        $hashMdp = $row["mdp"];

        // if (password_verify($mdp, $hashMdp)) {
        if ($mdp == $hashMdp) {

            session_start();

            // Stocker les informations de l'utilisateur dans la session
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["user_role"] = $row["role"];
            $_SESSION["user_prénom"] = $row["prénom"];
            $_SESSION["user_nom"] = $row["nom"];
            $_SESSION["user_email"] = $row["email"];
            $_SESSION["user_mdp"] = $row["mdp"];
            $_SESSION["user_telephone"] = $row["telephone"];
            $_SESSION["user_code_employé"] = $row["code_employé"];
            
            $_SESSION["success"] = "<p class='validation'>Connecté !</p>";
            $conn->close();
            header("Location: /Garage-V-Parrot/index.php");
            exit();
            
        } else {
            session_start();
            $_SESSION["error"] = "<p class='error'>Mot de passe incorect</p>";
            $conn->close();
            header("Location: /Garage-V-Parrot/pages/connection.php");
            exit();
        }
    } else {
        session_start();
        $_SESSION["error"] = "<p class='error'>Mot de passe incorect</p>";
        $conn->close();
        header("Location: /Garage-V-Parrot/pages/connection.php");
        exit();
    }
}
?>