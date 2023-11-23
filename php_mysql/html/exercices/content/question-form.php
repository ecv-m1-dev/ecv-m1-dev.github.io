<style>
    div#forms {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        gap: 200px;
    }
</style>
<div id="forms">
    <form action="todo.php" method="post">
        <h1>To Do </h1>
        <label for="todo">Nouveau to-do :</label>
        <input type="text" id="todo" name="todo" placeholder="Titre...">
        <input type="submit" value="add">
    </form>
    <form action="treatment.php" method="post">
        <h1>Question : </h1>
        <label for="question">Tu veux quoi :</label>
        <input type="text" id="question" name="question" placeholder="Titre...">
        <input type="submit" value="Soumettre question">
    </form>
</div>


<?php include "content/todoDisplay.php" ?>