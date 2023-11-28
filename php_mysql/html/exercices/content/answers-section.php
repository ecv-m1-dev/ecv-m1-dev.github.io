<section id="answers">
  <h3>Réponses</h3>
    <?php global $answers; ?>

  <?php foreach ($answers as $answer) : ?>
    <article style="border: solid 1px; padding: 10px">
      <?php echo $answer ?>
    </article>
  <?php endforeach; ?>

</section>