<?php
require_once(dirname(__FILE__) . '/../models/Question.php');

$questions = Question::getList();

?>

<h1>Les questions</h1>
<section id="question-section">
    <?php if (empty($questions)) : ?>
        <small>Aucune question pour l'instant</small>
    <?php else : ?>
        <?php foreach ($questions as $question): ?>
            <a href="question.php?question-id=<?= $question->getId(); ?>">
                <article class="question-article">
                    <h3><?php echo $question->getTitle() ?></h3>
                    <small>
                        le <strong><?php echo $question->getDate() ?></strong>
                        par <strong><?php echo $question->getAuthor()->getName() ?></strong>
                    </small>
                </article>
            </a>
        <?php endforeach; ?>
    <?php endif; ?>
</section>

<a href="ask.php">
    <button>Posez une nouvelle question</button>
</a>