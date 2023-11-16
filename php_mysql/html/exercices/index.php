<html lang="fr"> <!-- La balise est avant les headers -->
<head>
  <?php include 'variables.php' ?>
  <link href="styles/styles.css" rel="stylesheet" />
</head>

<body>
  <header>
    <h1>
      <?php global $title; echo $title ?>
    </h1>
    <small>
      question du
      <strong>
        <?php global $date; echo $date ?>
      </strong>
      posée par
      <strong>
        <?php global $author; echo $author ?>
      </strong>
    </small>
  </header>
  <section id="question">
    <?php global $question; echo $question ?>
    <hr />
  </section>
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
</body>
</html>
