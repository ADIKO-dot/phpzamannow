<?php
// anonymouse function adalah function tanpa nama, di PHP disebut juga dengan Closure
//  anonymouse function biasanya digunakan sebagai argument atau sebagai value di variable
// anonymouse function membuat kita bisa mengirim function sebagai argument difunction lainnya

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("ADI");
$sayHello("putuadi");

// /////

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "GoodByee $finalName" . PHP_EOL;
}
//  cara pertama
sayGoodBye("Adi bawa", function (string $name): string {
    return strtoupper($name);
});
//  cara kedua
$filterFunction = function (string $name): string {
    return strtoupper($name);
};
sayGoodBye("putuadi bawa", $filterFunction);

// -----------------------------
// mengakses variable di luar closure
//  sewcara default, anonymous function tidak bisa mengakses variable yang terdapat diluar function
//  jika kita ingin menggunakan variable yang terdapat diluar anonymous function,
// kita perlu secara explicit menyebutkannya menggunakan kata kunci use lalu diikuti variable-variable yang ingin kita gunakan

$firstName = "adi";
$lastName = "bawa";

$sayHelloAdi = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloAdi();