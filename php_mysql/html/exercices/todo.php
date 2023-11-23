<?php

$todo = $_POST['todo'];
session_start();

if ($todo != "") {
    $_SESSION['todos'][] = $todo;
}
header("Location: ./index.php");
