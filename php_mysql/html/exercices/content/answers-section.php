<section id="answers">
  <h3>Réponses</h3>
    <?php global $answers; ?>

    <?php
      foreach ($answers as $answer) {
//      echo '<article>' . $answer . '</article>';
        echo "<article> $answer </article><hr />";
      }
    ?>
  </section>