<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $the_username = "root";
    $the_password = "root";

    if ($username == $the_username && $password == $the_password) {
        header("Location: /exercices/index.php");
        exit;
    } else {
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
