<?php
    $includeFile = "../scripts/affichage/affichage-contacts.php";
    if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
?>