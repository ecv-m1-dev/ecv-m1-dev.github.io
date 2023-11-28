<form action="/exercices/forms/answer-form/process-answer.php" method="POST">
    <h2>Répondre à la question</h2>
    <label for="title">Titre de la réponse :</label><br>
    <input name="answer-title" type="text" placeholder="Titre...">
    <br>
    <label for="text">Contenu de la réponse :</label><br>
    <textarea name="answer" cols="100" rows="15" placeholder="Répondez à la question ici..."></textarea>
    <br>
    <button type="submit">Envoyer</button>
</form>