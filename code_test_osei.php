<?php

$start = 1;
$limit = 10;

while($limit > 0) {
    $value = checkNumber($start);

    if($value) {
        echo $value . " ";
        $limit--;
    }

    $start++;
}

function checkNumber($num) {
    $digits = str_split((String)$num);
    if(hasSeven($digits) && sumTen($digits)) {
        return $num;
    }

    return false;
}

function hasSeven($digits) {
    return in_array(7, $digits);
}

function sumTen($digits) {
    return array_sum($digits) == 10;
}