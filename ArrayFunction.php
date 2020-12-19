<?php

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
//  mengambil semua keys milik array
var_dump(array_keys($data));
//  mengambil semua values milik array
var_dump(array_values($data));
//  mengubah semua data array dengan callback
$dataresult = array_map(fn(int $value) => $value * 10, $data);
//  mengurutkan array
sort($data);
var_dump($data);
//  mengurutkan array terbalik
rsort($data);
var_dump($data);

//  mengubah posisi data di array secara random
// shuffle()