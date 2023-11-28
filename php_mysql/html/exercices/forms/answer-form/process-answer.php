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

// si on arrive ici c'est que c'est ok
$_SESSION['answer-title'] = filter_var($_POST["answer-title"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$_SESSION['answer'] = filter_var($_POST["answer"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
?>

<h1>Votre réponse : </h1>
<h2>Titre : </h2>
<span><?php echo $_SESSION['answer-title'] ?></span>

<h2>Contenu : </h2>
<span><?php echo $_SESSION['answer'] ?></span>

<br />

<a href="/exercices">
  <button>Retour</button>
</a>