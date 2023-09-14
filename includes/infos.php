<link rel="stylesheet" href="../assets/css/infos.css">

<form class="infos-form" action="../scripts/submit/submit-infos.php" method="post">
    <img class="user-icon" src="../assets/images/user-icon.png"><br>
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
    <span class="attention"><svg height="20px" width="20px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#950f0f" stroke="#950f0f"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#941919;} </style> <g> <path class="st0" d="M509.08,448.217L274.676,42.218c-8.299-14.376-29.051-14.376-37.352,0L2.922,448.217 c-8.301,14.376,2.074,32.347,18.674,32.347h468.806C507.003,480.564,517.378,462.594,509.08,448.217z M277.035,423.636 c0,2.68-9.418,4.853-21.033,4.853c-11.619,0-21.037-2.173-21.037-4.853V389.98c0-2.68,9.418-4.853,21.037-4.853 c11.615,0,21.033,2.174,21.033,4.853V423.636z M273.529,345.11c0.008,0.1,0.066,0.195,0.066,0.3c0,4.344-7.879,7.866-17.594,7.866 c-9.721,0-17.596-3.522-17.596-7.866c0-0.102,0.056-0.198,0.066-0.3l-10.936-140.5c0-4.344,12.744-7.866,28.465-7.866 s28.463,3.522,28.463,7.866L273.529,345.11z"></path> </g> </g></svg> Indiquez ou remplacez votre mdp </span>
    <br>
    <label for="password">Mot de passe :</label>
    <input class="infos-fields" type="password" name="password" id="password" required pattern="^(?=.*[0-9])(?=.*[!@#$%^&*])[A-Za-z0-9!@#$%^&*]{8,}$" title="Le mot de passe doit contenir 8 caracteres dont 1 chiffre et un caractere special (! @ # $ % ^ & *)">
    <br>
    <label for="confirm_password">Confirmation du mot de passe :</label>
    <input class="infos-fields" type="password" name="confirm_password" id="confirm_password" required pattern="^(?=.*[0-9])(?=.*[!@#$%^&*])[A-Za-z0-9!@#$%^&*]{8,}$" title="Le mot de passe doit contenir 8 caracteres dont 1 chiffre et un caractere special (! @ # $ % ^ & *)">
    <br>
    <input class="infos-submit" type="submit" name="submit_infos" value="Modifier les informations">
</form>

<?php
    $includeFile = "../scripts/submit/submit-infos.php";
    if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
?>