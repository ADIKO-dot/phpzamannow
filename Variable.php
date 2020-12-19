<?php
//  variabel adalah tempat untuk menyimpan data sehingga bisa kita gunakan lagi dikode program selanjutnya
// untuk membuat variable menggunakan $ (dolar)lalu diikuti nama variabel
// penamaan variable tidak boleh mengandung spasi

$name = "Adi";
$age = 23;

echo "Nama  :";
echo $name;
echo "\n";

echo "Umur  :";
echo $age;
echo "\n";

// variabel dengan string variabel
// penggunaan ini tidak disarankan
$name = "adi";
$$name = "kotak";

echo "nama  : ";
echo $name;
echo "\n";
echo "last name :";
//  variabel adi diambil dari string $name = "adi";
echo $adi;
echo "\n";

// -----------------------------------------------------////------------

//  penggunaan constant
define("NAMA", "i putu adi bawa");
define("UMUR_SEKARANG", 23);

//  untuk mengakses constant
echo "Nama  :";
echo NAMA;
echo "\n"; // n berfungsi spasi / enter
echo "Umur Tahun Ini    :";
echo UMUR_SEKARANG;
echo "\n";

// -------------------------------------------------///
//  DATA NULL
//  nilai null merepresentasikan sebuah variable tanpa nilai

$name = "putuadi";
//  menghapus isi dari variable diatas dengan null
$name = null;

//  cara mengecek apakah sebuah data bernilai null
//  null bukan mengecek apakah variable itu ada atau tidak
// dengan menggunakan isnull
echo "is name null ?";
echo var_dump(is_null($name));
echo "\n";

//  unset dgunakan untuk menghapus variabel
//  kalau null merubah isi variabel menjadi null

$name = "putuadi";
unset($name); // maka $name tidak ada/terhapus

//  isset untuk mengecek apakah varibel ada tau tidak
//  is_null untuk mengecek isi dari variabel yang sudah ada

$name = "bawa";
var_dump(isset($name)); // untuk mengecek apakah ada variabel $name