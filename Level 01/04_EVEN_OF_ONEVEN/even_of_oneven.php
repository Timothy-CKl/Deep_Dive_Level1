<?php
/**
 * Created by IntelliJ IDEA.
 * User: timot
 * Date: 2/6/2019
 * Time: 2:47 PM
 */
while (true) {

    $getal1 = readline("Please enter a number ");
    if (is_numeric($getal1)) {
        if (($getal1 % 2) == 1) {
            echo "$getal1 is odd.\n";
        }
        if (($getal1 % 2) == 0) {
            echo "$getal1 is even.\n";

        }
    } elseif ($getal1 == "exit") {
        echo "Sorry to see you go!\n";
        exit;
    } else {
        echo "dit is geen goed getal\n";

    }
}






?>