<?php 
// TYPE DECLARATION
//  sama seperti variable, argument di PHP bisa kita masukkan data yang dinamis
//  kadang terlalu dinamis juga menyulitkan jika ternyata kita hanya ingin membuat function yang menggunakan argument dengan tipe data tertentu
//  untungnya di PHP kita bisa menambahkan type data diargument, sehingga PHP akan melakukan pengecekan ketika kita mengirim value ke function tersebut
//  jika tipe data valur tidak sesuai nmaka akan terjadi eror
//  secara default PHP akan melakukan percobaan konversi tipe data secara otomatis, misal jika kita menggunakan tipe int, tapi kita mengirim string maka PHP akan otomatis mengkonversi string tersebut menjadi int

function sum(int $first + int $last) {
    $total = $first + $last;
    echo "Total $first + $last =$total" .PHP_EOL;
}
// contoh penggunaannya
sum(100,100);
sum("100","100");
sun(true,false);

?>