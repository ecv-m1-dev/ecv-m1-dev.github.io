<section id="answers">
  <h3>Réponses :</h3>
  <?php
 
  if (!empty($_SESSION["answers"])) :
    foreach ($_SESSION["answers"] as $answer) : ?>
      <article style="border: solid 1px; padding: 10px">
        <h3><?php echo $answer["title"] ?></h3>
        <p><?php echo $answer["content"] ?></p>
      </article>
    <?php endforeach; ?>
  <?php endif; ?>

</section>