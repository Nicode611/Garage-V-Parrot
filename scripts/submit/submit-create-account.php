<?php
if (isset($_POST["submit_create"])) {

    session_set_cookie_params(3600);
    session_start();
    $includeFile = "../../config/db.php";
    if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    $code = $_POST["code"];
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $telephone = $_POST["telephone"];
    $email = $_POST["email"];
    $mdp = $_POST["motdepasse"];
    $confirmMdp = $_POST["confirmationmdp"];

    if (strlen($mdp) >= 8 && preg_match("/[0-9]/", $mdp) && preg_match("/[!@#$%^&*]/", $mdp)) { 

    if ($mdp == $confirmMdp) {
        
        $validPassword = $mdp;
        $hash_mdp = password_hash($validPassword, PASSWORD_DEFAULT);

        $sqlSelect = "SELECT * FROM users WHERE code = '$code'";
        $result = $conn->query($sqlSelect);
        if ($result->num_rows > 0) {
            $sql = "UPDATE users SET first_name = '$prenom', name = '$nom', email = '$email', password = '$hash_mdp', phone = '$telephone' WHERE code = '$code'";

            if ($conn->query($sql) === TRUE) {
                ?> <span class="validation">Compte crée, connectez vous</span> <?php

                $_SESSION["success"] = "<p class='validation'>Compte crée !</p>";
                $conn->close();
                header("Location: ../../pages/connection.php");
                exit();

            } else {
                $_SESSION["error"] = "<p class='error'>Erreur</p>";
                $conn->close();
                header("Location: ../../pages/create-account.php");
                exit();
            }
        } else {
            $_SESSION["error"] = "<p class='error'>Code incorrect.</p>";
            $conn->close();
            header("Location: ../../pages/create-account.php");
            exit();
        }
    } else {
        $_SESSION["error"] = "<p class='error'>Les mdps ne correspondent pas.</p>";
        $conn->close();
        header("Location: ../../pages/create-account.php");
        exit();
    }
} else {
    $_SESSION["error"] = "<p class='error'>Format incorrect.</p>";
    $conn->close();
    header("Location: ../../pages/create-account.php");
    exit();
};
}

?>