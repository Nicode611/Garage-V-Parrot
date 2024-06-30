<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/contact.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/global.css">
    <title>Contactez nous</title>
</head>
<body>

<?php
    $includeFile = "../includes/header.php";
    if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
?>

<?php if (isset($_SESSION["success"])) { echo $_SESSION["success"]; unset($_SESSION["success"]); } else { if (isset($_SESSION["error"])) echo $_SESSION["error"]; unset($_SESSION["error"]); } ?>

<main>
    <h2>Contactez nous</h2>
    <div class="form-container">
        <div class="glow"></div>
        <form class="contact-form" action="../scripts/submit/submit-contacts.php" method="POST">
        <input type="text" placeholder="Objet" id="contactObjet" name="objet"
        <?php if (isset($_POST["car_contact"])) { 
            $model = $_POST["model"];
            $year = $_POST["year"];
            $km = $_POST["km"];
            ?> value="<?php echo $model . ' / ' . $year . ' / ' . $km ?>" 
        <?php } ?>
        required>
            <div class="first-line">
                <input type="text" placeholder="Nom" id="contactNom" name="nom" required>
                <input type="tel" placeholder="Téléphone" id="contactTelephone" name="telephone" pattern="[0-9]{10}" required >
            </div>
            <input type="email" placeholder="Email" id="contactEmail" name="email" required>
            <textarea id="contactMessage" placeholder="Message" name="message" rows="4" cols="50" required></textarea>
            <input id="contactSubmit" type="submit" name="submit_contact" value="Envoyer">
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
    $includeFile = "../scripts/submit/submit-contacts.php";
    if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
?>