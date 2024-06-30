<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/avis.css">
    <title>Ajouter un avis</title>
</head>
<body>
    
<?php
    $includeFile = "../includes/header.php";
    if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
?>

<main>
    <div class="avis-form-container">
        <form class="avis-form" action="../scripts/submit/submit-avis.php" method="post">
            <h3>Ajoutez votre avis :</h3>
            <label for="jour">Avis :</label>
            <textarea class="avis" name="avis" maxlength="250"required></textarea><br>
            <label for="nom">Votre nom :</label>
            <input type="text" class="nom" name="nom" required><br>
            <input class="avis-submit" type="submit" name="submit_avis" value="Envoyer">
        </form> 
    </div>
</main>

<?php
    $includeFile = "../includes/footer.php";
    if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
?>

</body>
</html>