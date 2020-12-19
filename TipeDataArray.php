<?php
//  array adal;ah tipe data yang berisikan kosong atau banyak data
//  array bisa berisikan data dengan jenis berbeda-beda
//  array di PHP dinamis, artinya kita bisa menambahkan array sebanyak2/tidak ada batasan

// ----------------------//
//  OPERASI ARRAY
$nama = ["putu", "gede", "wahyu", "codet"];

//  $array[index ke berapa]
//  mengakses data di array pada indes kebrp
var_dump($nama[0]); // hasil putu

//  $array[index] = value
//  untuk mengubah data index kebrp
$nama[0] = "bawa";
var_dump($nama); // mana index 0 akan jadi bawa

//  $array[] = value
//  menambah data array pada posisi belakang
$nama[] = "koyo";
var_dump($nama); // maka ada index baru dipaling belakang

// unset($array[index])
//  menhapus data diarray, index otomatis hilang
unset($nama[2]);
var_dump($nama); // maka index 2 akan hilang

//  count($array)
//  mengambil total data di dalam array
var_dump(count($nama));

// -----------------------//
//  array sebagai MAP

$nama = array(
    "id" => "putuadi",
    "nama" => "iputuadibawa",
    "umur" => 23,
);
var_dump($nama["nama"]); // maka akan menampilkan iputuadibawa

// ---------// contoh ke 2 dengan []

$name = [
    "no" => 3,
    "pasangan" => "adi,putu",
    "wilayah" => "bali",
];
var_dump($name);

// -------------------///
//  array didalam array

$name = [
    "no" => 3,
    "pasangan" => "adi,putu",
    // array didalam array
    "wilayah" => [
        "provinsi" => "bali",
        "kabupaten" => "badung"
    ];
];
var_dump($name);