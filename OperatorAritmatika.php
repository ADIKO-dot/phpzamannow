<?php
$a = 10;
$b = 20;

$result = $a + $b;
var_dump($result);

$resultjadinegatif = -$result;
var_dump($resultjadinegatif);

$resultjadipositif = +$result;
var_dump($resultjadipositif);

$resultmodulo = 100 % 3;
var_dump($resultmodulo);

//  ---------------//
// OPERATOR PENUGASAN ARITMATIKA

//  $a += sb // keterangan $a = $a + $b
//  $a -= $b // $a = $a -$b
//  $a *= $b  // $a = $a*$b
//  $a /= $b // $a = $a/$b
//  $a %= $b // $a= $a%$b

$total = 0;

$buah = 5000;
$sayur = 10000;
$ayam = 120000;

$total += $buah;
$total += $sayur;
$total += $ayam;