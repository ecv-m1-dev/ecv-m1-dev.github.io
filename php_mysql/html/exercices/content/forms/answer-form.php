<form action="content/handlers/createAnswer.php" method="post">
  <label for="answer">Réponse :</label>
  <input type="text" id="answer" name="answer" placeholder="Ex: En faisant ses exos de php">
  <input type="text" name="question_id" value="<?php global $question_id; echo $question_id ?>" hidden />
  <input type="submit" value="add">
</form>
