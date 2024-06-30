<?php

if (isset($_POST["deco"])) {
    session_destroy(); // Détruisez la session en cours
    header("Location: /Garage-v-parrot/index.php");
    exit();
}

?>