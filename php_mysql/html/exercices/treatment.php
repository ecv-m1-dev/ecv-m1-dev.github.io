<?php

$question = $_POST['question'];

if($question != "feur"){
    header("Location: ./content/redirection/pasfeur.php");
} else {
    header("Location: ./content/redirection/feur.php");
}