<div class="services-main">
    <div class="glow"></div>
    <h2 class="main-title">Nos services</h2>
    <div class="services-section" id="services-section">
        <?php
        $includeFile = "../scripts/affichage/affichage-services.php";
        if (file_exists($includeFile)) {
            include($includeFile);
        } else {
            echo "Le fichier $includeFile n'a pas été trouvé.";
        }
        ?>
    </div>

    <div class="service-form-container">
        <form class="service-form" action="../scripts/submit/submit-service.php" method="post" enctype="multipart/form-data">
            <h3>Ajouter un service :</h3>
            <div class="service-form1">
                <input type="file" name="image" id="service-image" accept="image/*" required>
                <input placeholder="Titre" type="text" name="titre" id="service-titre" required>
                <textarea placeholder="Texte" name="texte" id="service-texte" rows="4" cols="50" required></textarea>
            </div>
            <input class="service-submit" type="submit" name="submit_service" value="Valider">
        </form>
    </div>
</div>
</div>

</html>