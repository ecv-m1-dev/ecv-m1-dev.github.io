<?php
session_start();
// session_destroy();

$title = $_SESSION['title'] ?? "Aucun titre pour l'instant";
$question = $_SESSION['question'] ?? "Aucune question pour l'instant";

?>

<h1>
  <?php global $title;
  echo $title ?>
</h1>

<small>
  question du
  <strong>
    <?php global $date;
    echo $date ?>
  </strong>
  posée par
  <strong>
    <?php global $author;
    echo $author ?>
  </strong>

  <a href="/exercices/ask.php">
    <button>Poser une autre question</button>
  </a>
</small>

<section id="question">
  <?php global $question;
  echo $question ?>
</section>