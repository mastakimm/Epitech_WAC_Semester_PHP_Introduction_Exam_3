<?php

function ord_alphlong($str = null)
{
    if ($str == null) {
        echo "n";
        return;
    }
    $str = preg_replace('/\s+/', ' ', $str);
    $words = explode(" ", $str);
    function sortByLength($a, $b)
    {
        $aLength = strlen($a);
        $bLength = strlen($b);
        if ($aLength == $bLength) {
            return strcmp($a, $b);
        }
        return ($aLength < $bLength) ? -1 : 1;
    }

    usort($words, 'sortByLength');
    echo trim(implode(" ", $words)) . PHP_EOL;
}
