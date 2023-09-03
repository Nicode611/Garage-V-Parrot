<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "garage_v_parrot";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}
 
if (isset($_POST["submit_connect"])) {
    $email = $_POST["email"];
    $mdp = $_POST["password"];
    // Sécurisation des données entrées par l'utilisateur pour éviter les injections SQL
    $email = mysqli_real_escape_string($conn, $email);

    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        // L'utilisateur existe, vérifiez le mot de passe
        $row = $result->fetch_assoc();
        $hashMdp = $row["mdp"];

        if ($mdp = $hashMdp) {
            echo "Authentification réussie ! Bienvenue, " . $row["prénom"];

            session_destroy();
            session_start();

            // Stockez des informations de l'utilisateur dans la session
            $_SESSION["user_id"] = $row["id"]; // Vous devez avoir un identifiant d'utilisateur unique dans votre table
            $_SESSION["user_role"] = $row["role"];
            $_SESSION["user_prénom"] = $row["prénom"];
            $_SESSION["user_nom"] = $row["nom"];
            $_SESSION["user_email"] = $row["email"];
            $_SESSION["user_mdp"] = $row["mdp"];
            $_SESSION["user_telephone"] = $row["telephone"];
            $_SESSION["user_code_employé"] = $row["code_employé"];
            // Vous pouvez maintenant utiliser $userType pour gérer les autorisations et les affichages spécifiques en fonction du type de compte.
            // Par exemple, vous pouvez utiliser des instructions conditionnelles pour afficher des fonctionnalités spécifiques en fonction du type de compte.
            
            header("Location: ../index.php");
            exit();
            
        } else {
            // Le mot de passe est incorrect
            echo "Mot de passe incorrect. Veuillez réessayer.";
        }
    } else {
        // L'utilisateur n'existe pas dans la base de données
        echo "Aucun utilisateur trouvé avec cet email.";
    }
}
?>