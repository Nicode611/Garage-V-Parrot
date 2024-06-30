<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/connection.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/global.css">
    <title>Connexion</title>
</head>
<body>
    
<?php
    $includeFile = "../includes/header.php";
    if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
?>

    <main>
        <h2>Connectez vous</h2>
        <form class="connect-form" action="../scripts/submit/submit-connect.php" method="post">
            <input class="connect-fields" placeholder="Email" type="email" name="email" id="connectEmail">
            <input class="connect-fields" placeholder="Mot de passe" type="password" name="password" id="connectPassword">
            <input class="connect-submit" type="submit" name="submit_connect" value="Se connecter">
        </form>
    </main>

    <?php
        $includeFile = "../scripts/submit/submit-connect.php";
        if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
    ?>

</body>
</html>