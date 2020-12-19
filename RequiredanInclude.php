<?php
/*
saat membuat aplikasi ada baiknya tidak dibuat dalam satu difile
lebih baik dipisah ke beberapa file agar kode program tidak terlalu bertumpuk disatu file
PHP memilikio function require dan include yang bisa dkita gunakan untuk mengambil file php lain
lantas apa bedanya require dan include?
PADA REQUIRE jika file yang kita ambil tidak ada, maka akan terjadi error dan program terhenti
PADA INCLUDE jika file yang kita ambil tidak ada, maka hanya akan memberi peringatan namun program akan tetap dilanjutkan
 */

require "lib/MyFunction.php";
echo sayHello("PUTUADI", "BAWA");

//  bisa juga menggunakan require_once dan include_once