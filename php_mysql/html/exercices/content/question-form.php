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
<?php include 'variables.php' ?>
<div id="create-question">
    <form action="createQuestion.php" method="post">
        <label for="question">
            <h1> Nouvelle question :</h1>
        </label>
        <input type="text" id="question" name="question" placeholder="Ex: Comment arrêter de procrastiner ?">
        <input type="text" name="id" value=<?= $NUMBER_OF_QUESTIONS ?> hidden />
        <input type="submit" value="add" />
    </form>
</div>
<div id="forms">
    <form action="todo.php" method="post">
        <h1>To Do </h1>
        <label for="todo">Nouveau to-do :</label>
        <input type="text" id="todo" name="todo" placeholder="Ex: faire ses exos de php">
        <input type="submit" value="add">
    </form>
    <form action="treatment.php" method="post">
        <h1>Question piège : </h1>
        <label for="question-piege">Tu veux quoi :</label>
        <input type="text" id="question-piege" name="question-piege" placeholder="attention à ta réponse...">
        <input type="submit" value="Soumettre question">
    </form>
</div>


<?php include "content/todoDisplay.php" ?>