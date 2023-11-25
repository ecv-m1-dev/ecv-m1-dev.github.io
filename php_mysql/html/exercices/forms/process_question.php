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

// si on arrive ici c'est que c'est ok
$_SESSION['title'] = filter_var($_POST["title"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$_SESSION['question'] = filter_var($_POST["question"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$_SESSION['reponse'] = [];
?>

<h1>Votre question: </h1>
<h2>Titre: </h2>
<span><?php echo $_SESSION['title'] ?></span>

<h2>Question: </h2>
<span><?php echo $_SESSION['question'] ?></span>

<br />

<a href="/exercices">
  <button>Retour</button>
</a>