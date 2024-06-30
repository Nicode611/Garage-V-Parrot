<?php
    $includeFile = "../includes/header.php";
    if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
    
    if ($_SESSION["user_role"] == "Admin") { ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/dashboard-admin.css">
    <link rel="stylesheet" href="../assets/css/global.css">
    <title>Dashboard administrateur</title>
</head>
<body>

    <main>
        <div class="sidebar">
            <div class="sidebar-btn">
                <div class="btn-line"></div>
                <div class="btn-line"></div>
                <div class="btn-line"></div>
            </div>
            <nav class="sidebar-nav">
                <ul class="sidebar-ul">
                    <li class="sidebar-li sidebar-infos sidebar-active" id="sidebar-element">Infos personelles</li>
                    <li class="sidebar-li sidebar-services" id="sidebar-element">Services</li>
                    <li class="sidebar-li sidebar-occasions" id="sidebar-element">Occasions</li>
                    <li class="sidebar-li sidebar-horaires" id="sidebar-element">Horaires</li>
                    <li class="sidebar-li sidebar-employes" id="sidebar-element">Employés</li>
                    <li class="sidebar-li sidebar-avis" id="sidebar-element">Avis</li>
                    <li class="sidebar-li sidebar-contact" id="sidebar-element">Contact</li>
                </ul>
            </nav>
            <div class="dashboard-overlay"></div>
        </div>

        <!-- Infos -->
        <div class="dashboard-infos">
            
            <?php
                $includeFile = "../includes/infos.php";
                if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
            ?>
            <?php
                $includeFile = "../scripts/submit/submit-infos.php";
                if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
            ?>
        </div>


        <!-- Services -->
        <div class="dashboard-services hide">
            <?php
                $includeFile = "../includes/service.php";
                if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
            ?>
            <?php
                $includeFile = "../scripts/submit/submit-service.php";
                if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
            ?>
        </div>


        <!-- Occasions -->
        <div class="dashboard-occasions hide">
        <?php
            $includeFile = "../includes/dashboard-occasions.php";
            if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
        ?>
        </div>
        


        <!-- Horaires -->
        <div class="dashboard-horaires hide"> 
            <form class="horaires-form" action="../scripts/submit/submit-horaires.php" method="post">
                <h3>Modifier les horaires :</h3>
                <label for="jour">Jour de la semaine :</label>
                <select name="jour" id="jour">
                    <option value="lundi">Lundi</option>
                    <option value="mardi">Mardi</option>
                    <option value="mercredi">Mercredi</option>
                    <option value="jeudi">Jeudi</option>
                    <option value="vendredi">Vendredi</option>
                </select>
                <div class="horaires-form1">
                    <div class="horaires-form-matin">
                        <h4>Matin</h4>
                        <label for="heureOuverture">Ouverture :</label>
                        <input type="time" name="heureOuvertureMatin" value="08:00">
                        <label for="heureFermeture">Fermeture :</label>
                        <input type="time" name="heureFermetureMatin" value="11:30">
                    </div>
                    <div class="horaires-form-apresmidi">
                        <h4>Après-midi</h4>
                        <label for="heureOuverture">Ouverture :</label>
                        <input type="time" name="heureOuvertureApresMidi" value="12:00">
                        <label for="heureFermeture">Fermeture :</label>
                        <input type="time" name="heureFermetureApresMidi" value="17:00">
                    </div>
                </div>
                <input class="horaires-submit" type="submit" name="submit_horaires" value="Enregistrer">
            </form>
            <?php
            $includeFile = "../scripts/submit/submit-horaires.php";
            if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
        ?>
        </div>


        <!-- Employés -->
        <div class="dashboard-employes hide">
            <?php
                $includeFile = "../scripts/affichage/affichage-employes.php";
                if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
            ?>
            <form class="employe-form" action="../scripts/submit/submit-employes.php" method="POST">
                <h3>Ajouter un employé :</h3>
                <div>
                    <select id="role" name="role" required>
                        <option value="Admin">Admin</option>
                        <option value="Employé">Employé</option>
                    </select>
                    <input type="text" placeholder="Code a 5 chiffres" id="code" name="code" pattern="[0-9]{5}" required title="Le code doit contenir 5 chiffres">
                    <input type="text" placeholder="Nom" id="employeNom" name="nom" required>
                    <input type="text" placeholder="Prénom" id="employéPrenom" name="prenom" required>
                </div>
                <input class="employe-submit" type="submit" name="submit_employe" value="Ajouter">
            </form>
        <?php
            $includeFile = "../scripts/submit/submit-employes.php";
            if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
        ?>
        </div>


        <!-- Avis -->
        <div class="dashboard-avis hide">
            <h3>Nouveaux avis</h3>
            <div class="new-avis">
                <?php
                    $includeFile = "../scripts/affichage/affichage-new-avis.php";
                    if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
                ?>
            </div>
            <div class="dividing-bar"></div>
            <h3>Avis vérifiés</h3>
            <div class="verified-avis">
                <?php
                    $includeFile = "../scripts/affichage/affichage-verified-avis.php";
                    if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
                ?>
            </div>

            
        </div>
        
        <!-- Contact -->
        <div class="dashboard-contacts hide">
        <?php
            $includeFile = "../scripts/affichage/affichage-contacts.php";
            if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
        ?>
        </div>
        <script src="../assets/js/script-dashboard.js"></script>
</main>
</body>
</html>

<?php } else {
        if ($_SESSION["user_role"] == "Employé") {
            header("Location: pages/dashboard-employes.php");
        } else {
            header("Location: ../index.php");
        }
    }
?>