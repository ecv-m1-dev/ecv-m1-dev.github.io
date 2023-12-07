<?php
session_start();

// Vérifier si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer la réponse du formulaire
    $reponse = $_POST['reponse'];

    // Stocker la réponse dans la session
    $_SESSION['reponses'][] = $reponse;
}

// Vérifier si une question est sélectionnée
if (isset($_POST['changer_question'])) {
    // Effacer les réponses lorsque la question est changée
    unset($_SESSION['reponses']);
}

// Afficher les réponses s'il y en a

$reponses = isset($_SESSION['reponses']) ? $_SESSION['reponses'] : [];

?>

<section id="questionForm">
    <form action="/exercices/processQuestion.php" method="post">
        <label for="question">Question :</label>
        <input type="text" id="question" name="question" required>
        <button type="submit">Envoyer</button>
    </form>
</section>
