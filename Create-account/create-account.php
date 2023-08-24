<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="create-account.css">
    <link rel="stylesheet" href="../Header/header.css">
    <title>Garage V. Parrot</title>
</head>
<body>
    
    <?php
        require "../Header/header.html";
    ?>

    <main>
        <h2>Créez votre compte</h2>
        <form class="create-form" action="traitement.php" method="POST">
            <div class="create-form1">
                <input class="create-fields" type="text" placeholder="Nom" id="nom" name="nom" required>
                <input class="create-fields" type="text" placeholder="Prénom" id="prenom" name="prenom" required>
            </div>
            <input class="create-fields" type="tel" placeholder="Téléphone" id="telephone" name="telephone" pattern="[0-9]{10}" required><br><br>
            <input class="create-fields" type="email" placeholder="Email" id="email" name="email" required><br><br>
            <input class="create-fields" type="password" placeholder="Mot de passe" id="motdepasse" name="motdepasse" required><br><br>
            <input class="create-fields" type="password" placeholder="Confirmez le mot de passe" id="confirmationmdp" name="confirmationmdp" required><br><br>

            <input class="create-submit" type="submit" value="Créer le compte">
        </form>
    </main>

</body>
</html>