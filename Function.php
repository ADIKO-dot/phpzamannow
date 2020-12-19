<?php
//  function adlaah block kode progrtam yang akan berjalan saat kita panggil
//  sebelumnya kita sudah menggunakan function isset(), count() dan lain2
//  untuk membuat functioin di PHP kita bisa menggunakan kata kunci function, lalu diikuti dengan nama function, kurung()  dan diakhiri dengan block
//  kita bisa memanggil function dengan menggunakan nama function lalu diikuti dengan kurung ()
//  dibahasa pemprograman lain, function juga disebut dengan method

// --------------------------------------------------- //
//  LOKASI FUNCTION
//  PHP sangat flexible dalam pembuatan function
//  tidak sepertyi pada bahasa pemprograman lain yang harus ada aturan lokasi dimana membuat function
//  di PHP kita bebas membuat function  dimanapun, bisa didalam if statement, didalam function, dan sebagainya
//  namun perlu diingat jika kode function yang belum dieksekusi oleh PHP, maka function tersebut tidak akan bisa digunakan

function sayHEllo()
{
    echo "Hello Function" . PHP_EOL;
}

sayHEllo();
sayHEllo();