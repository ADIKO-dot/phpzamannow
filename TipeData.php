<?php
//  penggunakan tipe data int(desimal)
// tipe data desimal
echo "Decimal : ";
var_dump(1234);

// tipe data octa
echo "Octal : ";
var_dump(01234);

// tipe data hexadecimal
echo "Hexadecimal : ";
var_dump(0x1A);

// tipe data binary
echo "Binary : ";
var_dump(0b11111111);

echo "Underscore in number : ";
// var_dump(12334);
var_dump(1_234_234);

// tipe data float dimana setiap penulisan angka disini tanda titii (.) maka otomatis akan menjadi float
//  contoh ( 1.234)
echo "Floating Point : ";
var_dump(1.234);

echo "Floating Point dengan E Notation : (1.7 x 1000) : ";
var_dump(1.7e3);

echo "Floating Point dengan E Notation minus : (1.7 x 0.001) : ";
var_dump(1.7e-3);

echo "Underscore di Floating Point :  ";
var_dump(1_234.567);

// tipe data boolean
// tipe data benar atau salah
//  true or false

// untuk boolean true
echo "Benar :";
var_dump(true);

// untuk boolean false
echo "Salah :";
var_dump(false);

// tipe data string
// diphp unutkk membuat string bisa menggunakan
//  kutip satu atau kutip dua
//  kelebihan menggunakan double quote/petik dua
//  kita bisa menggunakan escape sequence
//  seperti \n untuk ENTER, \t untuk TAB

echo 'Nama : ';
echo 'I Putu Adi Bawa';
echo "\n"; //fungsi untuk meng ENTER baris

// double quote
echo "Nama  :";
echo "I\t Putu\t Bawa\n";

// HEREDOC
echo <<<ADI
    disini teks yang dtulis
    akan langsung sesuai baris
    yang diketikan di code editor
    jadi tidak perlu <br2>
    untuk 1 kesatuan teks berbaris
ADI;

// NEWDOC /kutip satu/tidak bisa parsing
echo <<<'ADI'
    disini teks yang dtulis
    akan langsung sesuai baris
    yang diketikan di code editor
    jadi tidak perlu <br2>
    untuk 1 kesatuan teks berbaris
ADI;