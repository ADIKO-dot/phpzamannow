<?php
//  functiona argument
//  kita bisa mengirim informasi ke function yang ingin kita panggil
//  untuk melalkukan hal tersebut kita perlu menambahkan argument atau parameter di function yang sudah kita buat
//  cara membuat argument dsama seperti cara membuat variabel
//  argument ditempatkan di dalam kurung () di deklarasi function
//  argument bisa lebih dari satu , jika lebih dari satu , harus dipisah menggunakan tanda koma

function sayHello($name)
{
    echo "Hello $name" . PHP_EOL;
}

sayHello("ADI"); // maka adi didalam sayhello akan menjadi argument dalam function say hello ($name)
sayHello("BUDI");

// ------------------------- //
// DEFAULT ARGUMENT VALUE
// PHP mendukung default argument value
//  fitur ini memungkinkan jika ketika kita memanggil function tidak memasukkan parameter kita bisa menentukan data defaultnya apa

function sayHelloo($name = "namadefaultnya")
{
    echo "Hello $name" . PHP_EOL;
}

sayHelloo("ADI"); // maka adi didalam sayhello akan menjadi argument dalam function say hello ($name)
sayHelloo("BUDI");
sayHelloo(); // ini akan berisi nama default

// KESALAHAN DEFAULT ARGUMENT VALUE
//  default argument value bisa disimpan argument manapun
//  namun jika argument lebih dari satu, dan kita menyimpan default argument value di parameter awal, maka itu kurang berguna

function sayHellooo($name, $namaakhir = "")
{
    echo "Hello $name $namaakhir" . PHP_EOL;
}

sayHelloo("ADI"); // maka adi didalam sayhello akan menjadi argument dalam function say hello ($name)
sayHelloo("BUDI");
sayHelloo("pakadi", "jayanegara"); // kedua parameter akan diisi