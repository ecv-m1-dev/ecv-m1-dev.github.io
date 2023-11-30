<?php
include 'variables.php';
session_start();
$question = $_POST['question'];

if(!isset($_SESSION['questions'])) {
    $_SESSION['questions'] = [];
}
if (!empty($_POST['question'])) {
    $question = $_POST['question'];
    array_push($_SESSION['questions'], ["question" => $question, "answers" => []]);
    header("Location: ./index.php");
}
