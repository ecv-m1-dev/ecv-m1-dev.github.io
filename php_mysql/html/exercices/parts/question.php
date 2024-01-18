<?php
require_once(dirname(__FILE__) . '/../models/Question.php');
session_start();
if (array_key_exists('question', $_SESSION)) {
  $question = $_SESSION["question"];
}

?>

<h1>La dernière question posée</h1>
<section id="question-section">
  <?php if (empty($question)) : ?>
    <small>Aucune question pour l'instant</small>
  <?php else : ?>
    <h3><?php echo $question->getTitle() ?></h3>
    <small>
      le <strong><?php echo $question->getDate()  ?></strong>
      par <strong><?php echo $question->getAuthor()->getName() ?></strong>
    </small>
    <p><?php echo $question->getContent() ?></p>
  <?php endif; ?>
</section>
<?php if (!empty($question)) require "parts/answers.php"; ?>

<a href="ask.php"><button>Posez une nouvelle question</button></a>