<?php
//  dalam PHP sendiri ada tiga jenis variable scope
//  1. global scope
//      variable yang dibuat diluar function memiliki scope global
//      variable discope global hanya bisa dikases dari luar function
//      artinya didalam function kita tidak bisa mengakses variable diglobal scope
$name = "adi"; // global scope

function sayHello()
{
    global $name; // global keyword utk memanggil variable gloval diluar function
    echo $name . PHP_EOL;

    //  cara lain utk memanggil global scope
    echo $GLOBALS["name"] . PHP_EOL;
}

sayHello();

//  2. Local Scope
//      variable yang dibuat didalam function memiliki scope local
//  variable discope local hanya bisa diakses dari dalam function itu   sendiri
//  artinya varaible tersebut tidak bisa diakses dari luar function ataupun dari function lain

//  3. static scope
//  secara default local variable itu siklus hidupnya hanya sebatas functionnya dieksekusi
//  jika sebuah function selesai dieksekysi maka siklus hidup local variablenya selesai
//  PHP memiliki scope yang bernama static
//  static scope hanya bisa diset ke local variable
// saat kita membuat sebuah local variable menjadi static, maka siklus hidupnya tidak akan berhenti ketika sebuah function selesai dieksekusi
//  artinya jika function tersebut dieksekusi lagi , maka static variable tersebut akan memiliki value dari sebelumnya
function increment()
{
    static $counter = 1; // static scope
    //  silakan hapus staticnya utk tau perbedaannya
    echo " COunte = $counter" . PHP_EOL;
    $counter++;
}

increment();
increment();
increment();
increment();
increment();
increment();