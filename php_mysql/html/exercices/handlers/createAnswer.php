<?php

require_once(dirname(__FILE__) . '/../models/Answer.php');

if ($_SERVER["REQUEST_METHOD"] != "POST") {
  echo 'Il faut envoyer des données en POST';
  exit();
}

if (empty($_POST["author_id"]) || empty($_POST["question_id"]) || empty($_POST["content"])) {
  echo 'Raté';
  exit();
}

$answer = new Answer();
$result = $answer
  ->setContent(filter_var($_POST['content'], FILTER_SANITIZE_FULL_SPECIAL_CHARS))
  ->setDate()
  ->setAuthor(filter_var($_POST['author_id'], FILTER_SANITIZE_FULL_SPECIAL_CHARS))
  ->setQuestion(filter_var($_POST['question_id'], FILTER_SANITIZE_FULL_SPECIAL_CHARS))
  ->save();

if ($result === true) {
}

// redirige vers la page principale
header("Location: /exercices/index.php");
