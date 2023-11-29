<?php session_start(); ?>
<html lang="fr"> <!-- La balise est avant les headers -->

<head>
  <?php include 'variables.php' ?>
  <link href="styles/styles.css" rel="stylesheet" />
</head>

<body>
  <?php include "content/question-section.php" ?>
  <?php include "content/answers-section.php" ?>
  <?php include "content/question-form.php" ?>
</body>


</html>