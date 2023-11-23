<?php

$question = $_POST['question'];

if($question != "feur"){
    echo "<img src=\"./assets/chien.png\" width=\"500\" alt=\"feur\" /><h1 style=\"color:red;\">Le chien est triste</h1><br/><h2>Il veut un feur</h2>";
} else {
    echo "<img src=\"./assets/zepeck.jpg\" width=\"300\" alt=\"feur\" />";
}