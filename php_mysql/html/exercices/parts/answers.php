<section id="answers">
  <h2>Réponses :</h2>
  <?php
  if (!empty($_SESSION["reponse"])) {
    $answers = $_SESSION["reponse"];
  }
  if (!empty($answers)) :
    foreach ($answers as $answer) : ?>
      <article style="border: solid 1px; padding: 10px">
        <?php echo $answer ?>
      </article>
    <?php endforeach; ?>
  <?php endif; ?>
  <?php if (!empty($_SESSION['question'])) {
    include "./forms/answer.php";
  }  ?>
</section>