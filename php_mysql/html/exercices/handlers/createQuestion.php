<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] != "POST") {
  echo 'Il faut envoyer des données en POST';
  exit();
}

if (empty($_POST["title"]) || empty($_POST["question"])) {
  echo 'Le titre et la question ne peuvent pas être vide';
  exit();
}

// si on arrive ici on peut enregistrer la question
$_SESSION['title'] = filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$_SESSION['question'] = filter_var($_POST['question'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$_SESSION['author'] = filter_var($_POST['author'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$_SESSION['date'] = new DateTime(); // la date est un objet

// on efface les réponses
$_SESSION['answers'] = [];

header("Location: /exercices/index.php");
?>
