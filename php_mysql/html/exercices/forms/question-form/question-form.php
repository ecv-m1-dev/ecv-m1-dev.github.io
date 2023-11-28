<form action="/exercices/forms/question-form/process-question.php" method="POST">
    <h2>Poser une question</h2>
    <label for="title">Titre de la publication :</label><br>
    <input name="title" type="text" placeholder="Titre...">
    <br>
    <label for="text">Contenu de la publication :</label><br>
    <textarea name="question" cols="100" rows="15" placeholder="Posez votre question ici..."></textarea>
    <br>
    <button type="submit">Envoyer</button>
</form>