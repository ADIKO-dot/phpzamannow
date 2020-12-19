<?php
$first = [
    "first_name" => "Adi",
];

$last = [
    "last_name" => "Bawa",
];

//  operasi union
$full = $first + $last;
var_dump($full);

// ------------------

$a = [
    "first_name" => "Adi",
    "last_name" => "Bawa",
];

$b = [
    "last_name" => "Bawa",
    "first_name" => "Adi",
];

var_dump($a == $b); // maka akan true
var_dump($a === $b); // maka akan false karena juga mengecek urutan/ urutannya harus sama