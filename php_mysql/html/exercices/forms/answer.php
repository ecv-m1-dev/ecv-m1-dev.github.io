<h4>Répondez à cette question</h4>
<form action="/exercices/handlers/createAnswer.php" method="post">
  <p>
    <label for="author">Votre nom ?</label><br />
    <input type="text" id="author" name="author" required>
  </p>

  <p>
    <label for="answer">Votre réponse : </label><br />
    <textarea id="answer" cols="25" rows="6" name="answer" required></textarea>
  </p>
  <br />
  <button type="submit">Envoyer</button>
</form>
