<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "garage_v_parrot";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}
 
if (isset($_POST["submit_connect"])) {

}

?>