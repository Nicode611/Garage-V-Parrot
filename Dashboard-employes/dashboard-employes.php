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
        require "../Header/header.html";
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
        <div class="dashboard-occasions hide">
            <div class="vehicules-container">
                <div class="vehicules-imgs">
                    <div class="vehicules">
                        <svg viewBox="-102.4 -102.4 1228.80 1228.80" fill="#ffffff" class="vehicules-delete" version="1.1" xmlns="http://www.w3.org/2000/svg" transform="matrix(1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="6.144"></g><g id="SVGRepo_iconCarrier"><path d="M512 897.6c-108 0-209.6-42.4-285.6-118.4-76-76-118.4-177.6-118.4-285.6 0-108 42.4-209.6 118.4-285.6 76-76 177.6-118.4 285.6-118.4 108 0 209.6 42.4 285.6 118.4 157.6 157.6 157.6 413.6 0 571.2-76 76-177.6 118.4-285.6 118.4z m0-760c-95.2 0-184.8 36.8-252 104-67.2 67.2-104 156.8-104 252s36.8 184.8 104 252c67.2 67.2 156.8 104 252 104 95.2 0 184.8-36.8 252-104 139.2-139.2 139.2-364.8 0-504-67.2-67.2-156.8-104-252-104z" fill=""></path><path d="M707.872 329.392L348.096 689.16l-31.68-31.68 359.776-359.768z" fill=""></path><path d="M328 340.8l32-31.2 348 348-32 32z" fill=""></path></g></svg>
                        <img class="vehicules-img" src="../img/peugeot 308.png">
                    </div>
                    
                    <div class="vehicules">
                        <svg viewBox="-102.4 -102.4 1228.80 1228.80" fill="#ffffff" class="vehicules-delete" version="1.1" xmlns="http://www.w3.org/2000/svg" transform="matrix(1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="6.144"></g><g id="SVGRepo_iconCarrier"><path d="M512 897.6c-108 0-209.6-42.4-285.6-118.4-76-76-118.4-177.6-118.4-285.6 0-108 42.4-209.6 118.4-285.6 76-76 177.6-118.4 285.6-118.4 108 0 209.6 42.4 285.6 118.4 157.6 157.6 157.6 413.6 0 571.2-76 76-177.6 118.4-285.6 118.4z m0-760c-95.2 0-184.8 36.8-252 104-67.2 67.2-104 156.8-104 252s36.8 184.8 104 252c67.2 67.2 156.8 104 252 104 95.2 0 184.8-36.8 252-104 139.2-139.2 139.2-364.8 0-504-67.2-67.2-156.8-104-252-104z" fill=""></path><path d="M707.872 329.392L348.096 689.16l-31.68-31.68 359.776-359.768z" fill=""></path><path d="M328 340.8l32-31.2 348 348-32 32z" fill=""></path></g></svg>
                        <img class="vehicules-img" src="../img/audi rs4.png">
                    </div>
                    <div class="vehicules">
                        <svg viewBox="-102.4 -102.4 1228.80 1228.80" fill="#ffffff" class="vehicules-delete" version="1.1" xmlns="http://www.w3.org/2000/svg" transform="matrix(1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="6.144"></g><g id="SVGRepo_iconCarrier"><path d="M512 897.6c-108 0-209.6-42.4-285.6-118.4-76-76-118.4-177.6-118.4-285.6 0-108 42.4-209.6 118.4-285.6 76-76 177.6-118.4 285.6-118.4 108 0 209.6 42.4 285.6 118.4 157.6 157.6 157.6 413.6 0 571.2-76 76-177.6 118.4-285.6 118.4z m0-760c-95.2 0-184.8 36.8-252 104-67.2 67.2-104 156.8-104 252s36.8 184.8 104 252c67.2 67.2 156.8 104 252 104 95.2 0 184.8-36.8 252-104 139.2-139.2 139.2-364.8 0-504-67.2-67.2-156.8-104-252-104z" fill=""></path><path d="M707.872 329.392L348.096 689.16l-31.68-31.68 359.776-359.768z" fill=""></path><path d="M328 340.8l32-31.2 348 348-32 32z" fill=""></path></g></svg>
                        <img class="vehicules-img" src="../img/audi tt.png">
                    </div>
                    <div class="vehicules">
                        <svg viewBox="-102.4 -102.4 1228.80 1228.80" fill="#ffffff" class="vehicules-delete" version="1.1" xmlns="http://www.w3.org/2000/svg" transform="matrix(1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="6.144"></g><g id="SVGRepo_iconCarrier"><path d="M512 897.6c-108 0-209.6-42.4-285.6-118.4-76-76-118.4-177.6-118.4-285.6 0-108 42.4-209.6 118.4-285.6 76-76 177.6-118.4 285.6-118.4 108 0 209.6 42.4 285.6 118.4 157.6 157.6 157.6 413.6 0 571.2-76 76-177.6 118.4-285.6 118.4z m0-760c-95.2 0-184.8 36.8-252 104-67.2 67.2-104 156.8-104 252s36.8 184.8 104 252c67.2 67.2 156.8 104 252 104 95.2 0 184.8-36.8 252-104 139.2-139.2 139.2-364.8 0-504-67.2-67.2-156.8-104-252-104z" fill=""></path><path d="M707.872 329.392L348.096 689.16l-31.68-31.68 359.776-359.768z" fill=""></path><path d="M328 340.8l32-31.2 348 348-32 32z" fill=""></path></g></svg>
                        <img class="vehicules-img" src="../img/lamborghini urus.png">
                    </div>
                    <div class="vehicules">
                        <svg viewBox="-102.4 -102.4 1228.80 1228.80" fill="#ffffff" class="vehicules-delete" version="1.1" xmlns="http://www.w3.org/2000/svg" transform="matrix(1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="6.144"></g><g id="SVGRepo_iconCarrier"><path d="M512 897.6c-108 0-209.6-42.4-285.6-118.4-76-76-118.4-177.6-118.4-285.6 0-108 42.4-209.6 118.4-285.6 76-76 177.6-118.4 285.6-118.4 108 0 209.6 42.4 285.6 118.4 157.6 157.6 157.6 413.6 0 571.2-76 76-177.6 118.4-285.6 118.4z m0-760c-95.2 0-184.8 36.8-252 104-67.2 67.2-104 156.8-104 252s36.8 184.8 104 252c67.2 67.2 156.8 104 252 104 95.2 0 184.8-36.8 252-104 139.2-139.2 139.2-364.8 0-504-67.2-67.2-156.8-104-252-104z" fill=""></path><path d="M707.872 329.392L348.096 689.16l-31.68-31.68 359.776-359.768z" fill=""></path><path d="M328 340.8l32-31.2 348 348-32 32z" fill=""></path></g></svg>
                        <img class="vehicules-img" src="../img/mercedes amg.png">
                    </div>
                    <div class="vehicules">
                        <svg viewBox="-102.4 -102.4 1228.80 1228.80" fill="#ffffff" class="vehicules-delete" version="1.1" xmlns="http://www.w3.org/2000/svg" transform="matrix(1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="6.144"></g><g id="SVGRepo_iconCarrier"><path d="M512 897.6c-108 0-209.6-42.4-285.6-118.4-76-76-118.4-177.6-118.4-285.6 0-108 42.4-209.6 118.4-285.6 76-76 177.6-118.4 285.6-118.4 108 0 209.6 42.4 285.6 118.4 157.6 157.6 157.6 413.6 0 571.2-76 76-177.6 118.4-285.6 118.4z m0-760c-95.2 0-184.8 36.8-252 104-67.2 67.2-104 156.8-104 252s36.8 184.8 104 252c67.2 67.2 156.8 104 252 104 95.2 0 184.8-36.8 252-104 139.2-139.2 139.2-364.8 0-504-67.2-67.2-156.8-104-252-104z" fill=""></path><path d="M707.872 329.392L348.096 689.16l-31.68-31.68 359.776-359.768z" fill=""></path><path d="M328 340.8l32-31.2 348 348-32 32z" fill=""></path></g></svg>
                        <img class="vehicules-img" src="../img/skoda fabia.png">
                    </div>
                </div>
                <form class="occasions-form" action="traitement.php" method="post" enctype="multipart/form-data">
                    <h3>Ajouter un véhicule :</h3>
                    <div class="occasions-form1">
                        <input placeholder="Modèle" type="text" name="modele" id="occasions-modele" required>
                        <input placeholder="Année" type="number" name="annee" id="occasions-annee" min="1900" max="2099" required>
                        <input placeholder="Kilométrage" type="number" name="kilometrage" id="occasions-kilometrage" required>
                        <input placeholder="Prix" type="number" name="prix" id="occasions-prix" step="0.01" required>
                    </div>
                    <br>
                    <div class="occasions-form2">
                        <input type="file" name="image" id="occasions-image" accept="image/*" required>
                        <textarea placeholder="Description" name="description" id="occasions-description" rows="4" required></textarea>
                    </div>
                    <br>

                    <input class="occasions-submit" type="submit" value="Ajouter le véhicule">
                </form>
            </div>
        </div>


    </main>


    <script src="../Scripts/script-dashboard.js"></script>
</body>
</html>