<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/dashboard-employes.css">
    <link rel="stylesheet" href="../assets/css/dashboard-admin.css">
    <title>Garage V. Parrot</title>
</head>
<body>
    
    <?php
        $includeFile = "../includes/header.php";
        if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
    ?>

    <main>
        <div class="sidebar">
            <div class="sidebar-btn">
                <div class="btn-line"></div>
                <div class="btn-line"></div>
                <div class="btn-line"></div>
            </div>
            <nav class="sidebar-nav">
                <ul class="sidebar-ul">
                    <li class="sidebar-li sidebar-infos sidebar-active">Infos personelles</li>
                    <li class="sidebar-li sidebar-occasions">Occasions</li>
                </ul>
            </nav>
            <div class="dashboard-overlay"></div>
        </div>


        <!-- Partie infos -->
        <div class="dashboard-infos">
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
                $includeFile = "../config/script-submit-infos.php";
                if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
            ?>
        </div>


        <!-- Partie Occasions -->
        <div class="dashboard-occasions hide">
        <?php
                $includeFile = "../includes/dashboard-occasions.php";
                if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
            ?>
        </div>


    </main>


    <script src="../assets/js/script-dashboard.js"></script>
</body>
</html>