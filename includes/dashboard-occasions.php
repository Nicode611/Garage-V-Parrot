<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/dashboard-occasions.css">
    <link rel="stylesheet" href="../assets/css/dashboard-admin.css">
</head>

<div class="occasions-container">
    <div class="vehicules-container">
        <div class="vehicules-imgs" id="vehicules-imgs">

            <?php
                $includeFile = "../scripts/affichage/affichage-dashboard-occasions.php";
                if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
            ?>    

        </div>

        <?php
            $includeFile = "../scripts/submit/submit-dashboard-occasions.php";
            if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
        ?>   
            
                
        <form class="occasions-form" action="../scripts/submit/submit-dashboard-occasions.php" method="post" enctype="multipart/form-data">
            <h3>Ajouter un véhicule :</h3>
            <div class="occasions-form1">
                <input placeholder="Modèle" type="text" name="modele" id="occasions-modele" required>
                <input placeholder="Année" type="number" name="annee" id="occasions-annee" min="1500" max="2099" required>
                <input placeholder="Kilométrage" type="number" name="kilometrage" id="occasions-kilometrage" required>
                <input placeholder="Prix" type="number" name="prix" id="occasions-prix" step="1" required>
            </div>
            <br>
            <div class="occasions-form2">
                <input type="file" name="image" id="occasions-image" accept="image/*" required>
                <textarea placeholder="Description" name="description" id="occasions-description" rows="4" required></textarea>
            </div>
            <br>

            <input class="occasions-submit" type="submit" name="submit_occasions" value="Ajouter le véhicule">
        </form>
    </div>
</div>

</html>