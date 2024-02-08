<?php
require_once(dirname(__FILE__) . '/../models/Author.php');
$authors = Author::getList();
?>
<h4>Répondez à cette question</h4>
<form action="/exercices/handlers/createAnswer.php" method="post">
  <p>
    <label for="author">Votre nom ?</label><br />
    <select name="author_id" id="authors">
      <?php foreach ($authors as $author) :  ?>
        <option value="<?= $author["id"] ?>"><?= $author["name"] ?></option>
      <?php endforeach; ?>
    </select>
  </p>

  <p>
    <label for="content">Votre réponse : </label><br />
    <textarea id="content" cols="25" rows="6" name="content" required></textarea>
  </p>
  <input type="text" name="question_id" value="<?= $_GET["question-id"]?>" hidden>
  <br />
  <button type="submit">Envoyer</button>
</form>