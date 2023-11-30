<section id="question">
  <?php

  if (isset($_SESSION["questions"])) {
    foreach ($_SESSION["questions"] as $question_id => $question) {
      include "content/header.php";
      echo "<h2>{$question->getTitle()}</h2>";
      echo "<small>Posée le <strong>{$question->getDate()->format('d/m/Y à h:i')} </strong></small>";
      echo "<p>{$question->getContent()}</p>";
      include "forms/answer-form.php";
    }
  }

  ?>
</section>
