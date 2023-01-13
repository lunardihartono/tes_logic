<?php

function pattern_count($text, $pattern) {
    $count = 0;
    $len = strlen($pattern);
    for ($i = 0; $i <= strlen($text) - $len; $i++) {
        if (substr($text, $i, $len) == $pattern) {
            $count++;
        }
    }
    return $count;
}

$text = "abakadabra";
$pattern = "ab";
echo pattern_count($text, $pattern); 
