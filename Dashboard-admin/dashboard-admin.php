<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard-admin.css">
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
                    <li class="sidebar-li sidebar-services sidebar-active">Services</li>
                    <li class="sidebar-li sidebar-occasions">Occasions</li>
                    <li class="sidebar-li sidebar-horaires">Horaires</li>
                    <li class="sidebar-li sidebar-employes">Employés</li>
                </ul>
            </nav>
        </div>


        <!-- Partie services -->
        <div class="dashboard-services">
            <div class="glow"></div>
            <h2 class="main-title">Nos services</h2>
            <div class="services-section">
                <div class="service">
                <svg viewBox="-102.4 -102.4 1228.80 1228.80" fill="#ffffff" class="delete-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" transform="matrix(1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="6.144"></g><g id="SVGRepo_iconCarrier"><path d="M512 897.6c-108 0-209.6-42.4-285.6-118.4-76-76-118.4-177.6-118.4-285.6 0-108 42.4-209.6 118.4-285.6 76-76 177.6-118.4 285.6-118.4 108 0 209.6 42.4 285.6 118.4 157.6 157.6 157.6 413.6 0 571.2-76 76-177.6 118.4-285.6 118.4z m0-760c-95.2 0-184.8 36.8-252 104-67.2 67.2-104 156.8-104 252s36.8 184.8 104 252c67.2 67.2 156.8 104 252 104 95.2 0 184.8-36.8 252-104 139.2-139.2 139.2-364.8 0-504-67.2-67.2-156.8-104-252-104z" fill=""></path><path d="M707.872 329.392L348.096 689.16l-31.68-31.68 359.776-359.768z" fill=""></path><path d="M328 340.8l32-31.2 348 348-32 32z" fill=""></path></g></svg>
                    <img class="service-img" src="../img/réparation auto.jpg" alt="">
                    <div class="service-infos">
                        <h3 class="service-title">Réparation auto</h3>
                        <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis euismod scelerisque faucibus. Curabitur vitae arcu id odio placerat rhoncus </p>
                    </div>
                </div>
                <div class="service">
                <div class="service-delete"></div>
                <svg viewBox="-102.4 -102.4 1228.80 1228.80" fill="#ffffff" class="delete-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" transform="matrix(1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="6.144"></g><g id="SVGRepo_iconCarrier"><path d="M512 897.6c-108 0-209.6-42.4-285.6-118.4-76-76-118.4-177.6-118.4-285.6 0-108 42.4-209.6 118.4-285.6 76-76 177.6-118.4 285.6-118.4 108 0 209.6 42.4 285.6 118.4 157.6 157.6 157.6 413.6 0 571.2-76 76-177.6 118.4-285.6 118.4z m0-760c-95.2 0-184.8 36.8-252 104-67.2 67.2-104 156.8-104 252s36.8 184.8 104 252c67.2 67.2 156.8 104 252 104 95.2 0 184.8-36.8 252-104 139.2-139.2 139.2-364.8 0-504-67.2-67.2-156.8-104-252-104z" fill=""></path><path d="M707.872 329.392L348.096 689.16l-31.68-31.68 359.776-359.768z" fill=""></path><path d="M328 340.8l32-31.2 348 348-32 32z" fill=""></path></g></svg>
                    <img class="service-img" src="../img/nettoyage voitures.jpg" alt="">
                    <div class="service-infos">
                        <h3 class="service-title">Lavage intégral auto</h3>
                        <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis euismod scelerisque faucibus. Curabitur vitae arcu id odio placerat rhoncus </p>
                    </div>
                </div>
                <div class="service">
                <div class="service-delete"></div>
                <svg viewBox="-102.4 -102.4 1228.80 1228.80" fill="#ffffff" class="delete-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" transform="matrix(1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="6.144"></g><g id="SVGRepo_iconCarrier"><path d="M512 897.6c-108 0-209.6-42.4-285.6-118.4-76-76-118.4-177.6-118.4-285.6 0-108 42.4-209.6 118.4-285.6 76-76 177.6-118.4 285.6-118.4 108 0 209.6 42.4 285.6 118.4 157.6 157.6 157.6 413.6 0 571.2-76 76-177.6 118.4-285.6 118.4z m0-760c-95.2 0-184.8 36.8-252 104-67.2 67.2-104 156.8-104 252s36.8 184.8 104 252c67.2 67.2 156.8 104 252 104 95.2 0 184.8-36.8 252-104 139.2-139.2 139.2-364.8 0-504-67.2-67.2-156.8-104-252-104z" fill=""></path><path d="M707.872 329.392L348.096 689.16l-31.68-31.68 359.776-359.768z" fill=""></path><path d="M328 340.8l32-31.2 348 348-32 32z" fill=""></path></g></svg>
                    <img class="service-img" src="../img/vente de véhicule d'occasion.jpg" alt="">
                    <div class="service-infos">
                        <h3 class="service-title">Véhicules d’occasion</h3>
                        <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis euismod scelerisque faucibus. Curabitur vitae arcu id odio placerat rhoncus </p>
                    </div>
                </div>
                <div class="service-form-container">
                <form class="service-form" action="traitement.php" method="post" enctype="multipart/form-data">
                    <div class="service-add">
                        <div class="service-add-img">
                            <label for="image">Image :</label><br>
                            <input type="file" name="image" id="image" accept="image/*" required>
                        </div>
                        <div class="service-add-infos">
                            <label for="titre">Titre :</label>
                            <input type="text" name="titre" id="titre" required><br>
        
                            <label for="texte">Texte :</label>
                            <textarea name="texte" id="texte" rows="4" cols="50" required></textarea><br>
                        </div>
                    </div>
                    <input class="submit" type="submit" value="Valider">
                </form>
                </div>
            </div>
        </div>


        <!-- Partie Occasions -->
        <div class="dashboard-occasions hide">
            <div class="vehicules-container">
                <div>
                    <h2>Véhicules d'occasions</h2>
                    <p>Nos véhicules d’occasion disponibles à l’achat.</p>
                </div>
                <div class="vehicules-imgs">
                    <img class="vehicules-img" src="../img/peugeot 308.png">
                    <img class="vehicules-img" src="../img/audi rs4.png">
                    <img class="vehicules-img" src="../img/audi tt.png">
                    <img class="vehicules-img" src="../img/lamborghini urus.png">
                    <img class="vehicules-img" src="../img/mercedes amg.png">
                    <img class="vehicules-img vehicule-active" src="../img/skoda fabia.png">
                </div>
            </div>
            <div class="vehicule-card">
                <img class="vehicule-img" src="../img/skoda fabia.png" alt="">
                <div class="card-bottom">
                    <div class="topline">
                        <h3 class="vehicule-model">Skoda Fabia</h3>
                        <div>
                            <h4 class="vehicule-year vehicule-infos">2015</h4>
                            <h4 class="vehicule-km vehicule-infos">165 000 km</h4>
                        </div>
                    </div>
                    <p class="vehicule-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque libero urna, blandit pellentesque arcu at, ornare vehicula velit. Praesent tortor dolor, consequat at elementum ut, sollicitudin vitae enim.</p>
                    <h3 class="vehicule-price">12 500 €</h3>
                </div>
            </div>
        </div>
        <script src="../Scripts/script-selection-vehicule.js"></script>


        <!-- Partie Horaires -->
        <div class="dashboard-horaires hide">
            <h2>Modifiez les horaires</h2>
            <form class="horaires-form" action="traitement.php" method="post">
                <label for="jour">Jour de la semaine :</label>
                <select name="jour" id="jour">
                    <option value="lundi">Lundi</option>
                    <option value="mardi">Mardi</option>
                    <option value="mercredi">Mercredi</option>
                    <option value="jeudi">Jeudi</option>
                    <option value="vendredi">Vendredi</option>
                    <option value="samedi">Samedi</option>
                    <option value="dimanche">Dimanche</option>
                </select>

                <label for="heureOuverture">Heure d'Ouverture :</label>
                <input type="time" name="heureOuverture" id="heureOuverture">

                <label for="heureFermeture">Heure de Fermeture :</label>
                <input type="time" name="heureFermeture" id="heureFermeture">

                <input class="submit" type="submit" value="Enregistrer">
            </form>
        </div>


        <!-- Partie Employés -->
        <div class="dashboard-employes">
            
        </div>
    </main>


    <script src="../Scripts/script-dashboard-admin.js"></script>
</body>
</html>