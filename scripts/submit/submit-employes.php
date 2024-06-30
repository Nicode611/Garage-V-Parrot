<?php
    if (isset($_POST["submit_employe"])) { 

        session_set_cookie_params(3600);
        session_start();
        $includeFile = "../../config/db.php";
        if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
        $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

        if ($conn->connect_error) {
            die("La connexion à la base de données a échoué : " . $conn->connect_error);
        }

        $role = $_POST["role"];
        $code = $_POST["code"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        
        $sqlSelect = "SELECT * FROM users WHERE code = '$code'";
        $result = $conn->query($sqlSelect);

        if ($result->num_rows > 0) {
            $_SESSION["error"] = "<p class='error'>Ce code est déjà utilisé.</p>";
            $conn->close();
            header("Location: ../../pages/dashboard-admin.php");
            exit();
        } else {  

        // Les marqueurs de position servent a éviter les injections SQL
        $sql = "INSERT INTO users (role, first_name, name, code) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $role, $prenom, $nom, $code);

        if ($stmt->execute()) {
            $_SESSION["success"] = "<p class='validation'>Employé ajouté.</p>";
            $stmt->close();
            $conn->close();
            header("Location: ../../pages/dashboard-admin.php");
            exit();
        } else {
            $_SESSION["success"] = "<p class='validation'>L'employé n'a pas été ajouté.</p>";
            $stmt->close();
            $conn->close();
            header("Location: ../../pages/dashboard-admin.php");
            exit();
        }
    }
    }
?>