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
    <label for="answer">Votre réponse : </label><br />
    <textarea id="answer" cols="25" rows="6" name="answer" required></textarea>
  </p>
  <br />
  <button type="submit">Envoyer</button>
</form>