<?php

$arr = [12,9,30,"A","M",99,82,"J","N","B"];

usort($arr, function($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a - $b;
    }
    if (is_string($a) && is_string($b)) {
        return strcmp($a, $b);
    }
    if (is_string($a)) {
        return -1;
    }
    return 1;
});

print_r($arr);
?>