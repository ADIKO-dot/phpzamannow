<?php
// Dot Operator

// dot(titik) operator adalah operator yang bisa kita gunakan untuk menambhakn string dengan data lain(bisa string atau tipe data lainnya )
//  sebenarnya kita bisa menggunakan + (plus) untuk menambahkan string namun jika kita coba tambahkan string dengan tipe data number, maka akan terjadi error
//  oleh karena itu direkomendasikan menggunakan .(dot) untuk menambahkan string dengan data lain

$name = " putu adi bawa";

echo "Nama  :" . $name . PHP_EOL;
//  PHP_EOL adlaah sebuah enter seperti "\n"
echo "Value  :" . 100 . PHP_EOL;

// ---------------------------------- //

// KONVERSI KE NUMBER DAN SEBALIKNYA
//  kadang kita sering melalkukan konversi tipe data dari string ke number (int/float)
//  atau sebaliknya
// di pHP untuk melalukan konversi cukup mudah, kita hanyta perlu menggunakan tanda kuung (tipe data)
//  tipe data untuk string adalah string, untuk number bisa menggunakan int untuk integer
//  float untuk floating

$valueString = (string) 100;
var_dump($valueString);

$valueInt = (int) "100";
var_dump($valueInt);

$valueFloat = (float) "1.01";
var_dump($valueFloat);

// =-------------------------- ///

//  mengakses Karakter
// string di PHP seperti array akrakter dimana kita bisa mengakses data tipa karatkernya
// menggunakan kurungh sodium_crypto_kdf_derive_from_key sama seperti dia array, index pertama dimulai dari 0
//  jika kita mengakses index melebihi karakter di string, maka akan terjadi error

$nama = "Adi";
echo $nama[0] . PHP_EOL;
echo $nama[1] . PHP_EOL;
echo $nama[2] . PHP_EOL;

// VARIABEL PARSING
echo "Hello " . $nama . " , Selamat datang Belajar Php" . PHP_EOL;
//  dimudahkan jika menggunakan kutip dua , contoh dibawah
echo "Hello $nama , Selamat datang Belajar Php" . PHP_EOL;
//  CURLY BRACE
$var = "var";
echo "This is {$var}s" . PHP_EOL;
//  diatas menambahkan tulisan var menjadi vars