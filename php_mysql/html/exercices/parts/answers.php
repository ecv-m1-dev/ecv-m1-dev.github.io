<section id="answers">
  Réponses :
  <?php global $answers; ?>
  <?php foreach ($answers as $answer) : ?>
    <article style="border: solid 1px; padding: 10px">
      <?php echo $answer ?>
    </article>
  <?php endforeach; ?>
</section>
