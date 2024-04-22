<?php

function affichePremiers()
{
    $result = "";
    $n = 100;
    $negatif = false;
    if ($n < 0) {
        $negatif = true;
        $n = -$n;
    }

    for ($i = 2; $i <= $n; $i++) {
        $nbDiv = 0;//Et on compte le nombre de diviseur
        for ($j = 1; $j <= $i; $j++) {
            if ($i % $j == 0) {
                $nbDiv++;
            }
        }
        if ($nbDiv == 2) {
            if ($negatif) {
                echo "-";
            }
            $result .= $i . " ";
        }
    }
    $result .= PHP_EOL;
    return $result;
}

file_put_contents('bonus.php', affichePremiers());
