<style>
div#forms {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    gap: 200px;
}

div#create-question input[type="text"] {
    width: 400px;
}
</style>
<div id="create-question">
  <form action="content/handlers/createQuestion.php" method="post">
    <label for="question">
      <h1> Nouvelle question :</h1>
    </label>
    <input type="text" id="title" name="title"
           placeholder="Ex: Comment arrêter de procrastiner ?"><br />
    <textarea id="content" name="content" cols="50" row="8"
              placeholder="Ecrire ici les détails de la question"></textarea><br />
    <button type="submit">Poser la question</button>
  </form>
</div>
<!--<div id="forms">
    <form action="treatment.php" method="post">
        <h1>Question piège : </h1>
        <label for="question-piege">Tu veux quoi :</label>
        <input type="text" id="question-piege" name="question-piege" placeholder="attention à ta réponse...">
        <input type="submit" value="Soumettre question">
    </form>
</div>
-->
