<?php
session_start();

if (!empty($_POST['answer'])) {
  // puis on ajoute la réponse à la liste
  $_SESSION["answers"][] = [
    'author' => filter_var($_POST['author'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
    'answer' => filter_var($_POST['answer'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
    'date' => new DateTime()
  ];
}

// redirige vers la page principale
header("Location: /exercices/index.php");
