<?php
//  SWITCH STATEMENT
//  kadang kita hanya butuh menggunakan kondisi sederhana di if staement, seperti hanya menggunakan perbandingan ==
//  switch adalah staement percabangan yang sama dengan if, namun lebih sederhana cara pembuatannya
//  kondisi di switch statement hanya untuk perbandingan ==

$nilai = "B";

//  contoh penggunaan IF statement
if ($nilai == "A") {
    echo "Anda lulus dengan sangat baik" . PHP_EOL;
} else if ($nilai == "B" || $nilai == "C") {
    echo "Anda Lulus" . PHP_EOL;
} else if ($nilai == "D") {
    echo "Anda tidak lulus" . PHP_EOL;
} else {
    echo "Mungkin anda salah jurusan";
}

//  menggunakan switch statement

switch ($nilai) {
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda Lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus" . PHP_EOL;
        break;
    default:
        echo "Mungkin anda salah jurusan";
        break;

}

// syntax alternatif
//  sama seperti if staement, switch statement juga bisa tanpa menggunakan {} (kruung kurawal)
//  namun diakhir switch statement, kita harus menambahkan kata kunci endswitch

switch ($nilai):
case "A":
    echo "Anda lulus dengan sangat baik" . PHP_EOL;
    break;
case "B":
case "C":
    echo "Anda Lulus" . PHP_EOL;
    break;
case "D":
    echo "Anda tidak lulus" . PHP_EOL;
    break;
default:
    echo "Mungkin anda salah jurusan";
    break;

    endswitch;