<?php
require_once('../../models/Question.php');

use models\Question;

session_start();

if (!isset($_SESSION['questions'])) {
  // si le tableau des question n'existe pas on le crée
  $_SESSION['questions'] = [];
}

if (empty($_POST['title']) || empty($_POST['content'])) {
  throw new Exception('Il faut un titre et du contenu');
}

$question = new Question(
  $_POST['title'],
  $_POST['content'],
  new DateTime()
);

$_SESSION['questions'][] = $question;


// redirige vers la page principale
header("Location: /exercices/index.php");
