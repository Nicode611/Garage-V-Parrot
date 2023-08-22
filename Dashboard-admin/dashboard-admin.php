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
        <div class="dashboard-services">
        <div class="glow"></div>
            <h2 class="main-title">Nos services</h2>
            <div class="services-section">
                <div class="service">
                    <img class="service-img" src="../img/réparation auto.jpg" alt="">
                    <div class="service-infos">
                        <h3 class="service-title">Réparation auto</h3>
                        <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis euismod scelerisque faucibus. Curabitur vitae arcu id odio placerat rhoncus </p>
                    </div>
                </div>
                <div class="service">
                    <img class="service-img" src="../img/nettoyage voitures.jpg" alt="">
                    <div class="service-infos">
                        <h3 class="service-title">Lavage intégral auto</h3>
                        <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis euismod scelerisque faucibus. Curabitur vitae arcu id odio placerat rhoncus </p>
                    </div>
                </div>
                <div class="service">
                    <img class="service-img" src="../img/vente de véhicule d'occasion.jpg" alt="">
                    <div class="service-infos">
                        <h3 class="service-title">Véhicules d’occasion</h3>
                        <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis euismod scelerisque faucibus. Curabitur vitae arcu id odio placerat rhoncus </p>
                    </div>
                </div>
                <div class="service-form-container">
                <form class="service-form" action="traitement.php" method="post" enctype="multipart/form-data">
        
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
                    <input type="submit" value="Télécharger et Soumettre">
                </form>
                </div>
            </div>
        </main>
    </main>


    <script src="/Scripts/script-dashboard.js"></script>
</body>
</html>