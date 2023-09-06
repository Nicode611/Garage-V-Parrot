<?php

 
if (isset($_POST["submit_create"])) {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "garage_v_parrot";
    $conn = new mysqli($servername, $username, $password, $dbname);

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

    if ($mdp == $confirmMdp) {
        
        $validPassword = $mdp;
        $hash_mdp = password_hash($validPassword, PASSWORD_DEFAULT);

        $sqlSelect = "SELECT * FROM users WHERE code_employé = '$code'";
        $result = $conn->query($sqlSelect);
        if ($result->num_rows > 0) {
            $sql = "UPDATE users SET prénom = '$prenom', nom = '$nom', email = '$email', mdp = '$hash_mdp', telephone = '$telephone' WHERE code_employé = '$code'";

            if ($conn->query($sql) === TRUE) {
                ?> <span class="validation">Compte crée, connectez vous</span> <?php

                $_SESSION["success"] = "<p class='validation'>Compte crée !</p>";
                $conn->close();
                header("Location: /Garage-V-Parrot/pages/connection.php");
                exit();

            } else {
                session_start();
                $_SESSION["error"] = "<p class='error'>Erreur</p>";
                $conn->close();
                header("Location: /Garage-V-Parrot/pages/create-account.php");
                exit();
            }
        } else {
            session_start();
            $_SESSION["error"] = "<p class='error'>Code incorrect.</p>";
            $conn->close();
            header("Location: /Garage-V-Parrot/pages/create-account.php");
            exit();
        }
    } else {
        session_start();
        $_SESSION["error"] = "<p class='error'>Mot de passe incorect.</p>";
        $conn->close();
        header("Location: /Garage-V-Parrot/pages/create-account.php");
        exit();
    }
}

?>