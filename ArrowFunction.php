<?php
// ARROW FUNCTION
// arrow function diperkenalkan di PHP 7.4 sebagai alternative anonymous function yang lebih sederhana pembuatannya
//  secara gariss besar, sebenarnya arrow function dan anonymous function adalah dua hal yang sama digunakan , tidak seperti dia nonymous function yang harus disebutkan secara manual menggunakan kata kunci USE
//  pembuatan arrow function tidak menggunakan kata kunci function, melainkan FN
//  arrow function di khususnya untuk pembuatan function yang sederhana

$firstName = "Adi";
$lastName = "Bawa";

//  SEBELUMNYA DENGAN ANONYMOUSE FUNCTION
$anonymousFunction = function () use ($firstName, $lastName): string {
    return "Hello $firstName $lastName" . PHP_EOL;
};

// PENGGUNAAAN ARROW FUNCTION

$arrowFunction = fn() => "Hello $firstName $lastName" . PHP_EOL;

// MEMANGGIL FILE
echo $arrowFunction();
echo $anonymousFunction();