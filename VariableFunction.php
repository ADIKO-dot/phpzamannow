<?php
// VARIABLE FUNCTION
// PHP mendukung konsep yang bernama variable function
//  variable function adalah kemampuan memanggil sebuah function dari value yang terdapat di sebuah variable
//  untuk menggunakan variable function, kita bisa secara langsung memanggil $namaVariable() , jika ingin menambahkan argument, kita bisa menggunakan $namaVariable(argument)

function foo()
{
    echo "FOO" . PHP_EOL;
}
function bar()
{
    echo "BAR" . PHP_EOL;
}

// cara memanggil dengan variable
$functionname = "foo";
$functionname(); // memanggil function foo

$functionname = "bar";
$functionname(); // memanggil function bar

//  kasus kedua
function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("adi", "strtoupper"); // strtoupper untuk membuat tulisan menjadi uppcase
sayHello("PUTU", "strtolower"); // membuat text menjadi huruf kecil