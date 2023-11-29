<?php
include 'variables.php';
session_start();
$question = $_POST['question'];

var_dump($_POST['question']);
if (!empty($_POST['question'])) {
    $question = $_POST['question'];
    array_push($_SESSION['questions'], ["question" => $question, "answers" => []]);
    header("Location: ./index.php");
}
