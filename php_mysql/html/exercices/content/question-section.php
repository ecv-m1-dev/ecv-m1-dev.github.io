<section id="question">
  <?php
  if (isset($_SESSION["questions"])) {
    $i = 0;
    foreach ($_SESSION["questions"] as $key => $value) {
      include "content/header.php";
      echo "<p>{$value['question']}</p>";
      echo "Answers : <br />";
      foreach ($value['answers'] as $key => $anwser) {
        echo "<p>xXx_⁂FORNITE_PRO_PLAYER_DU_45⁂xXx : {$anwser}</p>";
      }
      include "content/answers-section.php";
      echo "<hr />";
      echo "
      <form action=\"createAnswer.php\" method=\"post\">
        <label for=\"answer\">Réponse :</label>
        <input type=\"text\" id=\"answer\" name=\"answer\" placeholder=\"Ex: En faisant ses exos de php\">
        <input type=\"text\" name=\"id\" value=\"{$i}\" hidden />
        <input type=\"submit\" value=\"add\">
    </form>";
      $i++;
    }
  }
  ?>
</section>