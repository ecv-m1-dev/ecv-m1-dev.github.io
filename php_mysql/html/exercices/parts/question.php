<?php
require_once(dirname(__FILE__) . '/../models/Question.php');
$question = new Question();
$question->setTitle("Mon super titre")->setDate();

?>

<h1>La dernière question posée</h1>
<section id="question-section">
  <!-- start session -->
  <?php if (!session_id()) session_start(); ?>

  <?php if (empty($_SESSION["question"])) : ?>
    <small>Aucune question pour l\'instant</small>
  <?php else : ?>
    <h3><?php echo $_SESSION['title'] ?></h3>
    <small>
      le <strong><?php echo $_SESSION['date']->format('d/m/Y à H:i')  ?></strong>
      par <strong><?php echo $_SESSION['author'] ?></strong>
    </small>
    <p><?php echo $_SESSION['question'] ?></p>
  <?php endif; ?>
</section>
<?php if (!empty($_SESSION['question'])) require "parts/answers.php"; ?>

<a href="ask.php"><button>Posez une nouvell question</button></a>