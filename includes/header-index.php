<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/header.css">
</head>

<?php
    session_set_cookie_params(3600);
    session_start();
    $includeFile = ("scripts/disconnect.php");
    if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
?>

<div id="validation"><?php if (isset($_SESSION["success"])) { echo $_SESSION["success"]; unset($_SESSION["success"]); } ?></div>
<div id="error"><?php if (isset($_SESSION["error"])) { echo $_SESSION["error"]; unset($_SESSION["error"]); } ?></div>

<header id="header">
    <div class="logo-container">
        <a href="index.php">
            <img class="logo" src="assets/images/logo.png">
        </a>
    </div>
    <div class="nav-container">
        <nav>
            <ul class="nav-ul">
                <a class="nav-element accueil" href="index.php"><li>ACCUEIL</li></a>
                <a class="nav-element services" href="pages/services.php"><li>SERVICES</li></a>
                <a class="nav-element occasions" href="pages/occasions.php"><li>OCCASIONS</li></a>
                <a class="nav-element contact" href="pages/contact.php"><li>CONTACT</li></a>
            </ul>
        </nav>
    </div>
    <div class="menu-hamburger">
        <div class="menu-btn">
            <div class="btn-line"></div>
            <div class="btn-line"></div>
            <div class="btn-line"></div>
        </div>
        <nav class="menu">
        <?php
        if (isset($_SESSION["user_role"]) && $_SESSION["user_role"] == "Admin") { ?>
            <div class="connect-infos-container-mobile">
                <div class="connect-icon-container">
                    <a href="pages/dashboard-admin.php"><img class="connect-icon" src="assets/images/user-icon.png"></a>
                    <p><?php echo $_SESSION["user_role"]; ?></p>
                    <form method="post"><input class="deco" type="submit" name="deco" value="Déconnection"></form>
                </div>
            </div>
        <?php } ?>

        <?php
        if (isset($_SESSION["user_role"]) && $_SESSION["user_role"] == "Employé") { ?>
            <div class="connect-infos-container-mobile">
                <div class="connect-icon-container">
                    <a href="pages/dashboard-employes.php"><img class="connect-icon" src="assets/images/user-icon.png"></a>
                    <p><?php echo $_SESSION["user_role"]; ?></p>
                    <form method="post"><input class="deco" type="submit" name="deco" value="Déconnection"></form>
                </div>
            </div>
        <?php } ?>
            <ul>
                <li class="accueil"><a class="accueil" href="index.php">Accueil</a></li>
                <li class="services"><a class="services" href="pages/services.php">Services</a></li>
                <li class="occasions"><a class="occasions" href="pages/occasions.php">Occasions</a></li>
                <li class="contact"><a class="contact" href="pages/contact.php">Contact</a></li>
                <?php if (!isset($_SESSION["user_role"]) || $_SESSION["user_role"] == "") { ?>
                <li><a href="pages/connection.php">Log in</a></li>
                <li><a href="pages/create-account.php">Sign in</a></li>
                <?php } ?>
                <?php
                if (isset($_SESSION["user_role"]) && $_SESSION["user_role"] == "Admin") { ?>
                <li><a href="pages/dashboard-admin.php">Dashboard</a></li>
                <?php } ?>
                <?php
                if (isset($_SESSION["user_role"]) && $_SESSION["user_role"] == "Employé") { ?>
                <li><a href="pages/dashboard-employes.php">Dashboard</a></li>
                <?php } ?>
            </ul>
        </nav>
        <div class="overlay"></div>
    </div>
    <div class="connect-container">
        <?php
        if (!isset($_SESSION["user_role"]) || $_SESSION["user_role"] == "") { ?>
            <div class="connect-btns">
                <a class="connect-btn log-in" href="pages/connection.php">Log in</a>
                <a class="connect-btn sign-in" href="pages/create-account.php">Sign in</a>
            </div>
        <?php } ?>

        <?php
        if (isset($_SESSION["user_role"]) && $_SESSION["user_role"] == "Admin") { ?>
                <form class="connect-infos-elements" method="post"><input class="deco" type="submit" name="deco" value="Déconnection"></form>
                <div class="connect-infos-elements connect-icon-container">
                    <a href="pages/dashboard-admin.php"><img class="connect-icon" src="assets/images/user-icon.png"></a>
                    <p><?php echo $_SESSION["user_role"]; ?></p>
                </div>
        <?php } ?>

        <?php
        if (isset($_SESSION["user_role"]) && $_SESSION["user_role"] == "Employé") { ?>
                <form class="connect-infos-elements" method="post"><input class="deco" type="submit" name="deco" value="Déconnection"></form>
                <div class="connect-infos-elements connect-icon-container">
                    <a href="pages/dashboard-employes.php"><img class="connect-icon" src="assets/images/user-icon.png"></a>
                    <p><?php echo $_SESSION["user_role"]; ?></p>
                </div>
        <?php } ?>
    </div>
</header>

<script src="assets/js/script-header.js"></script>

</html>
