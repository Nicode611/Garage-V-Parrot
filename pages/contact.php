<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/contact.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <title>Garage V. Parrot</title>
</head>
<body>

<?php
    $includeFile = "../includes/header.php";
    if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
?>

<main>
    <h2>Contactez nous</h2>
    <div class="form-container">
        <div class="glow"></div>
        <form class="contact-form" action="../scripts/submit/submit-contacts.php" method="POST">
            <div class="first-line">
                <input type="text" placeholder="Nom" id="contactNom" name="nom" required>
                <input type="tel" placeholder="Téléphone" id="contactTelephone" name="telephone">
            </div>
            <input type="email" placeholder="Email" id="contactEmail" name="email" required>
            <textarea id="contactMessage" placeholder="Message" name="message" rows="4" cols="50" required></textarea>
            <input id="contactSubmit" type="submit" value="Envoyer">
        </form>
    </div>
</main>

<?php
    $includeFile = "../includes/footer.php";
    if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
?>

</body>
</html>

<?php
    $includeFile = "../script/submit/submit-contacts.php";
    if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
?>