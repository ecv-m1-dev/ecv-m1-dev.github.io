<section id="answers">
  <?php
  if (isset($_SESSION["answers"])) {
    var_dump($_SESSION["answers"]);
    foreach ($_SESSION["answers"] as $key => $value) {
      if($key == $_SESSION["questions"]){
        echo "<p>{$value}</p>";
      }
    }
  }
  ?>
</section>