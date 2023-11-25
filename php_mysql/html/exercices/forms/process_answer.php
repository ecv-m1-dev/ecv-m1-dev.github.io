<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    echo 'Il faut envoyer des données en POST';
    exit();
}

if (empty($_POST["reponse"])) {
    echo 'La réponse ne peut pas être vide';
    exit();
}

// si on arrive ici c'est que c'est ok
$_SESSION['reponse'][] = filter_var($_POST["reponse"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
?>

<h1>Votre réponse :</h1>
<span><?php echo end($_SESSION['reponse']) ?></span>

<h2>Question: </h2>
<span><?php echo $_SESSION['question'] ?></span>

<br />

<a href="/exercices">
    <button>Retour</button>
</a>