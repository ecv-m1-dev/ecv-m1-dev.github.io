<html lang="fr"> <!-- La balise est avant les headers -->

<head>
  <?php include 'variables.php' ?>
  <link href="styles/styles.css" rel="stylesheet" />
</head>

<body>
  <?php include 'header.php' ?>

  <?php include 'content.php' ?>

  <section id="question">
    <?php echo $question; ?>
    <hr />
    <form action="traitement.php" method="post">
      <label for="question">Quel est votre question ?</label>
      <input type="text" id="question" required>
      <button type="submit">Envoyer</button>
    </form>
  </section>


</body>

</html>