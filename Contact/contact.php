<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="../Header/header.css">
    <title>Garage V. Parrot</title>
</head>
<body>
    
<?php
    require "../Header/header.html";
?>

<main>
    <h2>Contactez nous</h2>

    <div class="form-container">
        <div class="glow"></div>
        <form class="form" action="traitement.php" method="POST">
            <div class="first-line">
                <input type="text" placeholder="Nom" id="nom" name="nom" required>
        
                <input type="tel" placeholder="Téléphone" id="telephone" name="telephone">
            </div>

            <br><br>
    
            <input type="email" placeholder="Email" id="email" name="email" required><br><br>
    
            <textarea id="message" placeholder="Message" name="message" rows="4" cols="50" required></textarea><br><br>
    
            <input id="send" type="submit" value="Envoyer">
        </form>
    </div>
</main>

<?php
    require "../Footer/footer.php";
?>

</body>
</html>