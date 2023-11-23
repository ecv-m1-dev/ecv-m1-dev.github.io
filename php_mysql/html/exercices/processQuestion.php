<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $question = $_POST["question"];
    echo "<p>Voici la nouvelle question : $question</p>";
}
