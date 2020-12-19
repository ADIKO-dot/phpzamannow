<?php
//  for each
//  kadang kita bisaas mengakses data array menggunakan perulangan
//  mengakses data arrta menggunakan perulangan sangat bertele-tele, kita harus membuat counter
//  lalu mengakses array menggunakan counter yang kita buat
//  namun untungnya, di PHP terdapat perulangan for each, yang bisa digunakan untuk mengakses seluruj data di array secara otomatis

//  jika sebelumnya kita menggunakan for untuk perulangan
$names = ["Adi", "Putu", "Sintya"];

for ($i = 0; $i < count($names); $i++) {
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}

//  berikut penggunaan foreach

foreach ($names as $name) {
    echo "Data dengan nama $name" . PHP_EOL;
}
//  JIKA BUTUH INDEX DARI FOREACH DIATAS

foreach ($names as $index => $name) {
    echo "Data dengan $index nama $name" . PHP_EOL;
}

//  foreach dalam array map
$person = [
    "nama_depan" => "Putu",
    "nama_tengah" => "Adi",
    "nama_belakang" => "Bawa",
];
foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}