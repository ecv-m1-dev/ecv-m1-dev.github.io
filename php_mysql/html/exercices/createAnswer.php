<?php
session_start();
$question = $_POST['answer'];

if (!empty($_POST['answer'])) {
    $id = $_POST['id'];
    $answer = $_POST['answer'];
    array_push($_SESSION['questions'][$id]["answers"], $answer);
    header("Location: ./index.php");
}
