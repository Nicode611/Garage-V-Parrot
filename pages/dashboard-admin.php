<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/dashboard-admin.css">
    <title>Garage V. Parrot</title>
</head>
<body>
    
<?php
    $includeFile = "../includes/header.html";

    if (file_exists($includeFile)) {
        include($includeFile);
    } else {
        echo "Le fichier $includeFile n'a pas été trouvé.";
    }
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
                    <li class="sidebar-li sidebar-services sidebar-active">Services</li>
                    <li class="sidebar-li sidebar-occasions">Occasions</li>
                    <li class="sidebar-li sidebar-horaires">Horaires</li>
                    <li class="sidebar-li sidebar-employes">Employés</li>
                </ul>
            </nav>
            <div class="dashboard-overlay"></div>
        </div>


        <!-- Services -->
        <div class="dashboard-services">
            <?php
                $includeFile = "../includes/service.php";
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
            <form class="horaires-form" method="post">
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
                        <input type="time" name="heureOuvertureMatin" id="heureOuverture" value="08:00">
                        <label for="heureFermeture">Fermeture :</label>
                        <input type="time" name="heureFermetureMatin" id="heureFermeture" value="11:30">
                    </div>
                    <div class="horaires-form-apresmidi">
                        <h4>Après-midi</h4>
                        <label for="heureOuverture">Ouverture :</label>
                        <input type="time" name="heureOuvertureApresMidi" id="heureOuverture" value="12:00">
                        <label for="heureFermeture">Fermeture :</label>
                        <input type="time" name="heureFermetureApresMidi" id="heureFermeture" value="17:00">
                    </div>
                </div>
                <input class="horaires-submit" type="submit" name="submit_horaires" value="Enregistrer">
            </form>
        </div>
        <?php
            $includeFile = "../config/script-horaires.php";
            if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
        ?>



        <!-- Employés -->
        <div class="dashboard-employes hide">
            <div class="employe">
                <svg viewBox="-102.4 -102.4 1228.80 1228.80" fill="#ffffff" class="delete" version="1.1" xmlns="http://www.w3.org/2000/svg" transform="matrix(1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="6.144"></g><g id="SVGRepo_iconCarrier"><path d="M512 897.6c-108 0-209.6-42.4-285.6-118.4-76-76-118.4-177.6-118.4-285.6 0-108 42.4-209.6 118.4-285.6 76-76 177.6-118.4 285.6-118.4 108 0 209.6 42.4 285.6 118.4 157.6 157.6 157.6 413.6 0 571.2-76 76-177.6 118.4-285.6 118.4z m0-760c-95.2 0-184.8 36.8-252 104-67.2 67.2-104 156.8-104 252s36.8 184.8 104 252c67.2 67.2 156.8 104 252 104 95.2 0 184.8-36.8 252-104 139.2-139.2 139.2-364.8 0-504-67.2-67.2-156.8-104-252-104z" fill=""></path><path d="M707.872 329.392L348.096 689.16l-31.68-31.68 359.776-359.768z" fill=""></path><path d="M328 340.8l32-31.2 348 348-32 32z" fill=""></path></g></svg>
                <div class="code-employe">
                    <h3>Code employé</h3>
                    <p>023655</p>
                </div>
                <div class="nom-employe">
                    <h3>Nom</h3>
                    <p>RAE</p>
                </div>
                <div class="prenom-employe">
                    <h3>Prénom</h3>
                    <p>Carly</p>
                </div>
            </div>
            <div class="employe">
                <svg viewBox="-102.4 -102.4 1228.80 1228.80" fill="#ffffff" class="delete" version="1.1" xmlns="http://www.w3.org/2000/svg" transform="matrix(1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="6.144"></g><g id="SVGRepo_iconCarrier"><path d="M512 897.6c-108 0-209.6-42.4-285.6-118.4-76-76-118.4-177.6-118.4-285.6 0-108 42.4-209.6 118.4-285.6 76-76 177.6-118.4 285.6-118.4 108 0 209.6 42.4 285.6 118.4 157.6 157.6 157.6 413.6 0 571.2-76 76-177.6 118.4-285.6 118.4z m0-760c-95.2 0-184.8 36.8-252 104-67.2 67.2-104 156.8-104 252s36.8 184.8 104 252c67.2 67.2 156.8 104 252 104 95.2 0 184.8-36.8 252-104 139.2-139.2 139.2-364.8 0-504-67.2-67.2-156.8-104-252-104z" fill=""></path><path d="M707.872 329.392L348.096 689.16l-31.68-31.68 359.776-359.768z" fill=""></path><path d="M328 340.8l32-31.2 348 348-32 32z" fill=""></path></g></svg>
                <div class="code-employe">
                    <h3>Code employé</h3>
                    <p>023655</p>
                </div>
                <div class="nom-employe">
                    <h3>Nom</h3>
                    <p>MARSHALL</p>
                </div>
                <div class="prenom-employe">
                    <h3>Prénom</h3>
                    <p>Bruce</p>
                </div>
            </div>
            <div class="employe">
                <svg viewBox="-102.4 -102.4 1228.80 1228.80" fill="#ffffff" class="delete" version="1.1" xmlns="http://www.w3.org/2000/svg" transform="matrix(1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="6.144"></g><g id="SVGRepo_iconCarrier"><path d="M512 897.6c-108 0-209.6-42.4-285.6-118.4-76-76-118.4-177.6-118.4-285.6 0-108 42.4-209.6 118.4-285.6 76-76 177.6-118.4 285.6-118.4 108 0 209.6 42.4 285.6 118.4 157.6 157.6 157.6 413.6 0 571.2-76 76-177.6 118.4-285.6 118.4z m0-760c-95.2 0-184.8 36.8-252 104-67.2 67.2-104 156.8-104 252s36.8 184.8 104 252c67.2 67.2 156.8 104 252 104 95.2 0 184.8-36.8 252-104 139.2-139.2 139.2-364.8 0-504-67.2-67.2-156.8-104-252-104z" fill=""></path><path d="M707.872 329.392L348.096 689.16l-31.68-31.68 359.776-359.768z" fill=""></path><path d="M328 340.8l32-31.2 348 348-32 32z" fill=""></path></g></svg>
                <div class="code-employe">
                    <h3>Code employé</h3>
                    <p>023655</p>
                </div>
                <div class="nom-employe">
                    <h3>Nom</h3>
                    <p>CORDOZAR</p>
                </div>
                <div class="prenom-employe">
                    <h3>Prénom</h3>
                    <p>Calvin</p>
                </div>
            </div>
            <form class="employe-form" action="traitement.php" method="POST">
                <h3>Ajouter un employé :</h3>
                <div>
                    <input type="text" placeholder="Code employé" id="codeEmploye" name="codeEmploye" required>
                    <input type="text" placeholder="Nom" id="nomEmploye" name="nomEmploye" required>
                    <input type="text" placeholder="Prénom" id="prenomEmploye" name="prenomEmploye" required>
                </div>
                <input class="employe-submit" type="submit" value="Ajouter">
            </form>
        </div>
        <?php
            $includeFile = "../config/script-employes.php";
            if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
        ?>


</main>

    <script src="/Garage-V-Parrot/assets/js/script-dashboard.js"></script>
</body>
</html>