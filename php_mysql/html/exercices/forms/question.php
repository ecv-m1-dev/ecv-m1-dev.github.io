<section id="question-form">
  <h1>Posez votre question ici !</h1>
  <form action="/exercices/handlers/createQuestion.php" method="post">
    <p>
      <label for="author">Votre nom ?</label><br />
      <input type="text" id="author" name="author" required>
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
