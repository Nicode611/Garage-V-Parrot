<?php

if (isset($_POST["deco"])) {
    session_destroy(); // Détruisez la session en cours
    header("Location: ../index.php");
    exit();
}

?>