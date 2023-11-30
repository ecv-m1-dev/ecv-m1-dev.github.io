<?php
  session_start();

  $title = $_SESSION['title'] ?? "Aucun titre pour l'instant";
  $question = $_SESSION['question'] ?? "Aucune question pour l'instant";
?>

<h1>
  <?php global $title;
  echo $title ?>
</h1>

<small>
  Question du
  <strong>
    <?php global $date;
    echo $date ?>
  </strong>
  posée par
  <strong>
    <?php global $author; echo $author ?>
  </strong>
</small>

<section id="question">
  <?php global $question; echo $question ?>
</section>