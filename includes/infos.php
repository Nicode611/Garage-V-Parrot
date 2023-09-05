<link rel="stylesheet" href="../assets/css/infos.css">

<form class="infos-form" method="post">
    <img class="user-icon" src="/Garage-V-Parrot/assets/images/user-icon.png"><br>
    <label for="prenom">Prénom :</label>
    <input class="infos-fields" type="text" name="prenom" id="prenom" value="<?php echo $_SESSION["user_prénom"]; ?>">
    <br>
    <label for="nom">Nom :</label>
    <input class="infos-fields" type="text" name="nom" id="nom" value="<?php echo $_SESSION["user_nom"]; ?>">
    <br>
    <label for="telephone">Téléphone :</label>
    <input class="infos-fields" type="tel" name="telephone" id="telephone" value="<?php echo $_SESSION["user_telephone"]; ?>">
    <br>
    <label for="email">Adresse e-mail :</label>
    <input class="infos-fields" type="email" name="email" id="email" value="<?php echo $_SESSION["user_email"]; ?>">
    <br>
    <label for="password">Mot de passe :</label>
    <input class="infos-fields" type="password" name="password" id="password">
    <br>
    <label for="confirm_password">Confirmation du mot de passe :</label>
    <input class="infos-fields" type="password" name="confirm_password" id="confirm_password">
    <br>
    <input class="infos-submit" type="submit" name="submit_infos" value="Modifier les informations">
</form>

<?php
    $includeFile = "../scripts/submit/submit-infos.php";
    if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
?>