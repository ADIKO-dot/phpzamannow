<?php
// CALLBACK FUNCTION
// callback adalah sebuah mekanisme sebuah function memanggil function lainnya sesuai dengan yang diberikan diargument
//  hal ini sebenarnya sudah kita lakukan di materi Variable Function dan ANonymous Function
//  namun di PHP ada cara lain untuk implementasi callback , yaitu menggunakan tipe data callable
//  dan untuk memanggil callback fuynction tersebut, kita bisa menggunakan function cakk_user_func(callable,arguments)
function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Putu Adi Bawa", "strtoupper");
sayHello("Putu Adi BAWA", "strtolower");
sayHello("Putu Adi BAWA", function (string $name): string {
    return strtoupper($name);
});
sayHello("Putu Adi BAWA", fn($name) => strtoupper($name));