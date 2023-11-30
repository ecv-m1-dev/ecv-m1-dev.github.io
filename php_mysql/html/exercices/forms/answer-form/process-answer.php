<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] != "POST") {
  echo 'Il faut envoyer des données en POST';
  exit();
}

if (empty($_POST["answer-title"]) || empty($_POST["answer"])) {
  echo 'Le titre et la question ne peuvent pas être vide';
  exit();
}

if (!isset($_SESSION['answers'])) {
  $_SESSION['answers'] = [];
}

// si on arrive ici c'est que c'est ok

$answer = [
  "title" => filter_var($_POST["answer-title"], FILTER_SANITIZE_FULL_SPECIAL_CHARS), 
  "content" => filter_var($_POST["answer"], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
];

array_push($_SESSION['answers'], $answer)

?>

<h1>Votre réponse : </h1>
<h2>Titre : </h2>
<span><?php echo $answer['title'] ?></span>

<h2>Contenu : </h2>
<span><?php echo $answer['content'] ?></span>

<br />

<a href="/exercices">
  <button>Retour</button>
</a>