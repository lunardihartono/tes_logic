<?php
function count_sort_letters($input) {
    $count = array();
    $lower_input = strtolower($input);
    for ($i = 0; $i < strlen($input); $i++) {
        if (ctype_alpha($input[$i])) {
            if (array_key_exists($lower_input[$i], $count)) {
                $count[$lower_input[$i]]++;
            } else {
                $count[$lower_input[$i]] = 1;
            }
        }
    }
    ksort($count);
    return $count;
}

$input = "Hello World";
$result = count_sort_letters($input);
print_r($result); 
