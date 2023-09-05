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

        $sql = "UPDATE users SET prénom = '$prenom', nom = '$nom', email = '$email', mdp = '$hash_mdp', telephone = '$telephone' WHERE code_employé = '$code'";

        if ($conn->query($sql) === TRUE) {
            ?> <span class="validation">Compte crée, connectez vous</span> <?php

            sleep(3);
            header("Location: ../pages/connection.php");
            exit();

        } else {
            ?> <span class="error">Erreur</span> <?php $conn->error;
        }
    }

    $conn->close();
}

?>