<?php
require_once(dirname(__FILE__) . '/../models/Author.php');
$authors = Author::getList();
?>

<section id="question-form">
  <h1>Posez votre question ici !</h1>
  <form action="/exercices/handlers/createQuestion.php" method="post">
    <p>
      <label for="author">Votre nom ?</label><br />
      <select name="author_id" id="authors">
        <?php foreach ($authors as $author) :  ?>
          <option value="<?= $author["id"] ?>"><?= $author["name"] ?></option>
        <?php endforeach; ?>
      </select>
    </p>

    <p>
      <label for="title">Le titre de la question: </label><br />
      <input type="text" id="title" name="title" required>
    </p>

    <p>
      <label for="question">Le contenu de votre question: </label><br />
      <textarea id="question" cols="25" rows="6" name="question" required></textarea>
    </p>

    <br />
    <button type="submit">Envoyer</button>
  </form>
</section>