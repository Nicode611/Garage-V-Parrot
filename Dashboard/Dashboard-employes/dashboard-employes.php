<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard-employes.css">
    <title>Garage V. Parrot</title>
</head>
<body>
    
    <?php 
        require "../../Header/header.html";
    ?>

    <main>
        <div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="sidebar-ul">
                    <li class="sidebar-li sidebar-infos sidebar-active">Infos personelles</li>
                    <li class="sidebar-li sidebar-occasions">Occasions</li>
                </ul>
            </nav>
        </div>


        <!-- Partie infos -->
        <div class="dashboard-infos">
            <img class="user-icon" src="/Garage-V-Parrot/Header/user-icon.png">
            <form class="infos-form" action="traitement.php" method="post">
                <label for="prenom">Prénom :</label>
                <input class="infos-fields" type="text" name="prenom" id="prenom">
                <br>
                <label for="nom">Nom :</label>
                <input class="infos-fields" type="text" name="nom" id="nom">
                <br>
                <label for="telephone">Téléphone :</label>
                <input class="infos-fields" type="tel" name="telephone" id="telephone">
                <br>
                <label for="email">Adresse e-mail :</label>
                <input class="infos-fields" type="email" name="email" id="email">
                <br>
                <label for="password">Mot de passe :</label>
                <input class="infos-fields" type="password" name="password" id="password">
                <br>
                <label for="confirm_password">Confirmation du mot de passe :</label>
                <input class="infos-fields" type="password" name="confirm_password" id="confirm_password">
                <br>
                <input class="infos-submit" type="submit" value="Modifier les informations">
            </form>
        </div>


        <!-- Partie Occasions -->
        <?php 
            require "../dashboard-occasions.html";
        ?>


    </main>


    <script src="../../Scripts/script-dashboard.js"></script>
</body>
</html>