<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="connection.css">
    <link rel="stylesheet" href="../Header/header.css">
    <title>Garage V. Parrot</title>
</head>
<body>
    
    <?php
        require "../Header/header.html";
    ?>

    <main>
        <h2>Connectez vous</h2>
        <form class="connect-form" action="traitement.php" method="post">
            <input class="connect-fields" placeholder="Email" type="email" name="email" id="email">
            <input class="connect-fields" placeholder="Mot de passe" type="password" name="password" id="password">
            <input class="connect-submit" type="submit" value="Se connecter">
        </form>
    </main>

</body>
</html>