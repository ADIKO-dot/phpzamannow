<?php
//  TERNARY OPERATOR
//  kadang ada kasus kita butuh melakukan pengecekan kondisi menggunakan if staement, lalu jika
//  benar kita ingin memberi nilai terhadap variable dengan nilai X dan jika salah dengan nilai Y
//  penggunaan if statement pada kasus seperti bisa dipersingkat menggunakan ternary operator
//  ternary operator menggunakan kata kunci ? dan :

$gender = "PRIA";
$hi = "null";

//  ternary operator
$hi = $gender == "PRIA" ? "Hi Bro" : "Hi Nona";

echo $hi . PHP_EOL;