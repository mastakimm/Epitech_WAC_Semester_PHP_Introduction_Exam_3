<?php

function count_rec_str($array, $str, $depth = 0, &$newArray = [])
{
    if ($str === "") {
        return false;
    }   if (!isset($newArray[$depth])) {
            $newArray[$depth] = 0;
    }

    foreach ($array as $value) {
        if (is_array($value)) {
            count_rec_str($value, $str, $depth + 1, $newArray);
        } else {
            if ($value === $str) {
                $newArray[$depth]++;
            }
        }
    }

    if ($depth === 0) {
            ksort($newArray);
            return $newArray;
    }
}
