<section id="answers">
    <?php global $answers; ?>
    <!-- <?php foreach ($answers as $answer): ?>
      <article>
        <?php echo $answer ?>
      </article>
      <hr />
    <?php endforeach; ?> -->

    <?php
      foreach ($answers as $answer) {
//        echo '<article>' . $answer . '</article>';
        echo "<article> $answer </article>";
      }
    ?>
  </section>