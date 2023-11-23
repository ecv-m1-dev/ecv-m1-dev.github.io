<?php
// session_start()

?>
<div>
    <ul>
        <?php
        if (!isset($_SESSION['todos'])) {
            $_SESSION['todos'] = [];
        }
        foreach ($_SESSION['todos'] as $todo) {
            echo "<li>$todo</li>";
        }
        ?>
    </ul>
</div>