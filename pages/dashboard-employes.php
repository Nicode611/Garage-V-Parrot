<?php
    $includeFile = "../includes/header.php";
    if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
    
    if ($_SESSION["user_role"] == "Employé") { ?>
                                    
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/dashboard-employes.css">
    <link rel="stylesheet" href="../assets/css/dashboard-admin.css">
    <link rel="stylesheet" href="../assets/css/global.css">
    <title>Dashboard employé</title>
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
                    <li class="sidebar-li sidebar-infos sidebar-active">Infos personelles</li>
                    <li class="sidebar-li sidebar-occasions">Occasions</li>
                </ul>
            </nav>
            <div class="dashboard-overlay"></div>
        </div>


        <!-- Partie infos -->
        <div class="dashboard-infos">
            <?php
                $includeFile = "../includes/infos.php";
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

<?php } else {
    if ($_SESSION["user_role"] == "Admin") {
        header("Location: pages/dashboard-admin.php");
    } else {
        header("Location: ../index.php");
    }
}