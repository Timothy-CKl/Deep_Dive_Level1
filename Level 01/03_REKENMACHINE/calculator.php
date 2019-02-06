<?php
/**
 * Created by IntelliJ IDEA.
 * User: timot
 * Date: 2/6/2019
 * Time: 1:50 PM
 */
$soort = readline("Welke operatie wil je uitvoeren? (+, -) ");
if ($soort == "+" || $soort == "-" ) {
    $getal1 = readline("Eerste getal?  ");
    if (is_numeric($getal1)) {
        $getal2 = readline("Tweede getal?  ");
        if (is_numeric($getal2)) {
            if($soort == "+"){
                $totaal = (int)$getal1 + (int)$getal2;
                echo "Het antwoord is $totaal";
            }
            elseif($soort == "-"){
                $totaal = (int)$getal1 - (int)$getal2;
                echo "Het antwoord is $totaal";
            }
        }
        else{
            echo "dit is geen goed getal";
        }

    }
    else{
        echo "dit is geen goed getal";
    }

}
else{
    echo "het is een foute invoer probeer opnieuw! ";
}
?>
