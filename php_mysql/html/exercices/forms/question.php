<section id="question">
  <form action="/exercices/forms/process_question.php" method="post">
    <label for="title">Quel titre ?</label><br />
    <input type="text" id="title" name="title" required> <br />

    <label for="question">Quel est votre question ?</label><br />
    <textarea cols="25" rows="6" type="text" id="question" name="question" required></textarea><br />
    <button type="submit">Envoyer</button>
  </form>
</section>