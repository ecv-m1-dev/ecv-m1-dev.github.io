<?php
require_once(dirname(__FILE__) . '/../models/Question.php');

$questionId = $_GET['question-id'];
$question = Question::get($questionId);
?>

<h3><?php echo $question->getTitle() ?></h3>
<small>
    le <strong><?php echo $question->getDate() ?></strong>
    par <strong><?php echo $question->getAuthor()->getName() ?></strong>
</small>
<p><?php echo $question->getContent() ?></p>


<?php if (!empty($question)) require "parts/answers.php"; ?>