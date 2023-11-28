<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $answer = $_POST["answer"];
    echo "<p>Voici votre réponse : $answer</p>";
}