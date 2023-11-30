<?php
session_start();

if (!empty($_POST['answer'])) {
  $question_id = $_POST['question_id'];
  $answer = $_POST['answer'];

  $questions = $_SESSION['questions'];
  $question = $questions[$question_id];
  $answers = $question["answers"];
  $answers[] = $answer;

  $tableau[] = 'nouvelle_valeur';
}

// redirige vers la page principale
header("Location: /exercices/index.php");
