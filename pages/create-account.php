<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/create-account.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/global.css">
    <title>Créez votre compte</title>
</head>
<body>
    
<?php
    $includeFile = "../includes/header.php";
    if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
?>

    <main>
        <h2>Créez votre compte</h2>
        <form class="create-form" action="../scripts/submit/submit-create-account.php" method="POST">
            <div class="create-form1">
                <input class="create-fields" type="text" placeholder="Nom" id="createNom" name="nom" required>
                <input class="create-fields" type="text" placeholder="Prénom" id="createPrenom" name="prenom" required>
            </div>
            <input class="create-fields" type="tel" placeholder="Téléphone" id="createTelephone" name="telephone" pattern="[0-9]{10}" required><br><br>
            <input class="create-fields" type="email" placeholder="Email" id="createEmail" name="email" required><br><br>
            <input class="create-fields" type="password" placeholder="Mot de passe" id="createMdp" name="motdepasse" required pattern="^(?=.*[0-9])(?=.*[!@#$%^&*])[A-Za-z0-9!@#$%^&*]{8,}$" title="Le mot de passe ne doit pas contenir d'accents et doit contenir 8 caracteres dont 1 chiffre et 1 caractere special (! @ # $ % ^ & *)"><br><br>
            <input class="create-fields" type="password" placeholder="Confirmez le mot de passe" id="createConfirmationMdp" name="confirmationmdp" required pattern="^(?=.*[0-9])(?=.*[!@#$%^&*])[A-Za-z0-9!@#$%^&*]{8,}$" title="Le mot de passe ne doit pas contenir d'accents et doit contenir 8 caracteres dont 1 chiffre et 1 caractere special (! @ # $ % ^ & *)"><br><br>
            <input class="create-fields" type="text" placeholder="Code" id="createCode" name="code" pattern="[0-9]{5}" required title="Le code doit contenir 5 chiffres"><br><br>

            <input class="create-submit" type="submit" name="submit_create" value="Créer le compte">
        </form>
    </main>

</body>
</html>

<?php
    $includeFile = "../scripts/submit/submit-create-account.php";
    if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
?>