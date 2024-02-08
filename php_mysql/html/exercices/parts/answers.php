<?php
require_once(dirname(__FILE__) . '/../models/Answer.php');
$answers = Answer::getList($_GET['question-id']);
// var_dump($_GET["question-id"]);
// var_dump($answers);
// die;
?>
<h2>Les réponses</h2>
<section id="answers-section">
  <?php if (!session_id()) session_start(); ?>

  <?php if (empty($answers)) : ?>
    <small>Aucune réponse pour l'instant</small>

  <?php else : ?>
    <?php foreach ($answers as $answer) : ?>
      <article>
        <p><?php echo $answer['content'] ?></p>
        <small>
          De <strong><?php echo $answer['author'] ?></strong>
          le <strong><?php echo $answer['date']->format('d/m/Y à H:i') ?></strong>
        </small>
      </article>
    <?php endforeach ?>
  <?php endif; ?>
</section>

<section>
  <?php require "forms/answer.php"; ?>
</section>