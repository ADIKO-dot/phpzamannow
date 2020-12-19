<?php
//  recursive function adalah kemampuan function memanggil function dirinya sendiri
//  kadang memang ada banyak problem, yang lebih mudah diselesaikan MENGGUNAKAN RECURSIVE FUNCTION SEPERTI CONTOH KASUS FACTORIAL

//  SEBELUNNYA MENGGUNAKAN LOOP UNTUK PERULANGAN FACTORIAL
function factorialLoop(int $value): int
{
    $total = 1;
    for ($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }
    return $total;
}
var_dump(factorialLoop(6));
//  mengecek factorial manual

var_dump(1 * 2 * 3 * 4 * 5 * 6);

//  MENGGUNAKAN RECURSIVE FUNCTION UNTUK PERULANGAN FACTORIAL

function factorailRecursive(int $value): int
{
    if ($value == 1) {
        return 1;
    } else {
        return $value * factorailRecursive($value - 1);
    }
}
var_dump(factorailRecursive(8));
//  mengecek factorial manual
var_dump(1 * 2 * 3 * 4 * 5 * 6 * 7 * 8);

// PROBLEM DENGAN RECURSIVE FUNCTION
//  walaupun recursive function itu sangat menarik , namun kita perlu berhati-hati
// jika recursive terlalu dalam, maka akan ada kemungkinan terjadi memory overflow, yaitu error dimana memory terlalu banyak digunakan di PHP
//  kenapa problem ini bisa terjadi ? karena ketika kita memanggiul function, PHP akan menyimpannya dalam stack jika fucntion tersebut memanggil function lain, maka stack akan menumpuk terus danjika teralu banyak, maka akan membutuhkan komsumsi memory besar, jika sudah melewati batas maka akan terjadi error memory
// CONTOH ERROR KARENA MEMAKAN TERLALU BANYAK MEMORY
function loop(int $value)
{
    if ($value == 0) {
        echo "End Loop" . PHP_EOL;
    } else {
        echo "Loop ke-$value" . PHP_EOL;
        loop($value - 1);
    }
}

//  contoh akan error pengulangan data 3 juta

// loop(3000000); // dikomentar karena akan error